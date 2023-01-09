@extends('master_user')
@section('container')
    <!-- banner category -->
    <section class="welcome_category">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12">
                    <div class="hero-content">
                        <h6>asoss</h6>
                        <h2>New Collection</h2>
                        <a href="#" class="btn view_collection">view collection</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end banner category -->

    <!-- category male and female -->
    <div class="category_end_male_female padding-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card category_female">
                        <a href="#">
                            <img class="card-img-top" src="{{ url('assets-user') }}/img/banner/Card_1_DT.jpg"
                                alt="">
                            <div class="category_title flex_between">
                                <h3><a href="#">
                                        <span>Women</span>
                                    </a>
                                </h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card category_male">
                        <a href="#">
                            <img class="card-img-top" src="{{ url('assets-user') }}/img/banner/Card_2_DT.jpg"
                                alt="">
                            <div class="category_title flex_between">
                                <h3>
                                    <a href="#">
                                        <span>Men</span>
                                    </a>
                                </h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- category male and female end -->

    <!--  top catagory  -->
    <div class="top_catagory_area">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Single Catagory -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area flex_center bg-img"
                        style="background-image: url({{ url('assets-user') }}/img/bg-img/bg-2.jpg)">
                        <div class="catagory-content">
                            <a href="#">Clothing</a>
                        </div>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area flex_center bg-img"
                        style="background-image: url({{ url('assets-user') }}/img/bg-img/bg-3.jpg);">
                        <div class="catagory-content">
                            <a href="#">Shoes</a>
                        </div>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area flex_center bg-img"
                        style="background-image: url({{ url('assets-user') }}/img/bg-img/bg-4.jpg);">
                        <div class="catagory-content">
                            <a href="#">Accessories</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  top catagory end  -->

    <!-- global sale -->
    <div class="global_sale padding-40">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sale-content bg-img background-overlay"
                        style="background-image: url({{ url('assets-user') }}/img/bg-img/bg-5.jpg);">
                        <div class="h-100 d-flex align-items-center justify-content-end">
                            <div class="sale_text">
                                <h6>-60%</h6>
                                <h2>Global Sale</h2>
                                <a href="#" class="btn check-btn">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- global sale end -->

    <!-- new product -->
    <section class="new_arrivals_area padding-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product-heading text-center">
                        <h2>Popular Products</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-6">
                    <!-- Single Product -->
                    <div class="single-product-wrapper">
                        <!-- Product Image -->
                        <div class="product-img">
                            <img src="{{ url('assets-user') }}/img/product-img/product-1.jpg" alt="">
                            <!-- Hover Thumb -->
                            <img class="hover-img" src="{{ url('assets-user') }}/img/product-img/product-2.jpg"
                                alt="">
                            <!-- Favourite -->
                            <div class="product-favourite">
                                <a href="{{ url('assets-user') }}//product-details.html" class="favme fa fa-heart"></a>
                            </div>
                        </div>
                        <!-- Product Description -->
                        <div class="product-description">
                            <span>topshop</span>
                            <a href="product-details.html">
                                <h6>Knot Front Mini Dress</h6>
                            </a>
                            <p class="product-price">$80.00</p>

                            <!-- Hover Content -->
                            <div class="hover-content">
                                <!-- Add to Cart -->
                                <div class="add-to-cart-btn">
                                    <a href="" class="btn essence-btn check-btn">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <!-- Single Product -->
                    <div class="single-product-wrapper">
                        <!-- Product Image -->
                        <div class="product-img">
                            <img src="{{ url('assets-user') }}/img/product-img/product-2.jpg" alt="">
                            <!-- Hover Thumb -->
                            <img class="hover-img" src="{{ url('assets-user') }}/img/product-img/product-3.jpg"
                                alt="">
                            <!-- Favourite -->
                            <div class="product-favourite">
                                <a href="#" class="favme fa fa-heart"></a>
                            </div>
                        </div>
                        <!-- Product Description -->
                        <div class="product-description">
                            <span>topshop</span>
                            <a href="product-details.html">
                                <h6>Poplin Displaced Wrap Dress</h6>
                            </a>
                            <p class="product-price">$80.00</p>

                            <!-- Hover Content -->
                            <div class="hover-content">
                                <!-- Add to Cart -->
                                <div class="add-to-cart-btn">
                                    <a href="" class="btn essence-btn check-btn">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <!-- Single Product -->
                    <div class="single-product-wrapper">
                        <!-- Product Image -->
                        <div class="product-img">
                            <img src="{{ url('assets-user') }}/img/product-img/product-3.jpg" alt="">
                            <!-- Hover Thumb -->
                            <img class="hover-img" src="{{ url('assets-user') }}/img/product-img/product-4.jpg"
                                alt="">

                            <!-- Product Badge -->
                            <div class="product-badge offer-badge">
                                <span>-30%</span>
                            </div>

                            <!-- Favourite -->
                            <div class="product-favourite">
                                <a href="#" class="favme fa fa-heart"></a>
                            </div>
                        </div>
                        <!-- Product Description -->
                        <div class="product-description">
                            <span>mango</span>
                            <a href="./product-details.html">
                                <h6>PETITE Crepe Wrap Mini Dress</h6>
                            </a>
                            <p class="product-price"><span class="old-price">$75.00</span> $55.00</p>

                            <!-- Hover Content -->
                            <div class="hover-content">
                                <!-- Add to Cart -->
                                <div class="add-to-cart-btn">
                                    <a href="" class="btn essence-btn check-btn">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <!-- Single Product -->
                    <div class="single-product-wrapper">
                        <!-- Product Image -->
                        <div class="product-img">
                            <img src="{{ url('assets-user') }}/img/product-img/product-4.jpg" alt="">
                            <!-- Hover Thumb -->
                            <img class="hover-img" src="{{ url('assets-user') }}/img/product-img/product-5.jpg"
                                alt="">

                            <!-- Product Badge -->
                            <div class="product-badge new-badge">
                                <span>New</span>
                            </div>

                            <!-- Favourite -->
                            <div class="product-favourite">
                                <a href="#" class="favme fa fa-heart"></a>
                            </div>
                        </div>
                        <!-- Product Description -->
                        <div class="product-description">
                            <span>mango</span>
                            <a href="product-details.html">
                                <h6>PETITE Belted Jumper Dress</h6>
                            </a>
                            <p class="product-price">$80.00</p>

                            <!-- Hover Content -->
                            <div class="hover-content">
                                <!-- Add to Cart -->
                                <div class="add-to-cart-btn">
                                    <a href="#" class="btn essence-btn  check-btn">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- new product end  -->

    <!-- banner info  -->
    <div class="banner-info">
        <div class="container-fuild">
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner-img bg-img">
                        <img src="{{ url('assets-user') }}/img/core-img/sp1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-title">
                        <h2>Essence</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus inventore a ipsam
                            doloremque aliquid impedit aperiam, accusantium consequatur numquam quasi fugit id. Eveniet
                            quos earum minima perferendis tempora perspiciatis vel!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner info end -->

    <!-- new product 2 -->
    <section class="new_arrivals_area padding-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product-heading text-center">
                        <h2>New Products</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-6">
                    <!-- Single Product -->
                    <div class="single-product-wrapper">
                        <!-- Product Image -->
                        <div class="product-img">
                            <img src="{{ url('assets-user') }}/img/product-img/product-1.jpg" alt="">
                            <!-- Hover Thumb -->
                            <img class="hover-img" src="{{ url('assets-user') }}/img/product-img/product-2.jpg"
                                alt="">
                            <!-- Favourite -->
                            <div class="product-favourite">
                                <a href="" class="favme fa fa-heart"></a>
                            </div>
                        </div>
                        <!-- Product Description -->
                        <div class="product-description">
                            <span>topshop</span>
                            <a href="single-product-details.html">
                                <h6>Knot Front Mini Dress</h6>
                            </a>
                            <p class="product-price">$80.00</p>

                            <!-- Hover Content -->
                            <div class="hover-content">
                                <!-- Add to Cart -->
                                <div class="add-to-cart-btn">
                                    <a href="#" class="btn essence-btn check-btn">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <!-- Single Product -->
                    <div class="single-product-wrapper">
                        <!-- Product Image -->
                        <div class="product-img">
                            <img src="{{ url('assets-user') }}/img/product-img/product-2.jpg" alt="">
                            <!-- Hover Thumb -->
                            <img class="hover-img" src="{{ url('assets-user') }}/img/product-img/product-3.jpg"
                                alt="">
                            <!-- Favourite -->
                            <div class="product-favourite">
                                <a href="#" class="favme fa fa-heart"></a>
                            </div>
                        </div>
                        <!-- Product Description -->
                        <div class="product-description">
                            <span>topshop</span>
                            <a href="single-product-details.html">
                                <h6>Poplin Displaced Wrap Dress</h6>
                            </a>
                            <p class="product-price">$80.00</p>

                            <!-- Hover Content -->
                            <div class="hover-content">
                                <!-- Add to Cart -->
                                <div class="add-to-cart-btn">
                                    <a href="#" class="btn essence-btn check-btn">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <!-- Single Product -->
                    <div class="single-product-wrapper">
                        <!-- Product Image -->
                        <div class="product-img">
                            <img src="{{ url('assets-user') }}/img/product-img/product-3.jpg" alt="">
                            <!-- Hover Thumb -->
                            <img class="hover-img" src="{{ url('assets-user') }}/img/product-img/product-4.jpg"
                                alt="">

                            <!-- Product Badge -->
                            <div class="product-badge offer-badge">
                                <span>-30%</span>
                            </div>

                            <!-- Favourite -->
                            <div class="product-favourite">
                                <a href="#" class="favme fa fa-heart"></a>
                            </div>
                        </div>
                        <!-- Product Description -->
                        <div class="product-description">
                            <span>mango</span>
                            <a href="single-product-details.html">
                                <h6>PETITE Crepe Wrap Mini Dress</h6>
                            </a>
                            <p class="product-price"><span class="old-price">$75.00</span> $55.00</p>

                            <!-- Hover Content -->
                            <div class="hover-content">
                                <!-- Add to Cart -->
                                <div class="add-to-cart-btn">
                                    <a href="#" class="btn essence-btn check-btn">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <!-- Single Product -->
                    <div class="single-product-wrapper">
                        <!-- Product Image -->
                        <div class="product-img">
                            <img src="{{ url('assets-user') }}/img/product-img/product-4.jpg" alt="">
                            <!-- Hover Thumb -->
                            <img class="hover-img" src="{{ url('assets-user') }}/img/product-img/product-5.jpg"
                                alt="">

                            <!-- Product Badge -->
                            <div class="product-badge new-badge">
                                <span>New</span>
                            </div>

                            <!-- Favourite -->
                            <div class="product-favourite">
                                <a href="#" class="favme fa fa-heart"></a>
                            </div>
                        </div>
                        <!-- Product Description -->
                        <div class="product-description">
                            <span>mango</span>
                            <a href="single-product-details.html">
                                <h6>PETITE Belted Jumper Dress</h6>
                            </a>
                            <p class="product-price">$80.00</p>

                            <!-- Hover Content -->
                            <div class="hover-content">
                                <!-- Add to Cart -->
                                <div class="add-to-cart-btn">
                                    <a href="#" class="btn essence-btn  check-btn">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- new product 2 end  -->

    <!-- .discount -->
    <div class="discount padding-40">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>Get <span>20% Off</span> Your Next Order</h2>
                    </div>
                    <div class="discount_container">
                        <div class="subscribe_form">
                            <form id="mc-form" class="mc-form footer-discount" novalidate="true">
                                <input id="mc-email" type="email" autocomplete="off" placeholder="Enter you email"
                                    name="EMAIL">
                                <button id="mc-submit">Subscribe</button>
                                <div class="email_icon">
                                    <i class="fa-regular fa-envelope"></i>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .discount end -->
@endsection
