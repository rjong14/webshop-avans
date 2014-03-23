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
            <li><a href="../categories/index.php">Categorie</a></li>
            <li><a href="#">order</a></li>
            <li><a href="#">orderregel</a></li>
           <li><a href="../menu/index.php">menu</a></li>
          </ul>
        </div>
      </div>
    </div>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../dashboard.css" rel="stylesheet">
          <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="sub-header">Menu-item toevoegen </h2>

     

<form = "create.php" method="POST">
<div class="custom">
<label for='label' >Menu item tekst</label><br>
<input type='text' class="custom" name='label' id='label' placeholder="Product naam" maxlength="50" style="width:50%;" /><br>

<label for='link' >Menu item links </label><br>
<input type='text' class="custom" name='link' id='link' placeholder="Product naam" maxlength="50" style="width:50%;" /><br>

<input type='submit' name='add' class"submit" value='Opslaan' />
 </div>
</form>

        </div>
      </div>
    </div>
<?php 


if(isset($_POST['add']))
{
  $label = $_POST['label'];
  $link = $_POST['link'];
  $restult = $database->AddItem($label, $link);
}
else
{
  echo "tsst";
}
include '../footer.php';
?>
