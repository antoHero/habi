<div class="cartmini__area">
    <div class="modal fade" id="cartMiniModal" tabindex="-1" aria-labelledby="cartMiniModal" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="cartmini__wrapper">
                <div class="cartmini__top d-flex align-items-center justify-content-between">
                    <h4>Cart Items</h4>
                    <div class="cartminit__close">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#cartMiniModal" class="cartmini__close-btn"> <i class="fal fa-times"></i></button>
                    </div>
                </div>
                <div class="cartmini__list">
                  @if(count($cartItems))
                    <ul id="itemsInHabiCart">
                        @foreach($cartItems as $key=>$product)
                        <li class="cartmini__item p-rel d-flex align-items-start">
                            <div class="cartmini__thumb mr-15">
                                <a href="product-details.html">
                                    <img src="{{ $product->extra_info['image'] }}" alt="">
                                </a>
                            </div>
                            <div class="cartmini__content">
                                <h3 class="cartmini__title">
                                    <a href="{{ route('product.details', $product->extra_info['slug']) }}">{{ $product->title }}</a>
                                </h3>
                                <span class="cartmini__price">
                                    <span class="price">{{ $product->quantity }} × {{ '₦'.number_format($product->price) }}</span>
                                </span> |
                                <span class="cartmini__price">
                                    <span class="price">Size: {{ $product->extra_info['size'] }} </span>
                                </span> |
                                <span class="cartmini__price">
                                    <span class="price">Color: <span  style="border: 1px solid #000; background-color: {{ $product->extra_info['color'] }}; width: 100px; color: #000;">Color</span></span>
                                </span>
                            </div>
                            <a class="cartmini__remove" onclick="removeFromCart({{$product['id']}})" style="cursor: pointer;">
                                <i class="fal fa-times"></i>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                    @endif
                </div>
                @php $total = 0 @endphp
                  @foreach($cartItems as $id => $details)
                      @php $total += $details->price * $details->quantity @endphp
                  @endforeach
                <div class="cartmini__total d-flex align-items-center justify-content-between">
                    <h5>Total</h5>
                    <span id="cartSumTotal">{{ '₦'.number_format($total) }}</span>
                </div>
                <div class="cartmini__bottom">
                    <a href="{{ route('cart.get') }}" class="s-btn w-100 mb-20">view cart</a>
                    <a href="{{ route('checkout') }}" class="s-btn s-btn-2 w-100">checkout</a>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
