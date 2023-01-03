@extends('master_user')
@section('product')
        <!--  right side cart -->
        <div class="cart-bg-overlay"></div>
        <div class="right-card-cart">
            <!-- cart buton -->
            <a href="#" id="rightSideCart">
                <i class="fa-solid fa-bag-shopping"></i>
            </a>
            <!-- cart buton -->
    
            <!-- cart-list -->
            <div class="container-fuild d-flex">
                <div class="row">
                    <div class="col-4">
                        <div class="single-cart-item">
                            <a href="#" class="product-image">
                                <img src="img/product-img/product-1.jpg" class="cart-thumb" alt="">
                                <!-- Cart Item Desc -->
                                <div class="cart-item-desc">
                                    <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                                    <span class="badge">Mango</span>
                                    <h6>Button Through Strap Mini Dress</h6>
                                    <p class="size">Size: S</p>
                                    <p class="color">Color: Red</p>
                                    <p class="price">$45.00</p>
                                </div>
                            </a>
                        </div>
                        <div class="single-cart-item">
                            <a href="#" class="product-image">
                                <img src="img/product-img/product-2.jpg" class="cart-thumb" alt="">
                                <!-- Cart Item Desc -->
                                <div class="cart-item-desc">
                                    <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                                    <span class="badge">Mango</span>
                                    <h6>Button Through Strap Mini Dress</h6>
                                    <p class="size">Size: S</p>
                                    <p class="color">Color: Red</p>
                                    <p class="price">$45.00</p>
                                </div>
                            </a>
                        </div>
                        <div class="single-cart-item">
                            <a href="#" class="product-image">
                                <img src="img/product-img/product-3.jpg" class="cart-thumb" alt="">
                                <!-- Cart Item Desc -->
                                <div class="cart-item-desc">
                                    <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                                    <span class="badge">Mango</span>
                                    <h6>Button Through Strap Mini Dress</h6>
                                    <p class="size">Size: S</p>
                                    <p class="color">Color: Red</p>
                                    <p class="price">$45.00</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- end cart-list -->
    
                    <!-- cart-summary -->
                    <div class="col-8">
                        <div class="cart-amount-summary">
                            <h2>Summary</h2>
                            <ul class="summary-table">
                                <li class="d-flex justify-content-between">
                                    <span>subtotal:</span>
                                    <span>$274.00</span>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <span>delivery:</span>
                                    <span>Free</span>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <span>discount:</span>
                                    <span>-15%</span>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <span>total:</span> <span>$232.00</span>
                                </li>
                            </ul>
                            <div class="checkout-btn mt-100">
                                <a href="checkout.html" class="btn check-btn">check out</a>
                            </div>
                        </div>
                    </div>
                    <!--    end cart-summfary -->
                </div>
            </div>
        </div>
        <!-- right Side Cart end   -->
    
        <!-- product details -->
        <div class="product_details">
            <div class="container-fuild">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="single_product_thumb">
                            <div class="product_thumbnail_slides owl-carousel">
                                <div class="item">
                                    <img class="bg-img" src="{{ url('assets-user') }}/img/product-img/product-big-1.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="bg-img" src="{{ url('assets-user') }}/img/product-img/product-big-2.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="bg-img" src="{{ url('assets-user') }}/img/product-img/product-big-3.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single_product_desc">
                            <span>mango</span>
                            <a href="cart.html">
                                <h2>One Shoulder Glitter Midi Dress</h2>
                            </a>
                            <p class="product-price"><span class="old-price">$65.00</span> $49.00</p>
                            <p class="product-desc">Mauris viverra cursus ante laoreet eleifend. Donec vel fringilla ante.
                                Aenean
                                finibus velit id urna vehicula, nec maximus est sollicitudin.</p>
    
                            <!-- Form -->
                            <form class="cart-form" method="post">
                                <!-- Select Box -->
                                <div class="select-box padding-40">
                                    <select name="select" id="productSize">
                                        <option value="1">Size: XL</option>
                                        <option value="2">Size: X</option>
                                        <option value="3">Size: M</option>
                                        <option value="4">Size: S</option>
                                    </select>
                                    <select name="select" id="productColor">
                                        <option value="value">Color: Black</option>
                                        <option value="value">Color: White</option>
                                        <option value="value">Color: Red</option>
                                        <option value="value">Color: Purple</option>
                                    </select>
                                </div>
                                <!-- Cart & Favourite Box -->
                                <div class="cart-fav-box d-flex align-items-center">
                                    <!-- Cart -->
                                    <button type="submit" class="btn essence-btn check-btn">Add to
                                        cart</button>
                                    <!-- Favourite -->
                                    <div class="product-favourite">
                                        <a href="#" class="favme fa fa-heart"></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- product details ênd -->    
        <script src="{{ url('assets-user') }}/js/cart.js"></script>
    <script src="{{ url('assets-user') }}/OwlCarousel/dist/jquery-3.6.2.min.js"></script>
    <script src="{{ url('assets-user') }}/OwlCarousel/dist/owl.carousel.min.js"></script>
    <script>
        $('.product_thumbnail_slides').owlCarousel({
            items: 1,
            margin: 0,
            loop: true,
            nav: true,
            navText: [`<i class="fa-solid fa-arrow-left item-left"></i>`, `<i class="fa-solid fa-arrow-right item-right"></i>`],
            dots: false,
            autoplay: true,
            autoplayTimeout: 5000,
            smartSpeed: 1000
        });
    </script>
@endsection