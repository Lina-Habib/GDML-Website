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
                <label class="form-check-label" for="equationOption" style="font-size: 18px;">{{ __('messages.draw.equation_or_inequality') }}</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="inputType" id="pointsOption" value="points">
                <label class="form-check-label" for="pointsOption" style="font-size: 18px;">{{ __('messages.draw.points') }}</label>
              </div>
            </div>

            <!-- Equation/Inequality input -->
            <div id="equationInput" class="input-group input-group-dynamic mb-3">
              <label class="form-label" style="font-size: 18px;"></label>
              <input type="text" class="form-control" id="equation" placeholder="{{ __('messages.draw.enter_equation_or_inequality') }}" style="font-size: 18px;">
            </div>

            <h5 id="equation-hint" style="margin-top: 40px;">
              <!-- {{ __('messages.draw.hint_equation_inequality') }} -->
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

    <h2 style="margin-bottom: 50px;">{{ __('messages.draw.address_img') }}</h2>

    <div class="image-row">
      <div class="image-container">
          <img src="{{ asset('imgs/images/functions/abs.webp') }}" alt="absolute" style="margin-bottom: 10px;">
          <p class="equation-select" data-equation="abs(x)">|x|</p>
      </div>
      <div class="image-container">
          <img src="{{ asset('imgs/images/functions/constant.webp') }}" alt="constant" style="margin-bottom: 10px;">
          <p class="equation-select" data-equation="3">C</p>
      </div>
      <div class="image-container">
          <img src="{{ asset('imgs/images/functions/cubic.webp') }}" alt="cubic" style="margin-bottom: 10px;">
          <p class="equation-select" data-equation="x^3">x³</p>
      </div>
      <div class="image-container">
          <img src="{{ asset('imgs/images/functions/inverse.webp') }}" alt="inverse" style="margin-bottom: 10px;">
          <p class="equation-select" data-equation="1/x">1/x</p>
      </div>
    </div>

    <div class="image-row">
        <div class="image-container">
            <img src="{{ asset('imgs/images/functions/matching.webp') }}" alt="matching" style="margin-bottom: 10px;">
            <p class="equation-select" data-equation="x">x</p>
        </div>
        <div class="image-container">
            <img src="{{ asset('imgs/images/functions/quadratic.webp') }}" alt="quadratic" style="margin-bottom: 10px;">
            <p class="equation-select" data-equation="x^2">x²</p>
        </div>
        <div class="image-container">
            <img src="{{ asset('imgs/images/functions/square_root.webp') }}" alt="square root" style="margin-bottom: 10px;">
            <p class="equation-select" data-equation="sqrt(x)">x√</p>
        </div>
        <div class="image-container">
            <img src="{{ asset('imgs/images/functions/step.webp') }}" alt="step" style="margin-bottom: 10px;">
            <p class="equation-select" data-equation="floor(x)">[x]</p>
        </div>
    </div>
</div>

<!-- JavaScript to handle equation, inequality, or points plotting -->
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
    }

    equationOption.addEventListener("change", toggleInputs);
    pointsOption.addEventListener("change", toggleInputs);

    // Draw equation or inequality
    drawBtn.addEventListener("click", function () {
      let expr = document.getElementById("equation").value.trim();

      // Verify the equation/inequality is not empty
      if (expr === "") {
        alert("{{ __('messages.draw.enter_equation_or_inequality') }}");
        return;
      }

      console.log("Original input:", expr);

      // Convert to lowercase and replace Arabic variables
      expr = expr.toLowerCase();
      expr = expr.replace(/س/g, 'x').replace(/ص/g, 'y');

      // Clean the expression and handle exponents
      expr = expr.replace(/\s+/g, " ");
      expr = expr.replace(/(\w+)\s*\^\s*(\w+)/g, "pow($1, $2)");
      expr = expr.replace(/e\s*\^/gi, "exp");
      expr = expr.replace(/[^a-zA-Z0-9+\-*/().,<>=≤≥exp pow]/g, "");

      console.log("Processed expression:", expr);

      // Check for invalid characters
      if (/[+*\/-]\s*$/.test(expr)) {
        alert("{{ __('messages.draw.invalid_equation') }}");
        return;
      }

      // Check for invalid expressions
      if (/(\+\+|--|\/\/)/.test(expr)) {
        alert("{{ __('messages.draw.invalid_formula') }}");
        return;
      }

      // Determine if it's an equation or inequality
      const operators = ['<=', '>=', '<', '>', '='];
      let operator = null;
      let leftSide, rightSide;

      for (const op of operators) {
        if (expr.includes(op)) {
          operator = op;
          [leftSide, rightSide] = expr.split(op).map(s => s.trim());
          break;
        }
      }

      const traces = [];

      if (operator) {
        // Handle inequality
        const isInequality = operator !== '=';
        const xValues = [];
        const yValues = [];

        // Check if it's a single-variable inequality (e.g., x < 3)
        const hasY = leftSide.includes('y') || rightSide.includes('y');

        if (!hasY) {
          // Single-variable inequality (e.g., x < 3)
          try {
            const boundary = math.evaluate(rightSide, { x: 0, e: Math.E });
            if (isNaN(boundary) || !isFinite(boundary)) {
              alert("{{ __('messages.draw.invalid_equation') }}");
              return;
            }

            // Create a shaded region for the inequality
            const xShade = [];
            const yShade = [];
            const xMin = -10, xMax = 10;
            const yMin = -10, yMax = 10;

            for (let x = xMin; x <= xMax; x += 0.1) {
              try {
                const scope = { x, e: Math.E };
                let satisfies = false;
                if (operator === '<') satisfies = x < boundary;
                else if (operator === '>') satisfies = x > boundary;
                else if (operator === '<=') satisfies = x <= boundary;
                else if (operator === '>=') satisfies = x >= boundary;
                else if (operator === '=') satisfies = x === boundary;

                if (satisfies) {
                  xShade.push(x);
                  yShade.push(yMax); // Extend to top
                  xShade.push(x);
                  yShade.push(yMin); // Extend to bottom
                }
              } catch (e) {
                console.error("Error in single-variable inequality:", e);
                alert("{{ __('messages.draw.invalid_equation') }}");
                return;
              }
            }

            // Add shaded region trace
            traces.push({
              x: xShade,
              y: yShade,
              fill: 'toself',
              fillcolor: 'rgba(0, 100, 255, 0.3)',
              mode: 'none',
              name: "{{ __('messages.draw.solution_region') }}"
            });

            // Add boundary line
            traces.push({
              x: [boundary, boundary],
              y: [yMin, yMax],
              mode: 'lines',
              line: { color: 'blue', width: 2, dash: operator === '=' ? 'solid' : 'dash' },
              name: "{{ __('messages.draw.boundary') }}"
            });
          } catch (e) {
            console.error("Error in single-variable inequality:", e);
            alert("{{ __('messages.draw.invalid_equation') }}");
            return;
          }
        } else {
          // Two-variable inequality (e.g., y < x^2 or x^2 + y^2 <= 4)
          const xMin = -10, xMax = 10;
          const yMin = -10, yMax = 10;
          const step = 0.2;
          const xValues = [];
          const yValues = [];

          // Create a grid for shading
          const xShade = [];
          const yShade = [];

          for (let x = xMin; x <= xMax; x += step) {
            for (let y = yMin; y <= yMax; y += step) {
              try {
                const scope = { x, y, e: Math.E };
                const leftVal = math.evaluate(leftSide, scope);
                const rightVal = math.evaluate(rightSide, scope);
                let satisfies = false;

                if (operator === '<') satisfies = leftVal < rightVal;
                else if (operator === '>') satisfies = leftVal > rightVal;
                else if (operator === '<=') satisfies = leftVal <= rightVal;
                else if (operator === '>=') satisfies = leftVal >= rightVal;
                else if (operator === '=') satisfies = Math.abs(leftVal - rightVal) < 1e-6;

                if (satisfies) {
                  xShade.push(x);
                  yShade.push(y);
                }
              } catch (e) {
                console.error("Error in two-variable inequality:", e);
                alert("{{ __('messages.draw.invalid_equation') }}");
                return;
              }
            }
          }

          // Add shaded region trace
          traces.push({
            x: xShade,
            y: yShade,
            mode: 'markers',
            type: 'scatter',
            marker: { size: 2, color: 'rgba(0, 100, 255, 0.3)' },
            name: "{{ __('messages.draw.solution_region') }}"
          });

          // Add boundary line (for equations or inequalities)
          if (leftSide === 'y' && operator === '=') {
            // Explicit equation: y = f(x)
            for (let x = xMin; x <= xMax; x += 0.1) {
              try {
                const y = math.evaluate(rightSide, { x, e: Math.E });
                if (!isNaN(y) && isFinite(y)) {
                  xValues.push(x);
                  yValues.push(y);
                }
              } catch (e) {
                console.error("Error in equation:", e);
              }
            }
            traces.push({
              x: xValues,
              y: yValues,
              mode: 'lines',
              line: { color: 'blue', width: 2 },
              name: "{{ __('messages.draw.boundary') }}"
            });
          } else {
            // Implicit equation/inequality: f(x, y) = 0
            const boundaryX = [];
            const boundaryY = [];
            for (let x = xMin; x <= xMax; x += 0.1) {
              try {
                // Solve for y where leftSide = rightSide
                const scope = { x, e: Math.E };
                const expr = `${leftSide} - (${rightSide})`;
                const yValues = math.solve(expr, 'y', scope);
                if (Array.isArray(yValues)) {
                  yValues.forEach(y => {
                    if (!isNaN(y) && isFinite(y) && y >= yMin && y <= yMax) {
                      boundaryX.push(x);
                      boundaryY.push(y);
                    }
                  });
                } else if (!isNaN(yValues) && isFinite(yValues)) {
                  boundaryX.push(x);
                  boundaryY.push(yValues);
                }
              } catch (e) {
                console.error("Error in boundary calculation:", e);
              }
            }
            traces.push({
              x: boundaryX,
              y: boundaryY,
              mode: 'lines',
              line: { color: 'blue', width: 2, dash: operator === '=' ? 'solid' : 'dash' },
              name: "{{ __('messages.draw.boundary') }}"
            });
          }
        }
      } else {
        // Handle equation (assumed to be y = f(x) if no operator)
        const xValues = [];
        const yValues = [];

        for (let x = -10; x <= 10; x += 0.1) {
          try {
            const y = math.evaluate(expr, { x, e: Math.E });
            if (!isNaN(y) && isFinite(y)) {
              xValues.push(x);
              yValues.push(y);
            }
          } catch (e) {
            console.error("Error in equation:", e);
            alert("{{ __('messages.draw.invalid_equation') }}: " + e.message);
            return;
          }
        }

        traces.push({
          x: xValues,
          y: yValues,
          mode: 'lines',
          type: 'scatter',
          name: '{{ __('messages.draw.equation') }}'
        });
      }

      // Plot with numbered axes
      Plotly.newPlot("plot", traces, {
        xaxis: {
          title: "x",
          range: [-10, 10],
          dtick: 1,
          showticklabels: true,
          showgrid: true,
          zeroline: true,
          zerolinecolor: '#000',
          zerolinewidth: 2
        },
        yaxis: {
          title: "y",
          range: [-10, 10],
          dtick: 1,
          showticklabels: true,
          showgrid: true,
          zeroline: true,
          zerolinecolor: '#000',
          zerolinewidth: 2
        },
        showlegend: true,
        margin: { t: 30, b: 50, l: 50, r: 50 }
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
          range: [-10, 10],
          dtick: 1,
          showticklabels: true,
          showgrid: true,
          zeroline: true,
          zerolinecolor: '#000',
          zerolinewidth: 2
        },
        yaxis: {
          title: "y",
          range: [-10, 10],
          dtick: 1,
          showticklabels: true,
          showgrid: true,
          zeroline: true,
          zerolinecolor: '#000',
          zerolinewidth: 2
        },
        showlegend: true,
        margin: { t: 30, b: 50, l: 50, r: 50 }
      });
    });

    const equationInputField = document.getElementById("equation");
    const originalPlaceholder = equationInputField.getAttribute("placeholder");

    equationInputField.addEventListener("input", function () {
      if (this.value.trim() !== "") {
        this.removeAttribute("placeholder");
      } else {
        this.setAttribute("placeholder", originalPlaceholder);
      }
    });

    // Handle click on equation images to draw automatically
    document.querySelectorAll(".equation-select").forEach(item => {
      item.style.cursor = "pointer";
      item.addEventListener("click", () => {
        const equation = item.getAttribute("data-equation");

        // Ensure the user is in "Equation" mode
        document.getElementById("equationOption").checked = true;
        document.getElementById("pointsOption").checked = false;
        toggleInputs();

        // Fill the input box with the selected equation
        document.getElementById("equation").value = equation;

        // Scroll to the plot
        const plotSection = document.getElementById("plot");
        if (plotSection) {
          plotSection.scrollIntoView({ behavior: "smooth" });
        }

        // Automatically execute the "draw" command
        drawBtn.click();
      });
    });
  });
</script>

@stop