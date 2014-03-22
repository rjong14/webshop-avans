<?php 
include '../header.php';
include '../../queries.php';
$database = new Queries();
$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
$product_id = filter_var($_GET['id'], FILTER_VALIDATE_INT);
$product_details = $database->getProductInfo($product_id);
$categories = $database->getAllCategories();
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
            <li><a href="#">menu</a></li>
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
<label for='name' >Product naam</label><br>
<input type='text' name='name' id='name' maxlength="50" placeholder="naam" value='<?php echo $product_details[0]['prNaam'] ?>' style="width:50%;" /><br>
<label for='categorie' >Product categorie: </label><br>

<select id="categorie" name="categorie" class ="custom">
  <?php
  if($categories != false)  
    {
      foreach($categories as $categorie)
      {
        if($categorie['naam'] == $product_details[0]['naam'])
        {
          ?>
          <option value=<?php echo $categorie['id'] ?> selected><?php echo $categorie['naam'] ?></option>
          <?php
        }
        else
        {
          ?>
          <option value=<?php echo $categorie['id'] ?>><?php echo $categorie['naam'] ?></option>
          <?php
        }
      }
    }

  ?>
</select><br>



<label for='price' >Product prijs: </label><br>
<input type='text' class="custom" name='price' id='price 'placeholder="prijs"  maxlength="50" value='<?php echo $product_details[0]['prPrijs'] ?>' style="width:50%;" /><br>
<label for='kort' >Korte omschrijving: </label><br>
<textarea name="kort" class="custom" id='kort' style="width:50%;" placeholder="kort"><?php echo $product_details[0]['prKbeschrijving'] ?></textarea><br>
<label for='lang' >Lange omschrijving: </label><br>
<textarea name="lang" class="custom" id='lang' style="width:50%;" placeholder="lang"><?php echo $product_details[0]['prBeschrijving'] ?></textarea></br>
<label for='image' >Image padnaam </label><br>
<input type='text' class="submit" name='padnaam' id='padnaam' placeholder="padnaam"  maxlength="50" value='<?php echo $product_details[0]['prImage'] ?>' style="width:50%;"FVZbr></br>
<input type='submit' name='edit' class"submit" value='Opslaan' />
 </div>
</form>

        </div>
      </div>
    </div>
<?php 


if(isset($_POST['edit']))
{

  $categorie = $_POST['categorie'];
  $lang = $_POST['lang'];
  $prijs = $_POST['price'];
  $kort = $_POST['kort'];
  $padnaam = $_POST['padnaam'];
  $naam = $_POST['name'];
  $restult = $database->editProduct($product_id, $naam, $categorie, $prijs, $kort, $lang, $padnaam);
  echo '<script>history.go(0);</script>';
}
else

{
  echo "tsst";
}
include '../footer.php';
?>
