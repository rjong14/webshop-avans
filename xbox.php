<?php
include 'header.php';
include 'footer.php';
include_once 'queries.php';
$query = new Queries();
$menu = $query->getxBoxGames();
?>
