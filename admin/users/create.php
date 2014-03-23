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
          <h1 class="sub-header">Gebruiker toevoegen </h2>

     


<form = "edit.php" method="POST">
<div class="custom">
<label for='nickname' >Gebruikersnaam</label><br>
<input type='text' name='nickname' id='nickname' maxlength="50" placeholder="nickname" style="width:50%;" /><br>;
<label for='wachtwoord' >Wachtwoord</label><br>
<input type='password' class="custom" name='wachtwoord' id='wachtwoord' maxlength="50" placeholder="wachtwoord"  style="width:50%;" /><br>



<label for='name' >Voornaam </label><br> 
<input type='text' class="custom" name='name' id='name 'placeholder="firstname"  maxlength="50" style="width:50%;" /><br>

<label for='lastname' >Achternaam </label><br> 
<input type='text' class="custom" name='lastname' id='lastname 'placeholder="lastname"  maxlength="50"  style="width:50%;" /><br>

<label for='adress' >Adres </label><br> 
<input type='text' class="custom" name='adress' id='adress 'placeholder="adress"  maxlength="50"  style="width:50%;" /><br>

<label for='city' >Woonplaats </label><br> 
<input type='text' class="custom" name='city' id='city 'placeholder="city"  maxlength="50"  style="width:50%;" /><br>

<label for='zip' >Postcode </label><br> 
<input type='text' class="custom" name='zip' id='zip' placeholder="city"  maxlength="50"  style="width:50%;" /><br>


<label for='email' >Email </label><br> 
<input type='text' class="custom" name='email' id='email' placeholder="city"  maxlength="50"  style="width:50%;" /><br>


<label for='admin' >Admin </label><br> 
<select id="adin" name="admin" class ="custom">
<option value= "0" selected>Nee</option>
<option value= "1" >Ja</option>
]
</select><br>

<input type='submit' name='add' class"submit" value='Opslaan' />
 </div>
</form>
</form>

        </div>
      </div>
    </div>
<?php 


if(isset($_POST['add']))
{


  $check = $database->checkUsername($_POST['nickname']);
  if($check == false)
  {

      $nickname = $_POST['nickname'];
      $wachtwoord = $_POST['wachtwoord'];
      $naam = $_POST['name'];
      $achternaam = $_POST['lastname'];
      $adres = $_POST['adress'];
      $woonplaats = $_POST['city'];
      $postcode = $_POST['zip'];
      $email =  $_POST['email'];
      $isAdmin = $_POST['admin'];
      $result =  $database->addUser($nickname, $wachtwoord, $naam, $achternaam, $adres, $woonplaats, $postcode, $email, $isAdmin);
  }
  else
  {
    echo '<script language="javascript">';
    echo 'alert("De gebruikersnaam wordt al gebruikt")';
    echo '</script>';
  }

}
else

{
  echo "tsst";
}
include '../footer.php';
?>
