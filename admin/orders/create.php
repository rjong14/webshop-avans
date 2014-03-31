<?php 
include '../header.php';
include '../../queries.php';
$database = new Queries();

$users = $database->getFullNames();

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
          <h1 class="sub-header">Order toevoegen </h2>

     

<form = "create.php" method="POST">
<div class="custom">



<label for='klant' >Naam klant </label><br>
<select style="padding-top:5px" id="klant" name="klant" class ="custom">
  <?php
  if($users != false)  
    {
      foreach($users as $user)
      {
          ?>
          <option value=<?php echo $user['id'] ?>><?php echo $user['naam'] ?></option>
          <?php
        
      }
    }

  ?>
</select><br>


<label for='beschrijving' >Beschrijving </label><br>
<input type='text' class="custom" name='beschrijving' id='beschrijving' placeholder="Beschrijving" maxlength="50" style="width:50%;" /><br>

<label for='datum' >Datum </label><br>
<input type='text' class="custom" name='datum' id='datum' placeholder="Datum" maxlength="50" style="width:50%;" value='<?php echo date("Y-m-d H:i:s"); ?>' disabled/><br>

<input type='submit' name='add' class="submit" value='Opslaan' />
 </div>
</form>

        </div>
      </div>
    </div>
<?php 


if(isset($_POST['add']))
{

  $user_id = $_POST['klant'];
  $description = $_POST['beschrijving'];
  $restult = $database->addOrder($user_id, $description, date("Y-m-d H:i:s"));
}
else

{
  echo "tsst";
}
include '../footer.php';
?>
