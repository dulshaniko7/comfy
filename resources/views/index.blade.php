<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <link
        rel="stylesheet"
        href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
        crossorigin="anonymous"
    />

    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <!-- Styles -->
    <title>Comfy House</title>
</head>
<body>
<!-- Navbar -->

    <nav class="navbar">
        <div class="navbar-center">
        <span class="nav-icon">
          <i class="fas fa-bars"></i>
        </span>
            <img src="{{ asset('images/logo.svg')}}" alt="store logo" />
            <div class="cart-btn">
          <span class="nav-icon">
            <i class="fas fa-cart-plus"></i>
          </span>
                <div class="cart-items">0</div>
            </div>
        </div>
    </nav>
<!--end navbar -->
<!-- hero  -->
<header class="hero">
    <div class="banner">
        <h1 class="banner-title">furniture collection</h1>
        <button class="banner-btn">shop now</button>
    </div>
</header>
<!-- end of hero  -->

<button id="getProduct">get products</button>


<!-- products -->
<section class="products">
    <div class="section-title">
        <h2>our products</h2>
    </div>
    <div class="products-center">
        <!-- single product -->
        <article class="product">
            <div class="img-container">
                <img
                    src="./images/product-1.jpeg"
                    alt="product"
                    class="product-img"
                />
                <button class="bag-btn" data-id="1">
                    <i class="fas fa-shopping-cart"></i>
                    add to bag
                </button>
            </div>
            <h3>queen bed</h3>
            <h4>$16</h4>
        </article>
        <!--end of single product -->
        <!-- single product -->
        <article class="product">
            <div class="img-container">
                <img
                    src="./images/product-2.jpeg"
                    alt="product"
                    class="product-img"
                />
                <button class="bag-btn" data-id="1">
                    <i class="fas fa-shopping-cart"></i>
                    add to bag
                </button>
            </div>
            <h3>queen bed</h3>
            <h4>$16</h4>
        </article>
        <!--end of single product -->
        <!-- single product -->
        <article class="product">
            <div class="img-container">
                <img
                    src="./images/product-3.jpeg"
                    alt="product"
                    class="product-img"
                />
                <button class="bag-btn" data-id="1">
                    <i class="fas fa-shopping-cart"></i>
                    add to bag
                </button>
            </div>
            <h3>queen bed</h3>
            <h4>$16</h4>
        </article>
        <!--end of single product -->
        <!--end of single product -->
        <!-- single product -->
        <article class="product">
            <div class="img-container">
                <img
                    src="./images/product-4.jpeg"
                    alt="product"
                    class="product-img"
                />
                <button class="bag-btn" data-id="1">
                    <i class="fas fa-shopping-cart"></i>
                    add to bag
                </button>
            </div>
            <h3>queen bed</h3>
            <h4>$16</h4>
        </article>
        <!--end of single product -->
        <!--end of single product -->
        <!-- single product -->
        <article class="product">
            <div class="img-container">
                <img
                    src="./images/product-5.jpeg"
                    alt="product"
                    class="product-img"
                />
                <button class="bag-btn" data-id="1">
                    <i class="fas fa-shopping-cart"></i>
                    add to bag
                </button>
            </div>
            <h3>queen bed</h3>
            <h4>$16</h4>
        </article>
        <!--end of single product -->
        <!--end of single product -->
        <!-- single product -->
        <article class="product">
            <div class="img-container">
                <img
                    src="./images/product-6.jpeg"
                    alt="product"
                    class="product-img"
                />
                <button class="bag-btn" data-id="1">
                    <i class="fas fa-shopping-cart"></i>
                    add to bag
                </button>
            </div>
            <h3>queen bed</h3>
            <h4>$16</h4>
        </article>
        <!--end of single product -->
        <!--end of single product -->
        <!-- single product -->
        <article class="product">
            <div class="img-container">
                <img
                    src="./images/product-7.jpeg"
                    alt="product"
                    class="product-img"
                />
                <button class="bag-btn" data-id="1">
                    <i class="fas fa-shopping-cart"></i>
                    add to bag
                </button>
            </div>
            <h3>queen bed</h3>
            <h4>$16</h4>
        </article>
        <!--end of single product -->
        <!--end of single product -->
        <!-- single product -->
        <article class="product">
            <div class="img-container">
                <img
                    src="./images/product-8.jpeg"
                    alt="product"
                    class="product-img"
                />
                <button class="bag-btn" data-id="1">
                    <i class="fas fa-shopping-cart"></i>
                    add to bag
                </button>
            </div>
            <h3>queen bed</h3>
            <h4>$16</h4>
        </article>
        <!--end of single product -->
        <!-- cart -->
        <div class="cart-overlay">
            <div class="cart">
        <span class="close-cart">
          <i class="fas fa-window-close"></i>
        </span>
                <h2>your cart</h2>
                <div class="cart-content">
                    <!-- cart item  -->
                    <div class="cart-item">
                        <img src="../images/product-1.jpeg" alt="product" />
                        <div>
                            <h4>queen bed</h4>
                            <h5>$9.00</h5>
                            <span class="remove-item">remove</span>
                        </div>
                        <div>
                            <i class="fas fa-chevron-up"></i>
                            <p class="item-amount">1</p>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>

                    <!-- end of cart item  -->
                </div>
                <div class="cart-footer">
                    <h3>your total : $ <span class="cart-total">0</span></h3>
                    <button class="clear-cart banner-btn">clear cart</button>
                </div>
            </div>
        </div>
        <!-- end of cart -->
    </div>
</section>
<!--end of products -->





<script src="{{ asset('js/app.js')}}"></script>
<script src="{{ asset('js/john.js')}}"></script>


</body>


</html>

