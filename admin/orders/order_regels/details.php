<?php 
include '../../header.php';
include '../../../queries.php';
$database = new Queries();
$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
$order_id = filter_var($_GET['id'], FILTER_VALIDATE_INT);
$order_details = $database->getOrderRegelDetails($order_id);
?>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="../../products/index.php">Producten</a></li>
            <li><a href="../../users/index.php">Gebruikers</a></li>
            <li><a href="../../categories/index.php">Categorieën</a></li>
            <li><a href="../../orders/index.php">Orders</a></li>
             <li><a href="../../menu/index.php">Menu</a></li>
          </ul>
        </div>
      </div>
    </div>

    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../dashboard.css" rel="stylesheet">
          <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Order regels</h1>

        <form action="create.php" method="POST">
            <div style="text-align: right">
            <?php echo '<input type="hidden" name="order_id" value="'.$order_id.'" />'?>
          <input type="submit" class="text-right" name="new" value="Nieuwe order regel toevoegen"/>
          </div>
        </form>
      
          <div class="table-responsive">
            <table style="" class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Product naam</th>
                  <th>Aantal</th>
                </tr>
              </thead>
              <tbody>
                 <?php
                 if($order_details != false) {
                   foreach($order_details as $order_detail)
                   {
                   ?>
                      <tr>
                        <td><?php echo $order_detail['order_regel_id'] ?></td>
                        <td><?php echo $order_detail['prNaam'] ?></td>
                        <td><?php echo $order_detail['aantal'] ?></td>
                        
                        <td class="text-right">
                            <a style="text-decoration: none" href="delete.php?remove_id=<?php echo $order_detail["order_regel_id"] . '&action=remove&return_url=' . $current_url ?> " onclick="return confirm('Weet u zeker dat u <?php echo $order_detail['prNaam'] ?> wilt verwijderen?');">
                              <img src="../../img/deleteicon.png" />
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
include '../../footer.php';
?>
