<?php
include 'header.php';
$database = new Queries();
$product = $database->getProductInfo($_GET['productid']);
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
                    
                    <div class="grid_12" >
			<div id="wrapper_tab" class="tab1">
			    <a href="#" class="tab1 tab_link">Description</a>
			    <a href="#" class="tab2 tab_link">Reviews</a>
			    <a href="#" class="tab3 tab_link">Custom Tab</a>

			    <div class="clear"></div>

			    <div class="tab1 tab_body">
				<h4>About This Item</h4>
				<p>Suspendisse at placerat turpis. Duis luctus erat vel magna pharetra aliquet. Maecenas tincidunt feugiat ultricies. Phasellus et dui risus. Vestibulum adipiscing, eros quis lobortis dictum. Etiam mollis volutpat odio, id euismod justo gravida a. Aliquam erat volutpat. Phasellus faucibus venenatis lorem, vitae commodo elit pretium et. Duis rhoncus lobortis congue. Vestibulum et purus dui, vel porta lectus. Sed vulputate pulvinar adipiscing.</p>
                                <ul>
				    <li>She was walking to the mall.</li>
				    <li>Ted might eat the cake.</li>
				    <li>You must go right now.</li>
				    <li>Words were spoken.</li>
				    <li>The teacher is writing a report.</li>
				</ul>

				<p>Here are some verb phrase examples where the verb phrase is the predicate of a sentence. In this case, the verb phrase consists of the main verb plus any auxiliary, or helping, verbs. Nulla nec velit. Mauris pulvinar erat non massa. Suspendisse tortor turpis, porta nec, tempus vitae, iaculis semper, pede.</p>
				<ol>
				    <li>Shipping & Delivery.</li>
				    <li>Privacy & Security.</li>
				    <li>Returns & Replacements.</li>
				    <li>Payment, Pricing & Promotions.</li>
				    <li>Viewing Orders.</li>
				</ol>
                                <p>Next are some verb phrase examples of verb phrases where the phrase has a single function which means it can act like an adverb or an adjective. The phrase would include the verb and any modifiers, complements, or objects. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi luctus. Duis lobortis.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec posuere odio. Proin vel ultrices erat.</p>
                                <div class="clear"></div>
			    </div><!-- .tab1 .tab_body -->

			    <div class="tab2 tab_body">
				<h4>Customer reviews</h4>
                                
                                <ul class="comments">
				    <li>
					<div class="autor">Mike Example</div>, <time datetime="2012-11-03">03.11.2012</time>

					<div class="evaluation">
					    <div class="quality">
						<span>Quality</span>
						<a class="plus" href="#"></a>
						<a class="plus" href="#"></a>
						<a class="plus" href="#"></a>
						<a href="#"></a>
						<a href="#"></a>
					    </div>
					    <div class="price">
                                                <span>Price</span>
                                                <a class="plus" href="#"></a>
						<a class="plus" href="#"></a>
						<a class="plus" href="#"></a>
						<a class="plus_minus" href="#"></a>
						<a href="#"></a>
					    </div>
					    <div class="clear"></div>
					</div><!-- .evaluation -->

					<p>Suspendisse at placerat turpis. Duis luctus erat vel magna pharetra aliquet. Maecenas tincidunt feugiat ultricies. Phasellus et dui risus. Vestibulum adipiscing, eros quis lobortis dictum.  It enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </li>

				    <li>
					<div class="autor">Mike Example</div>, <time datetime="2012-11-03">01.11.2012</time>

					<div class="evaluation">
					    <div class="quality">
						<span>Quality</span>
						<a class="plus" href="#"></a>
						<a class="plus" href="#"></a>
						<a class="plus" href="#"></a>
						<a class="plus" href="#"></a>
						<a class="plus_minus" href="#"></a>
					    </div>
					    <div class="price">
						<span>Price</span>
						<a class="plus" href="#"></a>
						<a class="plus" href="#"></a>
						<a class="plus" href="#"></a>
						<a class="plus" href="#"></a>
						<a href="#"></a>
					    </div>
					    <div class="clear"></div>
					</div><!-- .evaluation -->

					<p>Etiam mollis volutpat odio, id euismod justo gravida a. Aliquam erat volutpat. Phasellus faucibus venenatis lorem, vitae commodo elit pretium et. Duis rhoncus lobortis congue. Vestibulum et purus dui, vel porta lectus. Sed vulputate pulvinar adipiscing. It enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </li>
				</ul><!-- .comments -->
                                
                                <form class="add_comments">
				    <h4>Write Your Own Review</h4>

                                        
                                        <div class="nickname">
					    <strong>Nickname</strong><sup>*</sup><br>
					    <input type="text" name="" class="" value="">
					</div><!-- .nickname -->

					<div class="your_review">
					    <strong>Summary of Your Review</strong><sup>*</sup><br>
					    <input type="text" name="" class="" value="">
					</div><!-- .your_review -->
                                        
                                        <div class="text_review">
					    <strong>Review</strong><sup>*</sup><br>
					    <textarea name="text"></textarea><br>
					    <i>Note: HTML is not translated!</i>
					</div><!-- .text_review -->

					<div class="clear"></div>

					

					<input type="submit" value="Submit Review">
				    </form><!-- .add_comments -->
                                <div class="clear"></div>
			    </div><!-- .tab2 .tab_body -->

			    <div class="tab3 tab_body">
				<h4>Custom Tab</h4>
				<div class="clear"></div>
			    </div><!-- .tab3 .tab_body -->
			    <div class="clear"></div>
			</div>​<!-- #wrapper_tab -->
			<div class="clear"></div>
		    </div><!-- .grid_12 -->
                    <div class="clear"></div>
		</article><!-- .product_page -->
                
                <div class="related negative-grid">
                    
                        <div class="c_header">
                            <div class="grid_10">
                                <h2>Related Products</h2>
                            </div><!-- .grid_10 -->

                            <div class="grid_2">
                                <a id="next_c1" class="next arows" href="#"><span>Next</span></a>
                                <a id="prev_c1" class="prev arows" href="#"><span>Prev</span></a>
                            </div><!-- .grid_2 -->
                        </div><!-- .c_header -->

                      
                    
                <div class="clear"></div>
            </div><!-- #content -->

            <div class="clear"></div>
        </div><!-- .container_12 -->
    </section><!-- #main -->
    <div class="clear"></div>
        
<?php
include 'footer.php'
?>