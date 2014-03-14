<!DOCTYPE html>

<?php
include_once 'queries.php';
$query = new Queries();
$menu = $query->getMenuItems();
?>

<html>
<head>
    <meta charset="utf-8">

    <title>Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="css/style.css">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.8.3.min.js"><\/script>')</script>
    <script src="js/html5.js"></script>
    <script src="js/main.js"></script>
    <script src="js/radio.js"></script>
    <script src="js/checkbox.js"></script>
    <script src="js/selectBox.js"></script>
    <script src="js/jquery.carouFredSel-6.2.0-packed.js"></script>
    <script src="js/jquery.touchSwipe.min.js"></script>
    <script src="js/jquery.jqzoom-core.js"></script>
    <script src="js/jquery.transit.js"></script>
    <script src="js/jquery.easing.1.2.js"></script>
    <script src="js/jquery.anythingslider.js"></script>
    <script src="js/jquery.anythingslider.fx.js"></script>
</head>
<body>
    <div id="top">
        <div class="container_12">
            <div class="grid_9">
                <nav>
                    <a class="menu-open" href="#">Menu</a>
                    <ul>
                        <li class="current"><a href="#">My Account</a></li>
                        <li><a href="#">My Wishlist</a></li>
                        <li><a href="login.php">Log In</a></li>
                        <li><a href="login.php">Sign Up</a></li>
                    </ul>
                </nav>
            </div><!-- .grid_9 -->
        </div>
    </div><!-- #top -->

    <header id="branding">
        <div class="container_12">
            <div class="grid_3">
                <hgroup>
                    <h1 id="site_logo"><a href="index.php" title=""><img src="img/gamezlogo.png" alt="GAMEZ"></a></h1>
                    <h2 id="site_description">FOR THE BEST GAMEZ</h2>
                </hgroup>
            </div><!-- .grid_3 -->

            <div class="grid_9">
                <div class="top_header">
                    <div class="welcome">
                        Welcome visitor you can <a href="login.php">login</a> or <a href="login.php">create an account</a>.
                    </div><!-- .welcome -->

                    <ul id="cart_nav">
                        <li>
                            <a class="cart_li" href="#">
                                <div class="cart_ico"></div>
                                Cart
                                <span>$0.00</span>
                            </a>
                            <ul class="cart_cont">
                                <li class="no_border recently">Recently added item(s)</li>
                                <li>
                                    <a href="product_page.php" class="prev_cart"><div class="cart_vert"><img src="img/content/cart_img.png" alt="Product 1" title=""></div></a>
                                    <div class="cont_cart">
                                        <h4>Faddywax Fragrance Diffuser Set <br>Gardenia</h4>
                                        <div class="price">1 x <span>$399.00</span></div>
                                    </div>
                                    <a title="close" class="close" href="#"></a>
                                    <div class="clear"></div>
                                </li>

                                <li>
                                    <a href="product_page.php" class="prev_cart"><div class="cart_vert"><img src="img/content/cart_img2.png" alt="Product 2" title=""></div></a>
                                    <div class="cont_cart">
                                        <h4>Caldrea Linen and Room Spray</h4>
                                        <div class="price">1 x <span>$123.00</span></div>
                                    </div>
                                    <a title="close" class="close" href="#"></a>
                                    <div class="clear"></div>
                                </li>
                                <li class="no_border">
                                    <a href="shopping_cart.php" class="view_cart">View shopping cart</a>
                                    <a href="checkout.php" class="checkout">Procced to Checkout</a>
                                </li>
                            </ul>
                        </li>
                    </ul><!-- .cart_nav -->

                    <form class="search">
                        <input type="submit" class="search_button" value="">
                        <input type="text" name="search" class="search_form" value="" placeholder="Search entire store here...">
                    </form><!-- .search -->
                </div><!-- .top_header -->
            </div><!-- .grid_9 -->
            
            <div class="grid_9 primary-box">
                <nav class="primary">
                    <div class="bg-menu-select"></div>
                    <a class="menu-select" href="#">Catalog</a>
                    <ul>
                    <?php
                    foreach($menu as $item)
                    {
                        echo '<li><a href="' . $item['link'] .  '.php">' . $item['label'] . '</a</li>';
                    }
                    ?>
                    </ul>
                </nav><!-- .primary -->
            </div><!-- .grid_9 -->
        </div>
        <div class="clear"></div>
    </header>