<script src="{{ url('frontend_assets') }}/assets/js/jquery.min.js"></script>
<script src="{{ url('frontend_assets') }}/assets/js/waypoints.min.js"></script>
<script src="{{ url('frontend_assets') }}/assets/js/bootstrap.bundle.min.js"></script>
<script src="{{ url('frontend_assets') }}/assets/js/tweenmax.js"></script>
<script src="{{ url('frontend_assets') }}/assets/js/owl.carousel.min.js"></script>
<script src="{{ url('frontend_assets') }}/assets/js/slick.min.js"></script>
<script src="{{ url('frontend_assets') }}/assets/js/jquery-ui-slider-range.js"></script>
<script src="{{ url('frontend_assets') }}/assets/js/jquery.meanmenu.min.js"></script>
<script src="{{ url('frontend_assets') }}/assets/js/isotope.pkgd.min.js"></script>
<script src="{{ url('frontend_assets') }}/assets/js/wow.min.js"></script>
<script src="{{ url('frontend_assets') }}/assets/js/jquery.scrollUp.min.js"></script>
<script src="{{ url('frontend_assets') }}/assets/js/countdown.min.js"></script>
<script src="{{ url('frontend_assets') }}/assets/js/jquery.magnific-popup.min.js"></script>
<script src="{{ url('frontend_assets') }}/assets/js/parallex.js"></script>
<script src="{{ url('frontend_assets') }}/assets/js/imagesloaded.pkgd.min.js"></script>
<script src="{{ url('frontend_assets') }}/assets/js/jquery.nice-select.min.js"></script>
<script src="{{ url('frontend_assets') }}/assets/js/main.js"></script>

<script>
  function removeFromCart(id) {
    if(confirm("About to remove item from cart")) {
      var url = "{{url('/')}}"
      $.get(url + '/cart/delete/' + id).done(function(response) {
        window.location.reload();
      })
    }
  }
</script>
