<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <!-- header start -->
    <header class="header-area sticky">
        <div class="container-fuild">
            <div class="row">
                <div class="col-lg-6 nav-left">
                    <nav class="nav-mie d-flex">
                        <!-- logo -->
                        <a href="./index.html" class="logo-header">
                            <img src="img/core-img/logo.png" alt="">
                        </a>
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
                                        <li><a href="#">Shop</a></li>
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
                                <li>
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
                            <a href="#">
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
    <!--  Right Side Cart Area -->
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
    <!-- End Right Side Cart Area  -->
    <!-- Section: Design Block -->
    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="text-center">
                                        <h4 class="mt-1 mb-5 pb-1">We are The ESSENCE Team</h4>
                                    </div>

                                    <form>
                                        <p class="text-center">Please login to your account</p>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example11">Username</label>
                                            <input type="email" id="form2Example11" class="form-control"
                                                placeholder="Phone number or email address" />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example22">Password</label>
                                            <input type="password" id="form2Example22" class="form-control" />
                                        </div>

                                        <div class="d-flex flex-column text-center pt-1 mb-4 pb-1">
                                            <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"
                                                type="button">Log in</button>
                                            <a class="text-muted" href="#!">Forgot password?</a>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center pb-4">
                                            <p class="mb-0 me-2">Don't have an account?</p>
                                            <button type="button" class="btn btn-outline-danger">
                                                <a href="./form_register.html">Create new</a>
                                            </button>
                                        </div>

                                    </form>

                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">We are more than just a company</h4>
                                    <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                        do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section: Design Block -->

     <!-- remmove card -->
     <script src="./js/cart.js"></script>
     <!-- remmove card -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>

</html>