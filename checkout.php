<?php
include 'header.php';
$database = new Queries();
?>
    
    <section id="main">
        <div class="container_12">
            <div id="content" class="grid_12">
                <header>
                    <h1 class="page_title">Checkout</h1>
                </header>
                <?php
                if(!isset($_SESSION['username']))
                {
                	?>
                	<p>
                		Please <a href ="login.php">login</a>
                		first
                	<p>
                	<?php
                }
                else
                {
                	?>
					    <article id="checkout_info" class="grid_9">
							<ul class="checkout_list">
								<li class="active">
								    <div class="list_header"><div class="number"></div>Checkout</div>
								    <div class="list_body">
									<form class="checkout_or" method="post">
									    <h3>Checkout as a <?= $_SESSION['username'] ?></h3>
									    <p> products : <?= getTotalItems() ?></p>
                                        <p>Total price : € <?= getSessionTotal() ?></p>
						<ul id="cart_nav" class="clearleft">
                        <li class="clearleft">
                            <ul class="cart_cont clearleft">
                               

                                <?php
                                if(isset($_SESSION['products']) && $_SESSION['products'] != "") 
                                {
                                    ?>
                                    
                                    <?php
                                    foreach($_SESSION['products'] as $product)
                                    {
                                        ?>
                                        
                                        <li class="clearleft">
                                            <a href="product_page.php?productid=<?php echo $product['id'] ?>" class="prev_cart"><div class="cart_vert"><img src=<?php echo $product['image'] ?> alt="Product 1" title=""></div></a>
                                            <div class="cont_cart">
                                                <h4><?php echo $product['name'] ?></h4>
                                                <div class="price"><?php echo $product['qty'] ?> x <span><?php echo $product['price'] ?></span></div>
                                            </div>
                                            
                                            <div class="clear"></div>
                                        </li>
                                        <?php
                                    }
                                }
                                
                                ?>
                            </ul>
                        </li>
                    </ul><!-- .cart_nav -->
                                        
									    <input type="submit" id="checkout" name="checkout" value="checkout">
									</form>
									<div class="clear"></div>
								    </div>
								</li>
							</ul>
						</article>
                <?php
                }
                ?>
            	
        </div><!-- .container_12 -->
    </section><!-- #main -->
    <div class="clear"></div>
        
<?php
if(isset($_POST['checkout']))
{


	$database->addOrder($_SESSION['userid'], "Order voor " . $_SESSION['username'], date("Y-m-d H:i:s"));
	$order_id = $database->getOrderLatestID();
    $order_id = $order_id[0]['id'];


	foreach($_SESSION['products'] as $product)
	{
		$database->addOrderRegel($order_id, $product['id'], $product['qty']);
	}
	echo '<script language="javascript">';
	echo 'alert("Betaling is verwerkt")';
	echo '</script>';
	unset($_SESSION['products']);
	echo '<script language="javascript">';
	echo 'location.reload()';
	echo '</script>';
}


function getTotalItems()
{
	$count = 0;
	if(isset($_SESSION['products']))
	{
		foreach($_SESSION['products'] as $product)
		{
			$count++;
		}
	}
	return $count;
}
?>
<?php
include 'footer.php'
?>