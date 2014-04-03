<?php
include 'header.php';
include 'product.class.php';
$product_class = new products();
$product_xbox = $product_class->getCategoryGamesLimit("xbox");
$product_playstation = $product_class->getCategoryGamesLimit("playstation");
$product_computer = $product_class->getCategoryGamesLimit("computer");
$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
?>

    <div id="slider_body">
        <ul id="slider">
            <li>
                <div class="slid_content">
                </div><!-- .slid_content -->
                <img src="img/content/gslid-1.png" alt="Slid 1" title="">
            </li>

            <li>
                <div class="slid_content">
                 
                </div><!-- .slid_content -->
                <img src="img/content/gslid-2.png" alt="Slid 2" title="">
            </li>

            <li>
                <div class="slid_content">  
                </div><!-- .slid_content -->
                <img src="img/content/gslid-3.png" alt="Slid 3" title="">
            </li>
        </ul>
    </div><!-- #slider_body -->

    <section id="main" class="home">
        <div class="container_12">
            <div id="content">
                <div class="grid_12">
                    <h2 class="product-title">PC</h2>
                </div><!-- .grid_12 -->

                <div class="clear"></div>

                <div class="products featured-products">

                    <?php
                    if($product_computer != false)
                    {
                        foreach ($product_computer as $product) {
                            
                        
                        ?>
                        <article class="grid_3 article">
                            <form action="cart_update.php" method="POST">
                            <img class="sale" src="img/top.png" alt="Sale">
                            <div class="prev">
                                <a href="product_page.php?productid=<?php echo $product['id'] ?>"><img src=<?php echo $product['prImage'] ?> alt="Product 1" title=""></a>
                            </div><!-- .prev -->

                            <h3 class="title"><?php echo $product['prNaam'] ?></h3>
                            <div class="cart">
                                <div class="price">
                                    <div class="vert">
                                        €<?php echo $product['prPrijs'] ?>
                                  </div>
                                </div>
                                <span>Quantity</span> <input type="text" value=1 name="product_qty" style="width: 40px">

                                 <input type="image" class="bay" src= "img/bg_cart.png" style="width:30px; height:30px;"/>
                                
                            </div><!-- .cart -->
                                <input type="hidden" name="product_id" value=<?php echo $product['id'] ?> />
                                <input type="hidden" name="type" value="add" />
                                <input type="hidden" name="return_url" value=<?php echo $current_url ?> />
                             </form>
                        </article><!-- .grid_3.article -->
                        <?php
                        }
                    }
                    ?>
						</div><!-- .products featured-products -->
                <div class="products featured-products">
             
                    <h2 class="product-title">XBOX</h2>

                    <?php
                    if($product_computer != false)
                    {
                        foreach ($product_xbox as $product) {
                            
                        
                        ?>
                    <article class="grid_3 article">
                            <form action="cart_update.php" method="POST">
                            <img class="sale" src="img/sale.png" alt="Sale">
                            <div class="prev">
                                <a href="product_page.php?productid=<?php echo $product['id'] ?>"><img src=<?php echo $product['prImage'] ?> alt="Product 1" title=""></a>
                            </div><!-- .prev -->

                            <h3 class="title"><?php echo $product['prNaam'] ?></h3>
                            <div class="cart">
                                <div class="price">
                                    <div class="vert">
                                        €<?php echo $product['prPrijs'] ?>
                                  </div>
                                </div>
                                Quantity <input type="text"  value=1 name="product_qty" style="width: 40px">

                                 <input type="image" class="bay" src= "img/bg_cart.png" style="width:30px; height:30px;"/>
                                
                            </div><!-- .cart -->
                                <input type="hidden" name="product_id" value=<?php echo $product['id'] ?> />
                                <input type="hidden" name="type" value="add" />
                                <input type="hidden" name="return_url" value=<?php echo $current_url ?> />
                             </form>
                        </article><!-- .grid_3.article -->

                        <?php
                        }
                    }
                    ?>

                    <div class="clear"></div>
                </div><!-- .products -->



                 <div class="products featured-products">
             

                    <h2 class="product-title">PLAYSTATION</h2>

                    <?php
                    if($product_computer != false)
                    {
                        foreach ($product_playstation as $product) {
                            
                        
                        ?>
                        <article class="grid_3 article">
                            <form action="cart_update.php" method="POST">
                            <img class="sale" src="img/new.png" alt="Sale">
                            <div class="prev">
                                <a href="product_page.php?productid=<?php echo $product['id'] ?>"><img src=<?php echo $product['prImage'] ?> alt="Product 1" title=""></a>
                            </div><!-- .prev -->

                            <h3 class="title"><?php echo $product['prNaam'] ?></h3>
                            <div class="cart">
                                <div class="price">
                                    <div class="vert">
                                        €<?php echo $product['prPrijs'] ?>
                                  </div>
                                </div>
                                Quantity <input type="text"  value=1 name="product_qty" style="width: 40px">

                                 <input type="image" class="bay" src= "img/bg_cart.png" style="width:30px; height:30px;"/>
                                
                            </div><!-- .cart -->
                                <input type="hidden" name="product_id" value=<?php echo $product['id'] ?> />
                                <input type="hidden" name="type" value="add" />
                                <input type="hidden" name="return_url" value=<?php echo $current_url ?> />
                             </form>
                        </article><!-- .grid_3.article -->
                        <?php
                        }
                    }
                    ?>

                    <div class="clear"></div>
                </div><!-- .products -->
                <div class="clear"></div>
            </div><!-- #content -->

            <div class="clear"></div>
            
          <div class="clear"></div>

            <div id="content_bottom">
                <div class="grid_6">
                    <div class="bottom_block about_as">
                        <h3>About Us</h3>
                        <div class="about_as_content">
                            <p>Deze webshop is gebouwd door Louis Hol en Rick de Jong, dit in opdracht van Avans hogeschool</p>
                        </div>
                    </div><!-- .about_as -->
                </div><!-- .grid_6 -->

                <div class="grid_6">
                    <div class="bottom_block news">
                        <h3>News</h3>
                        <ul>
                            <li>
                                <time datetime="2012-03-03">19 Maart 2014</time>
                                <p>GTA VI vanaf volgende week expliciet verkrijgbaar, alleen bij onze webshop!</p>
                            </li>

                            <li>
                                <time datetime="2012-02-03">15 Maart 2014</time>
                                <p>Vanaf morgen 90% korting op alle xBox spellen</p>
                            </li>

                            <li>
                                <time datetime="2012-01-03">1 Maart 2014</time>
                                <p>2 halen 3 betalen vanaf morgen!</p>
                            </li>
                        </ul>
                    </div><!-- .news -->
                </div><!-- .grid_6 -->
                <div class="clear"></div>
            </div><!-- #content_bottom -->
        </div><!-- .container_12 -->
    </section><!-- #main.home -->

<?php
include 'footer.php'
?>
