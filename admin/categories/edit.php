<?php 
include '../header.php';
include '../../queries.php';
$database = new Queries();
$categorie_id = filter_var($_GET['id'], FILTER_VALIDATE_INT);
$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
if(isset($_GET['name'])) {
  $categorie_naam = $_GET['name'];
}

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
          <h1 class="sub-header">Categorie aanpassen </h2>

     

<form = "create.php" method="POST">
<div class="custom">
<label for='name' >Categorie naam </label><br>
<input type='text' class="custom" name='name' id='name' placeholder="Product naam" value="<?php echo $categorie_naam ?>" maxlength="50" style="width:50%;" /><br>

<input type='submit' name='edit' class"submit" value='Opslaan' />
 </div>
</form>

        </div>
      </div>
    </div>
<?php 


if(isset($_POST['edit']))
{

  $naam = $_POST['name'];
  $restult = $database->editCategorie($categorie_id, $naam);
  ?>
  <script type="text/javascript">
  var newLocation = "<?php echo base64_decode($current_url); ?>";
  window.location = newLocation;
  </script>
  <?php
}
include '../footer.php';
?>
