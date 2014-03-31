<?php
include 'header.php';
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
                    ?>
                     <article>
                            
                            <table class="cart_product">
                                <tr class="bg">
                                    <th class="images">Image</th>
                                    <th class="name">Product Name</th>
                                    <th class="price">Unit Price</th>
                                    <th class="qty">Qty</th>
                                    <th class="subtotal">Subtotal</th>
                                    <th class="category">Category </th>
                                    <th class="close"> </th>
                                  
                                </tr>
                                <?php
                                foreach($_SESSION['products'] as $product)
                                {
                                ?>
                                    <tr>
                                         <?php echo '<td class="images"><a href="product_page.php?productid='.$product["id"].'"><img src="' . $product['image'] . '"></a></td>';?>
                                        <td class="name"><?php echo $product['name'] ?></td>
                                        <td class="price"><?php echo $product['price'] ?></td>
                                        <td class="qty"> <?php echo $product['qty'] ?></td>
                                        <td class="subtotal">€ <?php echo ($product['price'] * $product['qty']) ?>'</td>
                                        <td class="category"><?php echo $product['category'] ?></td>
                                        <td><a title="close" class="close" href="cart_update.php?removep=<?php echo $product["id"] . '&return_url=' . $return_url ?>"></a></td>
                                       
                                    </tr>
                                <?php
                                }
                                ?>
                                    <tr>
                                    <td style="height: 30x; font-size:20px;">Totaal prijs : </td>
                                    <td class="close" colspan="5" style="font-size:20px;">€ <?php echo getSessionTotal() ?><td>
                                    </tr>
                                </table>
                                <div class="clear"></div>
                            </article>
                            <?php
                }
                else
                {
                    ?>
                    <p>There are currently no products in your shopping cart</p>
                    <?php
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