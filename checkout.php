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
									    <p>Total products : <?= getTotalItems() ?></p>
									    <p>Total price : € <?= getSessionTotal() ?></p>
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