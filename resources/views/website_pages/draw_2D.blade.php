@extends('layouts.main_website')


@section('content_body')

 <header class="bg-gradient-dark">
    <div class="page-header min-vh-70" style="background-image: url({{ asset('imgs/bg4.jpg') }}); background-size: cover;">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center mx-auto my-auto">
                    <h1 class="text-white">{{ __('messages.draw.try') }}</h1>
                    <p class="lead mb-4 text-white opacity-8">{{ __('messages.draw.cartesian') }}</p>
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
              <label class="form-label" style="font-size: 18px;">{{ __('messages.draw.write_equation_2D') }}</label>
              <input type="text" class="form-control" id="equation" style="font-size: 18px;">
            </div>

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
            </div>

            <div class="text-center">
              <button type="button" id="draw-btn" class="btn w-50 my-4 mb-2" style="background-color: black; color: #f7ef97; font-size: 18px;" onmouseover="this.style.backgroundColor='#f7ef97'; this.style.color='black'" onmouseout="this.style.backgroundColor='black'; this.style.color='#f7ef97'">{{ __('messages.draw.draw') }}</button>

              <button type="button" id="add-point-btn" class="btn w-50 my-4 mb-2 d-none" style="background-color: black; color: #f7ef97; font-size: 18px;" onmouseover="this.style.backgroundColor='#f7ef97'; this.style.color='black'" onmouseout="this.style.backgroundColor='black'; this.style.color='#f7ef97'">
              {{ __('messages.draw.add') }}</button>
            </div>
          </div>
          <div class="col-lg-12">
            <div id="plot" style="width: 100%; height: 800px;"></div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- JavaScript to handle equation or points plotting -->
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      let points = []; // Array to store user-entered points

      // Toggle input fields based on selection
      const equationOption = document.getElementById("equationOption");
      const pointsOption = document.getElementById("pointsOption");
      const equationInput = document.getElementById("equationInput");
      const pointsInput = document.getElementById("pointsInput");
      const drawBtn = document.getElementById("draw-btn");
      const addPointBtn = document.getElementById("add-point-btn");

      function toggleInputs() {
        if (equationOption.checked) {
          equationInput.classList.remove("d-none");
          pointsInput.classList.add("d-none");
          drawBtn.classList.remove("d-none");
          addPointBtn.classList.add("d-none");
        } else {
          equationInput.classList.add("d-none");
          pointsInput.classList.remove("d-none");
          drawBtn.classList.add("d-none");
          addPointBtn.classList.remove("d-none");
        }
      }

      equationOption.addEventListener("change", toggleInputs);
      pointsOption.addEventListener("change", toggleInputs);

      // Draw equation
      drawBtn.addEventListener("click", function () {
        let expr = document.getElementById("equation").value.trim();

        // Verify the equation is not empty
        if (expr === "") {
          alert("{{ __('messages.draw.Enter_equation') }}");
          return;
        }

        console.log("Original input:", expr);

        // Convert to lowercase to handle case-insensitive input
        expr = expr.toLowerCase();

        // Clean the equation
        expr = expr.replace(/\s+/g, " ");
        expr = expr.replace(/(\w+)\s*\^\s*(\w+)/g, "pow($1, $2)");
        expr = expr.replace(/e\s*\^/gi, "exp");
        expr = expr.replace(/[^a-zA-Z0-9+\-*/().,exp pow]/g, "");

        console.log("Processed expression:", expr);

        // Check for invalid characters
        if (/[+*\/-]\s*$/.test(expr)) {
          alert("{{ __('messages.draw.Invalid_equation') }}");
          return;
        }

        // Check for invalid expressions
        if (/(\+\+|--|\/\/)/.test(expr)) {
          alert("{{ __('messages.draw.Invalid_formula') }}");
          return;
        }

        const xValues = [];
        const yValues = [];

        // Calculate x and y values for the equation
        for (let x = -10; x <= 10; x += 0.1) {
          try {
            console.log("Evaluating:", expr, "for x =", x);
            const y = math.evaluate(expr, { x: x, e: Math.E });
            if (!isNaN(y) && isFinite(y)) {
              xValues.push(x);
              yValues.push(y);
            }
          } catch (e) {
            console.error("Error in Equation:", e, "Expression:", expr);
            alert(
              "Invalid equation:" + e.message + "\n Expression: " + expr + "\n Check the expression at the position" + (e.index || " unknown") + "\n Hint: Use 'x^2' for exponents, 'exp(x)' or 'e^x' for exponents."
            );
            return;
          }
        }

        // Create trace for the equation
        const equationTrace = {
          x: xValues,
          y: yValues,
          mode: "lines",
          type: "scatter",
          name: "{{ __('messages.draw.equation') }}"
        };

        // Plot the equation with numbered axes
        Plotly.newPlot("plot", [equationTrace], {
          xaxis: {
            title: "x",
            range: [-10, 10], // x-axis range
            dtick: 1, // Space between numbers (each 1 unit)
            showticklabels: true, // Show numbers
            showgrid: true, // Show network
            zeroline: true, // Show zero line
            zerolinecolor: '#000',
            zerolinewidth: 2
          },
          yaxis: {
            title: "y",
            range: [-10, 10], // y axis range
            dtick: 1, // Space between numbers (each 1 unit)
            showticklabels: true, // Show numbers
            showgrid: true, // Show network
            zeroline: true, // Show zero line
            zerolinecolor: '#000',
            zerolinewidth: 2
          },
          showlegend: true,
          margin: { t: 30, b: 50, l: 50, r: 50 } // Margin to avoid cutting
        });
      });

      // Add point
      addPointBtn.addEventListener("click", function () {
        const x = parseFloat(document.getElementById("point-x").value);
        const y = parseFloat(document.getElementById("point-y").value);

        // Verify valid input
        if (isNaN(x) || isNaN(y)) {
          alert("{{ __('messages.draw.err_valid_val') }}");
          return;
        }

        // Add point to the array
        points.push({ x, y });

        // Create trace for points
        const pointsTrace = {
          x: points.map(p => p.x),
          y: points.map(p => p.y),
          mode: "markers",
          type: "scatter",
          name: "{{ __('messages.draw.points') }}",
          marker: { size: 10, color: "red" }
        };

        // Plot the points with numbered axes
        Plotly.newPlot("plot", [pointsTrace], {
          xaxis: {
            title: "x",
            range: [-10, 10], // x-axis range
            dtick: 1, // Space between numbers (each 1 unit)
            showticklabels: true, // Show numbers
            showgrid: true, // Show network
            zeroline: true, // Show zero line
            zerolinecolor: '#000',
            zerolinewidth: 2
          },
          yaxis: {
            title: "y",
            range: [-10, 10], // y axis range
            dtick: 1, // Space between numbers (each 1 unit)
            showticklabels: true, // Show numbers
            showgrid: true, // Show network
            zeroline: true, // Show zero line
            zerolinecolor: '#000',
            zerolinewidth: 2
          },
          showlegend: true,
          margin: { t: 30, b: 50, l: 50, r: 50 } // Margin to avoid cutting
        });

        // Clear input fields
        // document.getElementById("point-x").value = "";
        // document.getElementById("point-y").value = "";
      });
    });
  </script>

@stop