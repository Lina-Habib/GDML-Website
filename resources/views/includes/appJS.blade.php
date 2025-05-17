

<!--   Core JS Files   -->
<script src="{{ asset('js/core/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/core/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/plugins/perfect-scrollbar.min.js') }}"></script>


<!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
<script src="{{ asset('js/plugins/countup.min.js') }}"></script>


<script src="{{ asset('js/plugins/choices.min.js') }}"></script>



<script src="{{ asset('js/plugins/prism.min.js') }}"></script>
<script src="{{ asset('js/plugins/highlight.min.js') }}"></script>



<!--  Plugin for Parallax, full documentation here: https://github.com/dixonandmoe/rellax -->
<script src="{{ asset('js/plugins/rellax.min.js') }}"></script>
<!--  Plugin for TiltJS, full documentation here: https://gijsroge.github.io/tilt.js/ -->
<script src="{{ asset('js/plugins/tilt.min.js') }}"></script>
<!--  Plugin for Selectpicker - ChoicesJS, full documentation here: https://github.com/jshjohnson/Choices -->
<script src="{{ asset('js/plugins/choices.min.js') }}"></script>




<!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
<!--  Google Maps Plugin    -->

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
<script src="{{ asset('js/material-kit.min.js?v=3.1.0') }}" type="text/javascript"></script>


<script type="text/javascript">

  if (document.getElementById('state1')) {
    const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
    if (!countUp.error) {
      countUp.start();
    } else {
      console.error(countUp.error);
    }
  }
  if (document.getElementById('state2')) {
    const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
    if (!countUp1.error) {
      countUp1.start();
    } else {
      console.error(countUp1.error);
    }
  }
  if (document.getElementById('state3')) {
    const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
    if (!countUp2.error) {
      countUp2.start();
    } else {
      console.error(countUp2.error);
    };
  }
</script>

<!-- Libraries for draw 2D page -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/mathjs/12.0.0/math.min.js"></script>
<script src="https://cdn.plot.ly/plotly-2.30.0.min.js"></script>
<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>

<!----- darw 3D page ----->
<!-- Add Plotly.js -->
<script src="https://cdn.plot.ly/plotly-2.35.2.min.js"></script>
<!-- Add math.js to Evaluate mathematical expressions safely-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/mathjs/12.0.0/math.js" integrity="sha512-6NirKqWjDEM1u1i0g7pAMs3cxF2CrJgho3KVKBpEum0pNOp4NBNr0sQ1P6TsOus2hW3u2p3zC2LGb3e8eY1+0wg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Download Swiper library -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


