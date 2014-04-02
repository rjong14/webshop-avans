<?php
include 'header.php';
include 'product.class.php';
$product_class = new products();
$product_id = filter_var($_GET['productid'], FILTER_VALIDATE_INT);
$product = $product_class->getProductInfo($product_id);
$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

?>

    <section id="main">
        <div class="container_12">
            <div id="content" class="grid_12">
                <header>
                    <h1 class="page_title"> <?php echo  $product[0]['prNaam']  ?></h1>
                </header>
                    
                <article class="product_page negative-grid">
                    <div class="grid_5 img_slid" id="products">
			
			<div class="preview slides_container">
			    <div class="prev_bg">
				<?php 
					echo '<a href="' . $product[0]['prImage'] . '" class="jqzoom" rel="gal1" title="">';
				
				    echo '<img src="' . $product[0]['prImage'] . '" alt="Product 1" title="" style="width: 100%">';
				    ?>
				</a>
			    </div>
			</div><!-- .preview -->
                        
     		<br><br><br>
			
		    </div><!-- .grid_5 -->
                    
            <div class="grid_7">
			<div class="entry_content">
                             
			  
                <?php         
			    echo '<p>' . $product[0]['prBeschrijving'] . '</p>';
                 ?>
                 <div class="ava_price">
                    <div class="price">
                     <?php echo $product[0]['prPrijs']; ?>
					</div><!-- .price -->
                                
					<div class="availability_sku">
				    <div class="availability">
					Availability: <span>In stock</span>
				    </div>
				    
					</div><!-- .availability_sku -->
                                <div class="clear"></div>
			   		</div><!-- .ava_price -->
			   		<form action="cart_update.php" method="POST">
                    Quantity <input type="text" name="product_qty" style="width: 40px">
                    <?php
		              echo '<input type="hidden" name="product_id" value="'.$product[0]['id'].'" />
		            		<input type="hidden" name="type" value="add" />
							<input type="hidden" name="return_url" value="'.$current_url.'" />';
		            ?>
                    <br>
                    <br>

			    	<div class="cart">
			    	<button class="add_to_cart">Add To Cart</button>					
                 </div><!-- .cart -->
             </form>

			</div><!-- .entry_content -->
		    </div><!-- .grid_7 -->
		    <div class="clear"></div>
                    
                  
                    <div class="clear"></div>
		</article><!-- .product_page -->
                
                <div class="related negative-grid">
                <div class="clear"></div>
            </div><!-- #content -->

            <div class="clear"></div>
        </div><!-- .container_12 -->
    </section><!-- #main -->
    <div class="clear"></div>
        
<?php
include 'footer.php'
?>