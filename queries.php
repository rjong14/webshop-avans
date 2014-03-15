<?php
	include_once 'database.class.php';

	// Created a class called "Queries"
	class Queries {

		// Created a function to get the institutions from the database
		public function getMenuItems() {
			$result = $this->getInstance()->selectQuery("SELECT * FROM menu", null);
			return $result;
		}

		public function getxBoxGames() {
			$result = $this->getInstance()->selectQuery("SELECT * FROM producten where prCategorie = ?", array('xbox'));
			return $result;
		}
		public function checkLogin($username, $password)
		{
			$result = $this->getInstance()->selectQuery("SELECT * FROM gebruikers where gebruikersnaam = ? and wachtwoord = ?", array($username, $password));
			return $result;
		}
		public function getProductInfo($id)
		{
			$result = $this->getInstance()->selectQuery("SELECT * FROM producten where id = ?", array($id));
			return $result;
		}
		// Created a function to make one instance of the "DB" class
		public function getInstance(){
			static $db;

			if(is_null($db)){
				return $db = new DB();
			} else {
				return $db;
			}
		}
	}
?>