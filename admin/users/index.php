<?php 
include '../header.php';
include '../../queries.php';
$database = new Queries();
$users = $database->getAllUsers();
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
          <h2 class="sub-header">Gebruikers overzicht</h2>
          <div class="table-responsive">
            <table style="" class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>gebruikersnaam</th>
                  <th>wachtwoord</th>
                  <th>voornaam</th>
                  <th>achternaam</th>
                </tr>
              </thead>
              <tbody>
                 <?php
                 if($users != false) {
                   foreach($users as $user)
                   {
                   ?>
                      <tr>
                        <td><?php echo $user['id'] ?></td>
                        <td><?php echo $user['gebruikersnaam'] ?></td>
                        <td><?php echo $user['wachtwoord'] ?></td>
                        <td><?php echo $user['voornaam'] ?></td>
                        <td><?php echo $user['achternaam'] ?></td>
                        <td class="text-right">
                          <a href="#">
                              <img src="../img/editicon.png" />
                            </a>
                           <a href="delete.php?remove_id=<?php echo $user["id"] . '&action=remove&return_url=' . $current_url ?> " onclick="return confirm('Weet u zeker dat u <?php echo $user['gebruikersnaam'] ?> wilt verwijderen?');">
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
