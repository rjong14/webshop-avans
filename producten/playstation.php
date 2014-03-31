<?php
include 'header.php';
include '../product.class.php';
$product_class = new products();
$products = $product_class->getCategoryGames("playstation");
$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

?>

    <section id="main">
        <div class="container_12">
            <div id="content" class="grid_9">
                <h1 class="page_title">Product List Playstion : </h1>
                 
                <div class="options">
                  <div class="sort">
		    </div><!-- .sort -->
                    
		    
                </div><!-- .options -->
                <div class="clear"></div>
                
                <div class="products_list catalog">           
                <?php 
                if($products != false)
                {
		                foreach($products as $product)
						{
								echo '
							  	<article>
								<form method="post" action="../cart_update.php">
								<div class="grid_3">
					  			<div class="prev">
									<a href="../product_page.php?productid=' .$product["id"]. '"><img src="../' . $product['prImage'] . '" alt="Product 2" title=""></a>
					   			</div><!-- .prev -->
								</div><!-- .grid_3 -->
						
								<div class="grid_6">
					 			 <div class="entry_content">
									<h3 class="title">' . $product['prNaam'] . '</h3>
		               				 <p>'. $product['prKbeschrijving'] .'</p>
		                  		</div><!-- .entry_content -->
		                            
		                   	 	<div class="price">
		                    	€ ' . $product['prPrijs'] . ',
					    		</div>
					    		
					    		Quantity <input type="text" name="product_qty" style="width: 40px">
					    		<div class="cart">

					   			 <button class="add_to_cart">Add To Cart</button>

								</div><!-- .cart -->
		            			<input type="hidden" name="product_id" value="'.$product['id'].'" />
		            			<input type="hidden" name="type" value="add" />
								<input type="hidden" name="return_url" value="'.$current_url.'" />
								</div><!-- .grid_6 -->
								<div class="clear"></div>
								</form>
				    			</article>';
						}
					}
          
          	?>
           <article>
    		<div class="clear"></div>
                </div><!-- .products_list -->
                <div class="clear"></div>
	      
                <div class="pagination">
		    <ul>
			<li class="prev"><span>&#8592;</span></li>
			<li class="curent"><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">5</a></li>
			<li><span>...</span></li>
			<li><a href="#">100</a></li>
			<li class="next"><a href="#">&#8594;</a></li>
		    </ul>
                </div><!-- .pagination -->
                <p class="pagination_info">Displaying 1 to 12 (of 100 products)</p>
                
                
                
                <div class="clear"></div>
            </div><!-- #content -->
            
            <div id="sidebar" class="grid_3">
                <aside id="categories_nav">
		    <header class="aside_title">
                        <h3>Categories</h3>
                    </header>

		    <nav class="right_menu">
			<ul>
			    <li><a href="computer.php">PC</a></li>
			    <li class="current"><a href="playstation.php">Playstation</a></li>
			    <li><a href="xbox.php">XBOX</a></li>
			</ul>
		    </nav><!-- .right_menu -->
                </aside><!-- #categories_nav -->

            </div><!-- .sidebar -->
            <div class="clear"></div>
        </div><!-- .container_12 -->
    </section><!-- #main -->
    <div class="clear"></div>
<?php

include '../footer.php';
?>
