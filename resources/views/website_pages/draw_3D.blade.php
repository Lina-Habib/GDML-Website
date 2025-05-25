@extends('layouts.main_website')


@section('content_body')

 <header class="bg-gradient-dark">
    <div class="page-header min-vh-70" style="background-image: url({{ asset('imgs/bg3.jpg') }}); background-size: cover;">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center mx-auto my-auto">
                    <h1 class="text-white">{{ __('messages.draw.try') }}</h1>
                    <p class="lead mb-4 text-white opacity-8">{{ __('messages.draw.3D') }}</p>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- interface for selecting equation or points -->
  <div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6">
    <section class="py-8">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <!-- Selection between equation or points -->
            <div class="mb-4">
              <label class="form-label" style="font-size: 18px;">{{ __('messages.draw.input_type') }}</label>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="inputType" id="equationOption" value="equation" checked>
                <label class="form-check-label" for="equationOption" style="font-size: 18px;">{{ __('messages.draw.equation') }}</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="inputType" id="pointsOption" value="points">
                <label class="form-check-label" for="pointsOption" style="font-size: 18px;">{{ __('messages.draw.points') }}</label>
              </div>
            </div>

            <!-- Equation input -->
            <div id="equationInput" class="input-group input-group-dynamic mb-3">
              <label class="form-label" style="font-size: 18px;">{{ __('messages.draw.write_equation_3D') }}</label>
              <input type="text" class="form-control" id="equation" style="font-size: 18px;">
            </div>

            <h5 id="equation-hint" style="margin-top: 40px;">
              {{ __('messages.draw.findZ') }}
            </h5>

            <!-- Points input -->
            <div id="pointsInput" class="d-none">
              <div class="input-group input-group-dynamic mb-3">
                <label class="form-label" style="font-size: 18px;">{{ __('messages.draw.x') }}</label>
                <input type="number" class="form-control" id="point-x" step="any" style="font-size: 18px;">
              </div>
              <div class="input-group input-group-dynamic mb-3">
                <label class="form-label" style="font-size: 18px;">{{ __('messages.draw.y') }}</label>
                <input type="number" class="form-control" id="point-y" step="any" style="font-size: 18px;">
              </div>
              <div class="input-group input-group-dynamic mb-3">
                <label class="form-label" style="font-size: 18px;">{{ __('messages.draw.z') }}</label>
                <input type="number" class="form-control" id="point-z" step="any" style="font-size: 18px;">
              </div>
            </div>

            <div class="text-center">
              <button type="button" id="draw-btn" class="btn w-50 my-4 mb-2" style="background-color: black; color: #f7ef97; font-size: 18px;" onmouseover="this.style.backgroundColor='#f7ef97'; this.style.color='black'" onmouseout="this.style.backgroundColor='black'; this.style.color='#f7ef97'">{{ __('messages.draw.draw') }}</button>

              <button type="button" id="add-point-btn" class="btn w-50 my-4 mb-2 d-none" style="background-color: black; color: #f7ef97; font-size: 18px;" onmouseover="this.style.backgroundColor='#f7ef97'; this.style.color='black'" onmouseout="this.style.backgroundColor='black'; this.style.color='#f7ef97'">
              {{ __('messages.draw.add') }}</button>
            </div>
            <div id="error-message" class="text-danger text-center" style="font-size: 18px; display: none;"></div>
          </div>
          <div class="col-lg-12">
            <div id="plot3d" style="width: 100%; height: 800px;"></div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- JavaScript to handle equation or points plotting -->
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      let points = []; // Array to store user-entered points (x, y, z)

      // Toggle input fields based on selection
      const equationOption = document.getElementById("equationOption");
      const pointsOption = document.getElementById("pointsOption");
      const equationInput = document.getElementById("equationInput");
      const pointsInput = document.getElementById("pointsInput");
      const drawBtn = document.getElementById("draw-btn");
      const addPointBtn = document.getElementById("add-point-btn");
      const errorMessage = document.getElementById("error-message");
      const equationHint = document.getElementById('equation-hint');

      function toggleInputs() {
        if (equationOption.checked) {
          equationInput.classList.remove("d-none");
          pointsInput.classList.add("d-none");
          drawBtn.classList.remove("d-none");
          addPointBtn.classList.add("d-none");
          equationHint.style.display = 'block';
        } else {
          equationInput.classList.add("d-none");
          pointsInput.classList.remove("d-none");
          drawBtn.classList.add("d-none");
          addPointBtn.classList.remove("d-none");
          equationHint.style.display = 'none';
        }
        errorMessage.style.display = "none"; // Hide error message on toggle
      }

      equationOption.addEventListener("change", toggleInputs);
      pointsOption.addEventListener("change", toggleInputs);

      // Function to show error message
      function showError(message) {
        errorMessage.textContent = message;
        errorMessage.style.display = "block";
      }

      // Draw 3D equation
      drawBtn.addEventListener("click", function draw3D() {
        let expr = document.getElementById("equation").value.trim();
        if (!expr) {
          showError("{{ __('messages.draw.Enter_equation') }}");
          return;
        }

        // Convert to lowercase for case-insensitive input
        expr = expr.toLowerCase();

        // Clean input: normalize spaces
        expr = expr.replace(/\s+/g, " ").trim();
        console.log("Original input:", expr);

        // Validate input with regex
        const validPattern = /^[0-9xy+\-*/()^,\s()sin|cos|tan|sqrt|log|exp|pow]*$/;
        if (!validPattern.test(expr)) {
          showError("{{ __('messages.draw.Invalid_char') }}");
          return;
        }

        // Check for invalid syntax
        if (expr.match(/\^{2,}|\+\+|--|\*\/|\/\*|\/\/|\*\*/)) {
          showError("{{ __('messages.draw.Invalid_format') }}");
          return;
        }

        // Check for valid pow syntax
        if (expr.includes("pow") && !expr.match(/pow\s*\(\s*[xy0-9+\-*/.^()]+\s*,\s*[xy0-9+\-*/.^()]+\s*\)/)) {
          showError("{{ __('messages.draw.pow_formula') }}");
          return;
        }

        // Check if x or y is present
        if (!expr.includes("x") && !expr.includes("y")) {
          showError("{{ __('messages.draw.err_equation') }}");
          return;
        }

        // Convert ^ to pow(base, exponent)
        try {
			expr = expr.replace(/([xy0-9+\-*/.()]+)\s*\^\s*([xy0-9+\-*/.()]+)  /g, 'pow($1,$2)');
			expr = expr.replace(/pow\s*\(\s*([^,]+)\s*,\s*([^)]+)\s*\)/g, "pow($1,$2)");
          console.log("Processed expression:", expr);
        } catch (e) {
          showError("{{ __('messages.draw.Error_processing') }}");
          return;
        }

        // Evaluate the equation
        try {
          const x = [], y = [], z = [];
          const range = 10, step = 0.5;

          for (let i = -range; i <= range; i += step) {
            x.push(i);
            y.push(i);
          }

          for (let i = 0; i < x.length; i++) {
            const zRow = [];
            for (let j = 0; j < y.length; j++) {
              const scope = { x: x[i], y: y[j] };
              const value = math.evaluate(expr, scope);
              if (isNaN(value) || value === Infinity || value === -Infinity) {
                throw new Error(`Invalid result when x=${x[i]}, y=${y[j]}. Check the equation.`);
              }
              zRow.push(value);
            }
            z.push(zRow);
          }

          // Plotly data
          const data = [{
            z: z,
            x: x,
            y: y,
            type: "surface",
            colorscale: "Viridis"
          }];

          // Plotly layout with numbered axes
          const layout = {
            autosize: true,
            margin: { l: 50, r: 50, b: 50, t: 100 },
            scene: {
              xaxis: {
                title: { text: "X", font: { size: 16 } },
                range: [-10, 10], // x axis range
                dtick: 2, // Space between numbers (every 2 units)
                showticklabels: true, // Show numbers
                showgrid: true, // Show network
                zeroline: true, // Show zero line
                zerolinecolor: '#000',
                zerolinewidth: 2,
                tickfont: { size: 12 } // Font size for numbers
              },
              yaxis: {
                title: { text: "Y", font: { size: 16 } },
                range: [-10, 10], // y axis range
                dtick: 2, // Space between numbers (every 2 units)
                showticklabels: true, // Show numbers
                showgrid: true, // Show network
                zeroline: true, // Show zero line
                zerolinecolor: '#000',
                zerolinewidth: 2,
                tickfont: { size: 12 } // Font size for numbers
              },
              zaxis: {
                title: { text: "Z", font: { size: 16 } },
                range: [-10, 10], // z axis range
                dtick: 2, // Space between numbers (every 2 units)
                showticklabels: true, // Show numbers
                showgrid: true, // Show network
                zeroline: true, // Show zero line
                zerolinecolor: '#000',
                zerolinewidth: 2,
                tickfont: { size: 12 } // Font size for numbers
              }
            }
          };

          // Render the plot
          Plotly.newPlot("plot3d", data, layout);
          errorMessage.style.display = "none";
        } catch (e) {
          showError(`Invalid equation. Check the correct form (e.g., x^2 + y^2). Error: ${e.message}`);
          return;
        }
      });

      // Add point
      addPointBtn.addEventListener("click", function () {
        const x = parseFloat(document.getElementById("point-x").value);
        const y = parseFloat(document.getElementById("point-y").value);
        const z = parseFloat(document.getElementById("point-z").value);

        // Verify valid input
        if (isNaN(x) || isNaN(y) || isNaN(z)) {
          showError("{{ __('messages.draw.err_valid_vals') }}");
          return;
        }

        // Add point to the array
        points.push({ x, y, z });

        // Create trace for points
        const pointsTrace = {
          x: points.map(p => p.x),
          y: points.map(p => p.y),
          z: points.map(p => p.z),
          mode: "markers",
          type: "scatter3d",
          name: "{{ __('messages.draw.points') }}",
          marker: { size: 5, color: "red" }
        };

        // Plot only the points with numbered axes
        Plotly.newPlot("plot3d", [pointsTrace], {
          autosize: true,
          margin: { l: 50, r: 50, b: 50, t: 100 },
          scene: {
            xaxis: {
              title: { text: "X", font: { size: 16 } },
              range: [-10, 10], // x axis range
              dtick: 2, // Space between numbers (every 2 units)
              showticklabels: true, // Show numbers
              showgrid: true, // Show network
              zeroline: true, // Show zero line
              zerolinecolor: '#000',
              zerolinewidth: 2,
              tickfont: { size: 12 } // Font size for numbers
            },
            yaxis: {
              title: { text: "Y", font: { size: 16 } },
              range: [-10, 10], // y axis range
              dtick: 2, // Space between numbers (every 2 units)
              showticklabels: true, // Show numbers
              showgrid: true, // Show network
              zeroline: true, // Show zero line
              zerolinecolor: '#000',
              zerolinewidth: 2,
              tickfont: { size: 12 } // Font size for numbers
            },
            zaxis: {
              title: { text: "Z", font: { size: 16 } },
              range: [-10, 10], // z axis range
              dtick: 2, // Space between numbers (every 2 units)
              showticklabels: true, // Show numbers
              showgrid: true, // Show network
              zeroline: true, // Show zero line
              zerolinecolor: '#000',
              zerolinewidth: 2,
              tickfont: { size: 12 } // Font size for numbers
            }
          }
        });

        // Clear input fields
        // document.getElementById("point-x").value = "";
        // document.getElementById("point-y").value = "";
        // document.getElementById("point-z").value = "";
        // errorMessage.style.display = "none";
      });
    });
  </script>

@stop