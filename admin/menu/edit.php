<?php 
include '../header.php';
include '../../queries.php';
$database = new Queries();
$menu_item_id = filter_var($_GET['id'], FILTER_VALIDATE_INT);
$menu_item_details = $database->getMenuItem($menu_item_id);
$menus = $database->getMenuItems();
$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

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
          <h1 class="sub-header">Menu-item aanpassen </h2>

     

<form = "create.php" method="POST">
<div class="custom">
<label for='name' >Menu-item label </label><br>
<input type='text' class="custom" name='label' id='label' placeholder="label" value="<?php echo $menu_item_details[0]['label'] ?>" maxlength="50" style="width:50%;" /><br>

<label for='name' >Menu-item link </label><br>
<input type='text' class="custom" name='link' id='link' placeholder="link" value="<?php echo $menu_item_details[0]['link'] ?>" maxlength="50" style="width:50%;" /><br>
<label for='parent' >Menu item Parent </label><br>
<select id="parent" name="parent" class ="custom">
  <?php

  if($menu_item_details[0]['parent'] == 0)
  {
    ?>
    <option value=0 selected>Geen</option>
    <?php
  }
  else
  {
    ?> 
    <option value=0>Geen</option>
     <?php
  }
  if($menus != false)  
    {
      foreach($menus as $menu)
      {
        if($menu['id'] == $menu_item_details[0]['parent'])
        {
          ?>
          <option value=<?php echo $menu['id'] ?> selected><?php echo $menu['label'] ?></option>
          <?php
        }
        else
        {
          ?>
          <option value=<?php echo $menu['id'] ?>><?php echo $menu['label'] ?></option>
          <?php
        }
      }
    }

  ?>
</select><br>



<input type='submit' name='edit' class="submit" value='Opslaan' />
 </div>
</form>

        </div>
      </div>
    </div>
<?php 


if(isset($_POST['edit']))
{

  $label = $_POST['label'];
  $link = $_POST['link'];
  $parent = $_POST['parent'];
  
  $restult = $database->editMenuitem($menu_item_id, $label, $link, $parent);
  ?>
  <script type="text/javascript">
  var newLocation = "<?php echo base64_decode($current_url); ?>";
  window.location = newLocation;
  </script>
  <?php
}
include '../footer.php';
?>
