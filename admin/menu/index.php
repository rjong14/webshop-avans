<?php 
include '../header.php';
include '../../queries.php';
$database = new Queries();
$items = $database->getMenuItems();

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
          <h1 class="page-header">Dashboard</h1>
          <h2 class="sub-header">Menu overzicht</h2>

        <form action="create.php" method="POST">
            <div style="text-align: right">
          <input type="submit" class="text-right" name="new" value="Nieuw menu-item toevoegen"/>
          </div>
        </form>
      
          <div class="table-responsive">
            <table style="" class="table table-striped table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Content</th>
                  <th>URL</th>
                </tr>
              </thead>
              <tbody>
                 <?php
                 if($items != false) {
                   foreach($items as $item)
                   {
                   ?>
                      <tr>
                        <td><?php echo $item['id'] ?></td>
                        <td><?php echo $item['label'] ?></td>
                        <td><?php echo $item['link'] ?></td>
                        <td class="text-right">
                          <a style="text-decoration: none;" href="edit.php?id=<?php echo $item['id'] ?>">
                              <img src="../img/editicon.png" />
                            </a>
                           <a href="delete.php?remove_id=<?php echo $item["id"] . '&action=remove&return_url=' . $current_url ?> " onclick="return confirm('Weet u zeker dat u <?php echo $item['label'] ?> wilt verwijderen?');">
                              <img src="../img/deleteicon.png" />
                            </a>
                        </td>
                      </tr> 
                    <?php
                    }
                  }
                  ?>  

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
<?php 
include '../footer.php';
?>
