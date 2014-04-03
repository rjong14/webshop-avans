<?php 
include '../header.php';
include '../../queries.php';
$database = new Queries();
$menus = $database->getMenuItems();

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
          <h1 class="sub-header">Menu-item toevoegen </h2>

     

<form = "create.php" method="POST">
<div class="custom">
<label for='label' >Menu item tekst</label><br>
<input type='text' class="custom" name='label' id='label' placeholder="Menu item Text" maxlength="50" style="width:50%;" /><br>

<label for='link' >Menu item links </label><br>
<input type='text' class="custom" name='link' id='link' placeholder="Menu item links" maxlength="50" style="width:50%;" /><br>

<label for='parent' >Menu item Parent </label><br>



<select style="padding-top:5px" id="parent" name="parent" class ="custom">
  <option value=0>Geen</option>
  <?php

  if($menus != false)  
    {
      foreach($menus as $menu)
      {
          ?>
          <option value=<?php echo $menu['id'] ?>><?php echo $menu['label'] ?></option>
          <?php
      }
    }

  ?>
</select><br>


<input type='submit' name='add' class="submit" value='Opslaan' />
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
  $parent = $_POST['parent'];
  $result = $database->AddItem($label, $link, $parent);
}
include '../footer.php';
?>
