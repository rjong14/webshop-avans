<?php include 'header.php'; 
include 'product.class.php'; 
$product_class = new products(); 
$products = $product_class->getCategoryGames("computer");
$current_url =base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

?>
<section id="main">
        <div class="container_12">
            <div id="content" class="grid_9">
                <h1 class="page_title">Producten categorieën </h1>
                <br>
	                <h2 class="">Computer spellen </h2>
	                <div class="products_list catalog">           
				  	<article>
					<form method="post" action="producten/computer.php">
					<div class="grid_3">
		  			<div class="prev">
						<a href="producten/computer.php"><img src="img/content/computer.png" alt="Product 2" title=""></a>
		   			</div><!-- .prev -->
					</div><!-- .grid_3 -->
			
					<div class="grid_6">
		 			 <div class="entry_content">
						<h3 class="title">Alle computer spellen</h3>
	       				 <p>Ga naar de computer spellen pagina</p>
	          		</div><!-- .entry_content -->
	                    
	           	
		    		
		    		<div class="cart">
		    		<br><br>
		   			<button class="add_to_cart">Naar spellen toe</button>

					</div><!-- .cart -->
	    		
					<input type="hidden" name="return_url" value= <?php echo $current_url ?> />
					</div><!-- .grid_6 -->
					<div class="clear"></div>
					</form>
	    			</article>
				    		

				    <h2 class="">Playstation spellen </h2>
	                <div class="products_list catalog">           
				  	<article>
					<form method="post" action="producten/playstation.php">
					<div class="grid_3">
		  			<div class="prev">
						<a href="producten/playstation.php"><img src="img/content/playstation.png" alt="Product 2" title=""></a>
		   			</div><!-- .prev -->
					</div><!-- .grid_3 -->
			
					<div class="grid_6">
		 			 <div class="entry_content">
						<h3 class="title">Alle playstation spellen</h3>
	       				 <p>Ga naar de playstation spellen pagina</p>
	          		</div><!-- .entry_content -->
	                    
	           	
		    		
		    		<div class="cart">
		    		<br><br>
		   			<button class="add_to_cart">Naar spellen toe</button>

					</div><!-- .cart -->
	    			
					</div><!-- .grid_6 -->
					<div class="clear"></div>
					</form>
	    			</article>
        			</div>


        			<h2 class="">xbox spellen </h2>
	                <div class="products_list catalog">           
				  	<article>
					<form method="post" action="producten/xbox.php">
					<div class="grid_3">
		  			<div class="prev">
						<a href="producten/xbox.php"><img src="img/content/xbox.png" alt="Product 2" title=""></a>
		   			</div><!-- .prev -->
					</div><!-- .grid_3 -->
			
					<div class="grid_6">
		 			 <div class="entry_content">
						<h3 class="title">Alle xbox spellen</h3>
	       				 <p>Ga naar de xbox spellen pagina</p>
	          		</div><!-- .entry_content -->
	                    
	           	
		    		
		    		<div class="cart">
		    		<br><br>
					
		   			<button class="add_to_cart">Naar spellen toe</button>
		   			</div><!-- .cart -->
	    			
					</div><!-- .grid_6 -->
					<div class="clear"></div>
					</form>
	    			</article>
        			</div>


        		</div>
    </section><!-- #main -->
    <div class="clear"></div>
<?php
include 'footer.php';
?>