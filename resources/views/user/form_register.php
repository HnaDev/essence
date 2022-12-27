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
    <section class="vh-100 bg-image" style="background-color: #eee;">
        <div class="mask d-flex align-items-center h-100">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">Create an account</h2>

                                <form>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example1cg">Your Name</label>
                                        <input type="text" id="form3Example1cg" class="form-control form-control-lg" />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example3cg">Your Email</label>
                                        <input type="email" id="form3Example3cg" class="form-control form-control-lg" />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example4cg">Password</label>
                                        <input type="password" id="form3Example4cg"
                                            class="form-control form-control-lg" />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                                        <input type="password" id="form3Example4cdg"
                                            class="form-control form-control-lg" />
                                    </div>


                                    <div class="d-flex flex-column justify-content-center">
                                        <button type="button"
                                            class="btn btn-success btn-block btn-lg gradient-custom-2 text-body">Register
                                        </button>
                                    </div>

                                    <p class="text-center text-muted mt-5 mb-0">Have already an account?
                                        <a href="./formlogin.html" class="fw-bold text-body"><u>Login here</u></a>
                                    </p>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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