<?php 
include 'header.php';
include '../queries.php';
$database = new Queries();
$producten = $database->getAllProducts();
$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

?>
          <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>
          <h2 class="sub-header">Producten overzicht</h2>
          <div class="table-responsive">
            <table style="" class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Naam</th>
                  <th>Korte beschrijving</th>
                  <th>Beschrijving</th>
                  <th>Categorie</th>
                  <th>Prijs</th>
                  <th>Foto</th>
                  <th>Acties</th>
                </tr>
              </thead>
              <tbody>
                 <?php
                 if($producten != false) {
                   foreach($producten as $product)
                   {
                   ?>
                      <tr>
                        <td><?php echo $product['id'] ?></td>
                        <td><?php echo  $product['prNaam'] ?></td>
                        <td><?php echo $product['prKbeschrijving'] ?></td>
                        <td><?php echo $product['prBeschrijving'] ?></td>
                        <td><?php echo $product['prCategorie'] ?></td>
                        <td><?php echo $product['prPrijs'] ?></td>
                        <td><?php echo $product['prImage'] ?></td>
                        <td>
                          <a href="#">
                              <img src="img/editicon.png" />
                            </a>
                           <a href="delete.php?remove_id=<?php echo $product["id"] . '&action=remove&table=producten&return_url=' . $current_url ?> " onclick="return confirm('Weet u zeker dat u <?php echo $product['prNaam'] ?> wilt verwijderen?');">
                              <img src="img/deleteicon.png" />
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
include 'footer.php';
?>
