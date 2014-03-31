<?php 
include '../../header.php';
include '../../../queries.php';
if(isset($_POST['order_id']))
{
  $order_id = filter_var($_POST['order_id'], FILTER_VALIDATE_INT);
}
$database = new Queries();
$products = $database->getAllProducts();
?>
       <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="../../products/index.php">Producten</a></li>
            <li><a href="../../users/index.php">Gebruikers</a></li>
            <li><a href="../../categories/index.php">Categorieën</a></li>
            <li><a href="../../orders/index.php">Orders</a></li>
             <li><a href="../../menu/index.php">Menu</a></li>
          </ul>
        </div>
      </div>
    </div>

    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../dashboard.css" rel="stylesheet">
          <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
           <form action="details.php" method="GEt">
            <div style="text-align: right">
            <?php echo '<input type="hidden" name="id" value="'.$order_id.'" />'?>
          <input type="submit" class="text-right" name="new" value="Terug naar details"/>
          </div>
        </form>

     

<form = "create.php" method="POST">
<div class="custom">


<label for='product' >Product naam  </label><br>
<select style="padding-top:5px" id="product" name="product" class ="custom">
  <?php
  if($products != false)  
    {
      foreach($products as $product)
      {
          ?>
          <option value=<?php echo $product['id'] ?>><?php echo $product['prNaam'] ?></option>
          <?php
        
      }
    }

  ?>
</select><br>

<label for='link' >Aantal </label><br>
<input type='text' class="custom" name='aantal' id='aantal' placeholder="Aantal" maxlength="5" style="width:50%;" /><br>
<?php echo '<input type="hidden" name="order_id" id="order_id" value="'.$order_id.'" />'?>
<input type='submit' name='add' class="submit" value='Opslaan' />
 </div>
</form>

        </div>
      </div>
    </div>
<?php 


if(isset($_POST['add']))
{
  $order_id = $_POST['order_id'];
  $product = $_POST['product'];
  $aantal = $_POST['aantal'];

  $result = $database->addOrderRegel($order_id, $product, $aantal);
}
else
{
  echo "tsst";
}
include '../../footer.php';
?>
