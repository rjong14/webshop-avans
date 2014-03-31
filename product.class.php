<?php
require_once 'queries.php';
class products {

public function getProductInfo($id) {
			return $this->getInstance()->getProductInfo($id);
		}
public function getAllProducts() {
			return $this->getInstance()->getAllProducts();
		}
public function getCategoryGamesLimit($category) {
			return $this->getInstance()->getCategoryGamesLimit($category);
		}
public function getCategoryGames($category) {
			return $this->getInstance()->getCategoryGames($category);
		}
public function searchResult($name) {
			return $this->getInstance()->searchResult($name);
		}
public function getInstance() {
			static $queries;

			if(is_null($queries)){
				return $queries = new Queries();
			} else {
				return $queries;
			}
		}}
?>