<?php 
include '../header.php';
include '../../queries.php';
$database = new Queries();
$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

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
          <h1 class="sub-header">Product toevoegen </h2>
          

        <form action="create.php" method="POST">
            <div style="text-align: right">
          <input type="submit" class="text-right" name="new" value="Nieuw product toevoegen"/>
          </div>
        </form>
     

<form = "create.php" method="GET">
 <fieldset >
<legend>Producten</legend>
<div class="custom">
<label for='name' >Pruduct naam: </label><br>
<input type='text' class="custom" name='name' id='name' placeholder="naam" maxlength="50" style="width:50%;" /><br>
<label for='name' >Pruduct categorie: </label><br>
<input type='text' class="custom" name='categorie' id='categorie'placeholder="categorie"  maxlength="50" style="width:50%;" /><br>
<label for='name' >Pruduct prijs: </label><br>
<input type='text' class="custom" name='price' id='price 'placeholder="prijs"  maxlength="50" style="width:50%;" /><br>
<label for='name' >Korte omschrijving: </label><br>
<input type='text' class="custom" name='kort' id='kort' placeholder="kort"  maxlength="50" style="width:50%;" /><br>
<label for='name' >Lange omschrijving: </label><br>
<input type='text' class="custom" name='lang' id='lang' placeholder="lang"  maxlength="50" style="width:50%;" /><br>

<label for='image' >Image padnaam </label><br>
<input type='text' class="submit" name='padnaam' id='padnaam' placeholder="padnaam"  maxlength="50" style="width:50%;"FVZbr></br>


<input type='submit' name='add' class"submit" value='Opslaan' />
 </div>
</fieldset>
</form>

        </div>
      </div>
    </div>
<?php 


if(isset($_GET['add']))
{

echo '<script type="text/javascript">alert("testhier!");</script>'; 
  $categorie = $_GET['categorie'];
  $lang = $_GET['lang'];
  $prijs = $_GET['prijs'];
  $kort = $_GET['kort'];
  $padnaam = $_GET['image'];
  $naam = $_GET['name'];

 $restult = $database->addProduct($naam, $categorie, $prijs, $kort, $lang, $padnaam);
 echo '<script type="text/javascript">alert("testhierq!");</script>'; 
 print_r($restult);




}
else

{
  echo "tsst";
}
include '../footer.php';
?>
