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

<script>
    function formatter(x) {
        return (x).toLocaleString('en-US', {
            style: 'currency',
            currency: 'NGN',
        })
    }

    var base_url = "{{ url('/') }}"
    
    $('.openModal').on('click', function(e) {
        e.preventDefault()
        var dataId = $(this).attr("data-id");
        $('.productAJTitle').html('')
        $('.productAJPrice').html('')
        $('.productAJDesc').html('')
        $('.productAJStyle').html('')
        $('#productModalThumb').html('')
        $('#productModalNav').html('')
        $('.product__modal-quantity form').html('')
        $.get(base_url + '/product-json/' + dataId, function(response) {
            let images = response.data['product_attributes']
            
            var addToCartUrl = base_url + '/cart/add/' + response.data['id']
            var csrf = $('meta[name="csrf-token"]').attr('content')
            $('.productAJTitle').html(response.data['name'])
            $('.productAJPrice').html(formatter(response.data['amount']))
            $('.productAJDesc').html(response.data['detail'])
            $('.productAJStyle').html('Style: ' + response.data['style'])

            images.forEach((image) => {
                $('#productModalThumb').append(
                    '<div class="tab-pane fade item" id="pro-'+image.id+'" role="tabpanel" aria-labelledby="pro-'+image.id+'-tab">'+
                        '<div class="product__modal-thumb w-img">'+
                            '<img src="'+image.image+'" alt="">'+
                        '</div>'+
                    '</div>'
                )
                $('#productModalNav').append(
                    '<li class="nav-item" role="presentation">'+
                        '<button class="nav-link" id="pro-'+image.id+'-tab" data-bs-toggle="tab" data-bs-target="#pro-'+image.id+'" type="button" role="tab" aria-controls="pro-'+image.id+'" aria-selected="true">'+
                            '<img src="'+image.image+'" alt="">'+
                        '</button>'+
                    '</li>'
                )
            })
            $('.product__modal-quantity form').append(
                '<form action="'+addToCartUrl+'" method="POST">'+
                    '<input type="hidden" name="_token" value="'+csrf+'" />'+
                    '<input type="hidden" name="_method" value="GET" />'+
                    '<div class="pro-quan-area d-sm-flex align-items-center">'+
                        '<div class="product__modal-cart mb-25">'+
                            '<button class="product-modal-cart-btn " type="submit">Add to cart</button>'+
                        '</div>'+
                    '</div>'+
                '</form>'
            )
            $('#productModalThumb .item:first').addClass('show active')
            $('#productModalNav li button:first').addClass('active')
        })
    })
    // var paymentForm = document.getElementById('paymentForm');
    // paymentForm.addEventListener('submit', function(e) {
    //     e.preventDefault()

    //     base_url = "{{ url('/') }}";
        
    //     var country = document.getElementById('checkoutCountry').value;
    //     var firstName = document.getElementById('checkoutFirstname').value;
    //     var lastname = document.getElementById('checkoutLastname').value;
    //     var address = document.getElementById('checkoutAddress').value;
    //     var city = document.getElementById('checkoutCity').value;
    //     var state = document.getElementById('checkoutState').value;
    //     var code = document.getElementById('checkoutCode').value;
    //     var email = document.getElementById('checkoutEmail').value;
    //     var phone = document.getElementById('checkoutPhone').value; checkoutAmount
    //     var newAccount = document.getElementById('checkoutNewAccount').value;
    //     var amount = document.getElementById('checkoutAmount').value;
    //     var password = document.getElementById('checkoutPassword').value;

    //     var data = {
    //         amount: amount,
    //         name: firstName + lastname,
    //         email: email,
    //         phone: phone,
    //         city: city,
    //         country: country,
    //         state: state,
    //         address: address,
    //         metadata: {name: }
    //     };
    // })
   
</script>