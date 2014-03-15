<?php
include 'header.php';
$database = new Queries();
$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

?>
    
    <section id="main">
        <div class="container_12">
            <div id="content" class="grid_12">
                <header>
                    <h1 class="page_title">Shopping cart</h1>
                </header>
                    
                <?php
                if(isset($_SESSION['products']))
                {
                     echo   '<article>
                            
                            <table class="cart_product">
                                <tr class="bg">
                                    <th class="images">Image</th>
                                    <th class="name">Product Name</th>
                                    <th class="price">Unit Price</th>
                                    <th class="qty">Qty</th>
                                    <th class="subtotal">Subtotal</th>
                                    <th class="category">Category </th>
                                    <th class="close"> </th>
                                  
                                </tr>';

                                foreach($_SESSION['products'] as $product)
                                {

                                echo '<tr>
                                        <td class="images"><a href="product_page.php"><img src="' . $product['image'] . '"></a></td>
                                        <td class="name">' . $product['name'] . '</td>
                                        <td class="price">' . $product['price'] . '</td>
                                        <td class="qty">' . $product['qty'] . '</td>
                                        <td class="subtotal">€ ' . $product['price'] * $product['qty'] .  '</td>
                                        <td class="category">' . $product['category'] . '</td>
                                        <td class="close"><a href="cart_update.php?removep='.$product["id"].'&return_url='.$current_url.'"><img src="img/delete.png"/> </a></td>
                                    </tr>';
                                }

                            echo '</table>
                                <div class="clear"></div>
                            </article>';
                }
                else
                {
                    echo '<p>There are currently no products in your shopping cart</p>';
                }
                ?>
               
                <div class="clear"></div>
            </div><!-- #content -->

            <div class="clear"></div>
        </div><!-- .container_12 -->
    </section><!-- #main -->
    <div class="clear"></div>
        
<?php
include 'footer.php'
?>