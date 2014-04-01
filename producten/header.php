<?php
session_start();
require_once '../queries.php';
$return_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
?>

<html>
<head>
<meta charset="utf-8">

<title>Home</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width">

<link rel="shortcut icon" href="../favicon.ico">

<link rel="stylesheet" href="../css/style.css">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../js/jquery-1.8.3.min.js"><\/script>')</script>
<script src="../js/html5.js"></script>
<script src="../js/main.js"></script>
<script src="../js/radio.js"></script>
<script src="../js/checkbox.js"></script>
<script src="../js/selectBox.js"></script>
<script src="../js/jquery.carouFredSel-6.2.0-packed.js"></script>
<script src="../js/jquery.touchSwipe.min.js"></script>
<script src="../js/jquery.jqzoom-core.js"></script>
<script src="../js/jquery.transit.js"></script>
<script src="../js/jquery.easing.1.2.js"></script>
<script src="../js/jquery.anythingslider.js"></script>
<script src="../js/jquery.anythingslider.fx.js"></script>
</head>
<body>
<div id="top">
<div class="container_12">
<div class="grid_9">
<nav>
<a class="menu-open" href="#">Menu</a>
<ul>
<li class="current"><a href="../index.php">Home</a></li>
<li><a href="../shopping_cart.php">Shopping cart (<?php echo countCart(); ?>)</a></li>
<li><a href="../login.php">Log In</a></li>
<li><a href="../signup.php">Sign Up</a></li>
</ul>
</nav>
</div><!-- .grid_9 -->
</div>
</div><!-- #top -->

<header id="branding">
<div class="container_12">
<div class="grid_3">
<hgroup>
<h1 id="site_logo"><a href="../index.php" title=""><img src="../img/gamezlogo.png" alt="GAMEZ"></a></h1>
<h2 id="site_description">FOR THE BEST GAMEZ</h2>
</hgroup>
</div><!-- .grid_3 -->

<div class="grid_9">
<div class="top_header">
<div class="welcome">
<?php
                            if(isset($_SESSION['username']))
                            {
                                echo 'Welcome ' . $_SESSION['username'];
                            }
                            else
                            {
                                echo 'Welcome visitor you can <a href="../login.php">login</a> or <a href="../signup.php">create an account</a>.';
                            }
                        ?>
</div><!-- .welcome -->
<ul id="cart_nav">
<li>
<a class="cart_li" href="../shopping_cart.php">
<div class="cart_ico"></div>
<span>€<?php echo getSessionTotal(); ?></span>
</a>
<ul class="cart_cont">

<?php
                                if(isset($_SESSION['products']) && $_SESSION['products'] != "")
                                {
                                    ?>
<li class="no_border recently">Recently added item(s)</li>
<?php
                                    foreach($_SESSION['products'] as $product)
                                    {
                                        ?>
<li>
<a href="../product_page.php?productid=<?php echo $product['id'] ?>" class="prev_cart"><div class="cart_vert"><img src=<?php echo "../" . $product['image'] ?> alt="Product 1" title=""></div></a>
<div class="cont_cart">
<h4><?php echo $product['name'] ?></h4>
<div class="price"><?php echo $product['qty'] ?> x <span><?php echo $product['price'] ?></span></div>
</div>
<a title="close" class="close" href="../cart_update.php?removep=<?php echo $product["id"] . '&return_url=' . $return_url ?>"></a>
<div class="clear"></div>
</li>
<?php
                                    }
                                }
                                else
                                {
                                    ?>
<li class="no_border recently">Your shopping cart is empty</li>
<br>
<br>
<?php
                                }
                                ?>


<li class="no_border">
<a href="../shopping_cart.php" class="view_cart">View shopping cart</a>
<a href="../checkout.php" class="checkout">Procced to Checkout</a>
</li>
</ul>
</li>
</ul><!-- .cart_nav -->

<form class="search" action="../search.php">
<input type="submit" class="search_button" value=""></a>
<input type="text" name="search" class="search_form" value="" placeholder="Search entire store here...">
</form><!-- .search -->
</div><!-- .top_header -->
</div><!-- .grid_9 -->
<div class="grid_9 primary-box">
<nav class="primary">
<div class="bg-menu-select"></div>
<a class="menu-select" href="#">Catalog</a>
<div id = "navbar">
<?php
                    display_children(0,1);
                    ?>
</div>
</nav><!-- .primary -->
</div><!-- .grid_9 -->
<p>
                <div class="breadcrumbs">
            <script>
                var path = "";
                var href = document.location.href;
                var s = href.split("/");
                for (var i=2;i<(s.length-1);i++) {
                path+="<A HREF=\""+href.substring(0,href.indexOf("/"+s[i])+s[i].length+1)+"/\">"+s[i]+"</A> <span></span> ";
                }
                i=s.length-1;
                path+="<span class=\"current\" \">"+s[i]+"</span>";
                var url =  "" + path;
                document.writeln(url);
            </script>
                </div>

</p>
</div>
<div class="clear"></div>
</header>
<?php

function display_children($parent, $level, $bool = null) {

    $database = new Queries();
    $result = $database->getChildren($parent);
if($bool == null)
{
    echo "<ul class='parents'>";
}
else
{
    echo "<ul class='sub'>";
}
 
foreach($result as $menuitem)
    {
        if($menuitem['Count'] > 0)
         {
         echo "<li class='parent'><a href='../" . $menuitem['link'] . ".php'>" . $menuitem['label'] . "</a>";
         display_children($menuitem['id'], $level + 1, true);
         echo "</li>";
         }
         else if($menuitem['Count'] == 0) {
         echo "<li><a href='../" . $menuitem['link'] . ".php'>" . $menuitem['label'] . "</a></li>";
         } else;
    }
         echo "</ul>";
}


function getSessionTotal()
{
    $price = 0;
    if(isset($_SESSION['products'])) {
        foreach($_SESSION['products'] as $product)
        {

            $price = $price + ($product['qty'] * $product['price']);
        }
    }
    return $price;
}
function countCart()
{
     $count = 0;
    if(isset($_SESSION['products'])) {
        foreach($_SESSION['products'] as $product)
        {

            $count = $count+1;
        }
    }
    return $count;

}
?>