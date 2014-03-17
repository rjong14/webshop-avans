<?php
	include_once 'database.class.php';

	// Created a class called "Queries"
	class Queries {

		// Created a function to get the institutions from the database
		public function getMenuItems() {
			$result = $this->getInstance()->selectQuery("SELECT * FROM menu", null);
			return $result;
		}

		public function getCategoryGames($category) {
			$result = $this->getInstance()->selectQuery("SELECT * FROM producten where prCategorie = ?", array($category));
			return $result;
		}
		public function checkLogin($username, $password)
		{
			$result = $this->getInstance()->selectQuery("SELECT * FROM gebruikers where gebruikersnaam = ? and wachtwoord = ?", array($username, $password));
			return $result;
		}
		public function checkUsername($username)
		{
			$result = $this->getInstance()->selectQuery("SELECT * FROM gebruikers where gebruikersnaam = ?", array($username));
			return $result;
		}
		public function insertUser($username, $password, $firstname, $lastname, $adress, $city, $zip, $email)
		{

			$result = $this->getInstance()->executeQuery("INSERT INTO  `webshop`.`gebruikers` (`id` ,`gebruikersnaam` ,`wachtwoord` ,`voornaam` ,`achternaam` ,`adres` ,`woonplaats` ,`postcode` ,`email` ,`isAdmin`)
			VALUES (NULL ,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  '0');", array($username, $password, $firstname, $lastname, $adress, $city, $zip, $email));
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