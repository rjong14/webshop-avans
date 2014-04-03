<?php
session_start();
include_once 'queries.php';
$database = new Queries();

if(isset($_POST["type"]) && $_POST["type"]=='add')
{
	$product_id 	= filter_var($_POST["product_id"], FILTER_SANITIZE_NUMBER_INT);
	$product_qty 	= filter_var($_POST["product_qty"], FILTER_SANITIZE_NUMBER_INT); 
	$return_url 	= base64_decode($_POST["return_url"]); 
	$productInfo 	= $database->getProductInfo($product_id);

	if($productInfo != false)
	{
		$new_product = array(array('id'=>$product_id, 'name'=>$productInfo[0]['prNaam'], 'description'=>$productInfo[0]['prBeschrijving'], 'image'=>$productInfo[0]['prImage'], 'category'=>$productInfo[0]['naam'], 'isurl'=>$productInfo[0]['isURL'], 'qty'=>$product_qty, 'price'=>$productInfo[0]['prPrijs']));
		if(isset($_SESSION["products"])) 
		{
			$found = false;
		
			foreach ($_SESSION["products"] as $game)
			{
				
				if($game['id'] == $product_id)
				{
					$product[] = array('id'=>$game['id'], 'name'=>$game['name'], 'description'=>$game['description'], 'isurl'=>$game['isurl'], 'image'=>$game['image'], 'category'=>$game['category'],  'qty'=>$product_qty, 'price'=>$game['price']);
					$found = true;
				}
				else
				{
					$product[] = array('id'=>$game['id'], 'name'=>$game['name'], 'description'=>$game['description'], 'isurl'=>$game['isurl'], 'image'=>$game['image'], 'category'=>$game['category'],  'qty'=>$game['qty'], 'price'=>$game['price']);
				}
			}

			if($found == false) 
			{
				$_SESSION["products"] = array_merge($product, $new_product);
			}else{
				$_SESSION["products"] = $product;
			}
		}
		else{
				$_SESSION["products"] = $new_product;
		}
	}
	header('Location:'.$return_url);
}
if(isset($_GET["removep"]) && isset($_GET["return_url"]) && isset($_SESSION["products"]))
{
	$product_id 	= $_GET["removep"]; //get the product code to remove
	$return_url 	= base64_decode($_GET["return_url"]); //get return url


		
	foreach ($_SESSION["products"] as $game)
	{
			if($game['id'] != $product_id)
			{
				$product[] = array('id'=>$game['id'], 'name'=>$game['name'], 'description'=>$game['description'], 'image'=>$game['image'], 'category'=>$game['category'],  'qty'=>$game['qty'], 'price'=>$game['price']);
			}
			
	}
	$_SESSION["products"] = $product;
	header('Location:'.$return_url);
}
?>