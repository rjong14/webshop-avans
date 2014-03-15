<?php
include 'header.php';
$database = new Queries();
$games = $database->getxBoxGames();
$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

?>


    <div class="breadcrumbs">
        <div class="container_12">
            <div class="grid_12">
                 <a href="index.html">Home</a><span></span><a href="#">Category</a><span></span><span class="current">This page</span>
            </div><!-- .grid_12 -->
        </div><!-- .container_12 -->
    </div><!-- .breadcrumbs -->
    
    <section id="main">
        <div class="container_12">
            <div id="content" class="grid_9">
                <h1 class="page_title">Product List</h1>
                 
                <div class="options">
                    <div class="show">
			<span>Show</span>
			<select>
			    <option>1</option>
			    <option>2</option>
			    <option>3</option>
			    <option>4</option>
			    <option>5</option>
			    <option>6</option>
			    <option>7</option>
			    <option>8</option>
			    <option>9</option>
			    <option>10</option>
			    <option>11</option>
			    <option>12</option>
			</select>
			    
			<span>per page</span>
		    </div><!-- .show -->
                    
                <div class="sort">
			<span>Sort By</span>
			<select>
			    <option>Price</option>
			    <option>Rating</option>
			    <option>Name</option>
			</select>
			    
			<a class="sort_up" href="#">&#8593;</a>
		    </div><!-- .sort -->
                    
		    <div class="grid-list">
			<a class="grid" href="catalog_grid.html"><span></span></a>
			<a class="list current" href="index.html"><span></span></a>
		    </div><!-- .grid-list -->
		    
                </div><!-- .options -->
                <div class="clear"></div>
                
                <div class="products_list catalog">           
                <?php 
                foreach($games as $game)
				{
						echo '
					  	<article>
						<form method="post" action="cart_update.php">
						<div class="grid_3">
			  			<div class="prev">
							<a href="product_page.html"><img src="' . $game['prImage'] . '" alt="Product 2" title=""></a>
			   			</div><!-- .prev -->
						</div><!-- .grid_3 -->
				
						<div class="grid_6">
			 			 <div class="entry_content">
							<a href="product_page.html"><h3 class="title">' . $game['prNaam'] . '</h3></a>
               				 <p>'. $game['prBeschrijving'] .'</p>
                  		</div><!-- .entry_content -->
                            
                   	 	<div class="price">
                    	€ ' . $game['prPrijs'] . ',
			    		</div>
			    		
			    		Quantity <input type="text" name="product_qty" style="width: 40px">
			    		<div class="cart">

			   			 <button class="add_to_cart">Add To Cart</button>

						</div><!-- .cart -->
            			<input type="hidden" name="product_id" value="'.$game['id'].'" />
            			<input type="hidden" name="type" value="add" />
						<input type="hidden" name="return_url" value="'.$current_url.'" />
						</div><!-- .grid_6 -->
						<div class="clear"></div>
						</form>
		    			</article>';
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
			    <li><a href="#">Home</a></li>
			    <li><a href="#">Wedding</a></li>
			    <li class="current"><a href="#">Rings</a></li>
			    <li><a href="#">Necklaces</a></li>
			    <li><a href="#">Earrings</a></li>
			    <li><a href="#">Bracelets</a></li>
			</ul>
		    </nav><!-- .right_menu -->
                </aside><!-- #categories_nav -->

            </div><!-- .sidebar -->
            <div class="clear"></div>
        </div><!-- .container_12 -->
    </section><!-- #main -->
    <div class="clear"></div>
<?php

include 'footer.php';
?>
