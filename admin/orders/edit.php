<?php 
include '../header.php';
include '../../queries.php';
$database = new Queries();
$order_id = filter_var($_GET['id'], FILTER_VALIDATE_INT);


$users = $database->getFullNames();
$order_details =  $database->getOrderDetails($order_id);


?>
      <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="../products/index.php">Producten</a></li>
            <li><a href="../users/index.php">Gebruikers</a></li>
            <li><a href="../categories/index.php">Categorieën</a></li>
            <li><a href="../orders/index.php">Orders</a></li>
             <li><a href="../menu/index.php">Menu</a></li>
          </ul>
        </div>
      </div>
    </div>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../dashboard.css" rel="stylesheet">
          <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="sub-header">Product aanpassen </h2>
        
     

<form = "edit.php" method="POST">
<div class="custom">
<label for='klant' >Naam klant: </label><br>

<select id="klant" name="klant" class ="custom">
<?php
  if($users != false)  
    {
      foreach($users as $user)
      {
        if($user['naam'] == $order_details[0]['naam'])
        {
          ?>
          <option value=<?php echo $user['id'] ?> selected><?php echo $user['naam'] ?></option>
          <?php
        }
        else
        {
          ?>
          <option value=<?php echo $user['id'] ?>><?php echo $user['naam'] ?></option>
          <?php
        }
      }
    }

  ?>
</select><br>


<label for='beschrijving' >Order beschrijving</label><br>
<input type='text' name='beschrijving' id='beschrijving' maxlength="50" placeholder="Beschrijving" value='<?php echo $order_details[0]['beschrijving'] ?>' style="width:50%;" /><br>

<label for='price' >Order datum: </label><br>
<input type='text' class="custom" name='datum' id='datum 'placeholder="Datum"  maxlength="50" value='<?php echo $order_details[0]['datum'] ?>' style="width:50%;" /><br>
<input type='submit' name='edit' class"submit" value='Opslaan' />
 </div>
</form>

        </div>
      </div>
    </div>
<?php 

if(isset($_POST['edit']))
{
  $user_id = $_POST['klant'];
  $description = $_POST['beschrijving'];
  $date = $_POST['datum'];
  $result = $database->editOrder($order_id, $user_id, $description, $date);
}
else
{
  echo "tsst";
}
include '../footer.php';
?>
