<?php 
include '../header.php';
include '../../queries.php';
$database = new Queries();
$categories = $database->getAllCategories();

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
          <h1 class="sub-header">Product toevoegen </h2>

     

<form = "create.php" method="POST">
<div class="custom">
<label for='name' >Product naam: </label><br>
<input type='text' class="custom" name='name' id='name' placeholder="Product naam" maxlength="50" style="width:50%;" /><br>


<label for='categorie' >Product categorie: </label><br>



<select style="padding-top:5px" id="categorie" name="categorie" class ="custom">
  <?php
  if($categories != false)  
    {
      foreach($categories as $categorie)
      {
          ?>
          <option value=<?php echo $categorie['id'] ?>><?php echo $categorie['naam'] ?></option>
          <?php
      }
    }

  ?>
</select><br>

<label for='price' >Product prijs: </label><br>
<input type='text' class="custom" name='price' id='price 'placeholder="Product prijs"  maxlength="50" style="width:50%;" /><br>
<label for='kort' >Korte omschrijving: </label><br>
<textarea name="kort" class="custom" id='kort' style="width:50%;" placeholder="Product korte beschrijving"></textarea><br>
<label for='lang' >Lange omschrijving: </label><br>
<textarea name="lang" class="custom" id='lang' style="width:50%;" placeholder="Product lange beschrijving"></textarea></br>

<label for='image' >Image padnaam </label><br>
<input type='text' class="submit" name='padnaam' id='padnaam' placeholder="Product image"  maxlength="50" style="width:50%;"FVZbr></br>


<input type='submit' name='add' class="submit" value='Opslaan' />
 </div>
</form>

        </div>
      </div>
    </div>
<?php 


if(isset($_POST['add']))
{

  $categorie = $_POST['categorie'];
  $lang = $_POST['lang'];
  $prijs = $_POST['price'];
  $kort = $_POST['kort'];
  $padnaam = $_POST['padnaam'];
  $naam = $_POST['name'];
  $restult = $database->addProduct($naam, $categorie, $prijs, $kort, $lang, $padnaam);
}
else

{
  echo "tsst";
}
include '../footer.php';
?>
