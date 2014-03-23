<?php
include '../../queries.php';
$database = new Queries();
$return_url = base64_decode($_GET["return_url"]); 

if(isset($_GET['action']))
{
	if($_GET['action'] == "remove")
	{
		if(isset($_GET['remove_id']))
		{
	
			$order_id = filter_var($_GET["remove_id"], FILTER_SANITIZE_STRING);
			$database->deleteOrderRegels($order_id);
		   	$database->deleteOrder($order_id);
		   	header('Location:'.$return_url);
			
		}
	}
}
?>