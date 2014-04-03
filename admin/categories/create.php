<?php 
include '../header.php';
include '../../queries.php';
$database = new Queries();

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
          <h1 class="sub-header">Categorie toevoegen </h2>

     

<form = "create.php" method="POST">
<div class="custom">
<label for='name' >Categorie naam </label><br>
<input type='text' class="custom" name='name' id='name' placeholder="Product naam" maxlength="50" style="width:50%;" /><br>

<input type='submit' name='add' class"submit" value='Opslaan' />
 </div>
</form>

        </div>
      </div>
    </div>
<?php 


if(isset($_POST['add']))
{

  if(isset($_POST['name']) && $_POST['name'] != "")
  {
    $naam = $_POST['name'];
    $restult = $database->addCategorie($naam);
  }
  else
  {
    ?>
    <script type="text/javascript">
    alert('Vul alle velden in');
    </script>
    <?php
  }
}
else

{
  echo "tsst";
}
include '../footer.php';
?>
