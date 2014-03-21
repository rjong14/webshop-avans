<?php 
include '../header.php';
include '../../queries.php';
$database = new Queries();
$categories = $database->getAllCategories();

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
          <h1 class="page-header">Dashboard</h1>
          <h2 class="sub-header">Categorieën overzicht</h2>
          <div class="table-responsive">
            <table style="" class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>naam</th>
                </tr>
              </thead>
              <tbody>
                 <?php
                 if($categories != false) {
                   foreach($categories as $categorie)
                   {
                   ?>
                      <tr>
                        <td><?php echo $categorie['id'] ?></td>
                        <td><?php echo $categorie['naam'] ?></td>
                        <td class="text-right">
                          <a href="#">
                              <img src="../img/editicon.png" />
                            </a>
                           <a href="delete.php?remove_id=<?php echo $categorie["id"] . '&action=remove&return_url=' . $current_url ?> " onclick="return confirm('Weet u zeker dat u <?php echo $categorie['naam'] ?> wilt verwijderen?');">
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
