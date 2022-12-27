<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./OwlCarousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="./OwlCarousel/dist/assets/owl.theme.default.min.css">
</head>

<body>
    <!-- header -->
    <header class="header-area sticky">
        <div class="container-fuild">
            <div class="row">
                <div class="col-lg-6 nav-left">
                    <nav class="nav-mie d-flex">
                        <!-- logo -->
                        <a href="./index.html" class="logo-header">
                            <img src="img/core-img/logo.png" alt="">
                        </a>
                        <!-- end logo -->
                        <div class="nav-menu">
                            <ul class="d-flex">
                                <li class="menu-item_shop">
                                    <a href="#" class="icon_shop">Shop<i class="fa-solid fa-check"></i></a>
                                    <div class="megamenu">
                                        <ul class="single-mega">
                                            <li class="title">Women's Collection</li>
                                            <li><a href="shop.html">Dresses</a></li>
                                            <li><a href="shop.html">Blouses &amp; Shirts</a></li>
                                            <li><a href="shop.html">T-shirts</a></li>
                                            <li><a href="shop.html">Rompers</a></li>
                                            <li><a href="shop.html">Bras &amp; Panties</a></li>
                                        </ul>
                                        <ul class="single-mega">
                                            <li class="title">Men's Collection</li>
                                            <li><a href="#">T-Shirts</a></li>
                                            <li><a href="#">Polo</a></li>
                                            <li><a href="#">Shirts</a></li>
                                            <li><a href="#">Jackets</a></li>
                                            <li><a href="#">Trench</a></li>
                                        </ul>
                                        <ul class="single-mega">
                                            <li class="title">Kid's Collection</li>
                                            <li><a href="#">Dresses</a></li>
                                            <li><a href="#">Shirts</a></li>
                                            <li><a href="#">T-shirts</a></li>
                                            <li><a href="#">Jackets</a></li>
                                            <li><a href="#">Trench</a></li>
                                        </ul>
                                        <div class="single-mega">
                                            <img src="img/bg-img/bg-6.jpg" alt="">
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-item_pages">
                                    <a href="#">Pages<i class="fa-solid fa-check"></i></a>
                                    <ul class="dropdown">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="shop.html">Shop</a></li>
                                        <li><a href="#">Product Details</a></li>
                                        <li><a href="#">Checkout</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Single Blog</a></li>
                                        <li><a href="#">Regular Page</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="">Blog</a>
                                </li>
                                <li class="contact">
                                    <a href="">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-lg-6 nav-right">
                    <div class="nav-meta d-flex">
                        <div class="search-area">
                            <form action="#" method="post">
                                <input type="search" name="search" id="headerSearch" placeholder="Type for search">
                                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>
                        <div class="favourite-area">
                            <a href="#">
                                <i class="fa-regular fa-heart"></i>
                            </a>
                        </div>
                        <div class="user-login-info">
                            <a href="./formlogin.html">
                                <i class="fa-regular fa-user"></i>
                            </a>
                        </div>
                        <div class="cart-area">
                            <a href="#" >
                                <i class="fa-solid fa-bag-shopping" id="essenceCartBtn"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->

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
                                <img class="bg-img" src="img/product-img/product-big-1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="bg-img" src="img/product-img/product-big-2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="bg-img" src="img/product-img/product-big-3.jpg" alt="">
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

    <!-- footer -->
    <footer class="footer_area">
        <div class="container">
            <div class="row">
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area d-flex mb-30">
                        <!-- Logo -->
                        <div class="footer-logo mr-50">
                            <a href="#"><img src="img/core-img/logo2.png" alt=""></a>
                        </div>
                        <!-- Footer Menu -->
                        <div class="footer_menu">
                            <ul>
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area mb-30">
                        <ul class="footer_widget_menu">
                            <li><a href="#">Order Status</a></li>
                            <li><a href="#">Payment Options</a></li>
                            <li><a href="#">Shipping and Delivery</a></li>
                            <li><a href="#">Guides</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms of Use</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row align-items-end">
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area">
                        <div class="footer_heading mb-30">
                            <h6>Subscribe</h6>
                        </div>
                        <div class="subscribtion_form">
                            <form action="#" method="post">
                                <input type="email" name="mail" class="mail" placeholder="Your email here">
                                <button type="submit" class="submit"><i class="fa fa-long-arrow-right"
                                        aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area">
                        <div class="footer_social_area">
                            <a href="#"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-pinterest"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-12 text-center">
                    <p>
                        Copyright ©
                        2022 All rights reserved | Made with #
                    </p>
                </div>
            </div>

        </div>
    </footer>
    <!-- footer end -->

    <script src="./js/cart.js"></script>
    <script src="./OwlCarousel/dist/jquery-3.6.2.min.js"></script>
    <script src="./OwlCarousel/dist/owl.carousel.min.js"></script>
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
</body>

</html>