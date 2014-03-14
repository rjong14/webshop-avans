<?php
include 'header.php'
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
                echo '<article>';
			echo '<div class="grid_3">';
			    echo '<div class="prev">';
				echo '<a href="product_page.html"><img src="img/content/' .'image'. '" alt="Product 2" title=""></a>';
			    echo '</div><!-- .prev -->';
			echo '</div><!-- .grid_3 -->';
				
			echo '<div class="grid_6">';
			   echo '<div class="entry_content">';
				echo '<a href="product_page.html"><h3 class="title">' .'title'. '</h3></a>';
                echo '<p>'. 'info' .'<a class="more" href="'.'title+.php'.'">Learn more</a></p>';
                  echo '</div><!-- .entry_content -->';
                            
                    echo '<div class="price">';
                                echo'<div class="price_old">$1,725.00</div>';
				echo'$1,550.00';
			    echo'</div>';
                                
				
                           echo '<div class="cart">';
                                echo '<a href="#" class="bay"><img src="img/bg_cart.png" alt="Buy" title="">Add to Cart</a>';
                            echo '</div><!-- .cart -->';
			echo '</div><!-- .grid_6 -->';
			echo '<div class="clear"></div>';
		    echo '</article>';
                    
            echo '<article>';
    
    ?>
                    
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
                
                <aside id="shop_by">
                    <header class="aside_title">
                        <h3>Shop By</h3>
                    </header>
		     
		    <div class="currently_shopping">
			<h4>Currently Shopping by:</h4>
			<ul>
			    <li><a title="close" class="close" href="#"></a>Price: <span>$0.00 - $999.99</span></li>
			    <li><a title="close" class="close" href="#"></a>Manufacturer: <span>Apple</span></li>
			</ul>
			    
			<a class="clear_all" href="#">Clear All</a>
			    
			<div class="clear"></div>
		    </div><!-- .currently_shopping -->
		     
		    <h4 class="sub_title">Category</h4>
                    
                    <nav class="check_opt">
			<ul>
			    <li><a href="#">For Home (23)</a></li>
			    <li><a href="#">For Car (27)</a></li>
			    <li><a href="#">For Office (9)</a></li>
			</ul>
		    </nav><!-- .check_opt -->
		     
		    <h4 class="sub_title">Price</h4>

                    <nav class="check_opt price">
			<ul>
			    <li><a href="#">0.00 - $49.99 (21)</a></li>
			    <li><a href="#">$50.00 - $99.99 (7)</a></li>
			    <li><a href="#">$100.00 and above (15)</a></li>
			</ul>
		    </nav><!-- .check_opt -->
                </aside><!-- #shop_by -->

                <aside id="specials" class="specials">
                    <header class="aside_title">
                        <h3>Specials</h3>
                    </header>

		    <ul>
			<li>
			    <div class="prev">
				<a href="#"><img src="img/content/product7.png" alt="Product 7" title=""></a>
			    </div>

			    <div class="cont">
				<a href="#">Emerald Cut Emerald Ring</a>
				<div class="prise"><span class="old">$1770.00</span> $750.00</div>
			    </div>
			</li>

			<li>
			    <div class="prev">
				<a href="#"><img src="img/content/product1.png" alt="Product 1" title=""></a>
			    </div>

			    <div class="cont">
				<a href="#">Handmade Emerald Diamond Solitaire</a>
				<div class="prise">$3250.00</div>
			    </div>
			</li>
		     </ul>
                </aside><!-- #specials -->

                <aside id="compare_products">
                    <header class="aside_title">
                        <h3>Compare Products</h3>
                    </header>

		    <ul>
			<li><a title="close" class="close" href="#"></a>Home Collection Honeysuckle Orchid Flameless</li>
			<li><a title="close" class="close" href="#"></a>Caldrea Linen and Room Spray, Ginger Pomelo</li>
			<li><a title="close" class="close" href="#"></a>Fresh Wave Travel Size Spray</li>
		    </ul>

		    <button class="compare">Compare</button>
		    <a class="clear_all" href="#">Clear All</a>

		    <div class="clear"></div>
                </aside><!-- #compare_products -->

                <aside id="newsletter_signup">
                    <header class="aside_title">
                        <h3>Newsletter Signup</h3>
                    </header>

		    <p>Phasellus vel ultricies felis. Duis rhoncus risus eu urna pretium.</p>

		    <form class="newsletter">
			<input type="email" name="newsletter" class="your_email" value="" placeholder="Enter your email address...">
			<input type="submit" id="submit" value="Subscribe">
		    </form>
                </aside><!-- #newsletter_signup -->
                
            </div><!-- .sidebar -->
            <div class="clear"></div>
        </div><!-- .container_12 -->
    </section><!-- #main -->
    <div class="clear"></div>
        
<?php
include 'footer.php'
?>