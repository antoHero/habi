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
<!-- @notifyJs -->
<!-- <script>
var url = "{{ url('/') }}";

function getCart() {

  $.get(url + '/cart/fetch').done(function(res) {
    let total = 0;
    if(cartList) {
      $.each(res, function(key, value) {
        total += value.price * value.quantity
        console.log('getting cart here', value)
        cartList.append("<li class='cartmini__item p-rel d-flex align-items-start'>" +
                                      "<div class='cartmini__thumb mr-15'>" +
                                          "<a href='product-details.html'>" +
                                              "<img src="+ value.image +" alt=''>" +
                                          "</a>" +
                                      "</div>" +
                                      "<div class='cartmini__content'>" +
                                          "<h3 class='cartmini__title'>" +
                                              "<a href='product-details.html'>" + value.name +"</a>" +
                                          "</h3>" +
                                          "<span class='cartmini__price'>" +
                                              "<span class='price'>" + value.quantity + " × " + numberWithCommas(value.price) + "</span>" +
                                          "</span>" +
                                      "</div>" +
                                      "<a id='itemToDelete' data-id="+ value.id + " class='cartmini__remove' onclick='removeFromCart()' style='cursor: pointer;' id='removeItemFromCart'>" +
                                          "<i class='fal fa-times'></i>" +
                                      "</a>"
                                  );
      })
    } else {
      console.log('list not found')
    }
    $('#cartSumTotal').text(numberWithCommas(total))
    $('#cartItemsCount').text(Object.keys(res).length)
  });
}

function removeFromCart() {
  var id = $('#itemToDelete').data('id')
  $.get(url + '/cart/delete/' + id).done(function(response) {
    getCart();
  })
}


var cartList = $('#itemsInHabiCart')

function addToCart(e,id) {
  e.preventDefault()
  $.get(url + '/cart/add/' + id).done(function(res) {
    getCart();
    window.location.reload();
  });
}

function numberWithCommas(amount) {
  var n= amount.toString().split(".");
  n[0] = n[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
  return "₦" + n.join(".");
}


</script> -->

<script>
var delbtn = $('#delItemBtn')
if(delbtn) {
  delbtn.click(function(){
    alert("The paragraph was clicked.");
  });
} else {
  console.log('no')
}
</script>
