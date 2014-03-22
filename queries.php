<?php
	include_once 'database.class.php';

	// Created a class called "Queries"
	class Queries {

		// Created a function to get the institutions from the database
		public function getMenuItems() {
			$result = $this->getInstance()->selectQuery("SELECT * FROM menu", null);
			return $result;
		}
		public function deleteProduct($id)
		{
			$result = $this->getInstance()->executeQuery("DELETE from producten where id = ?", array($id));
			return $result;
		}

		public function addProduct($naam, $categorie, $prijs, $kort, $lang, $padnaam)
		{
			$result = $this->getInstance()->executeQuery("INSERT INTO producten (prCategorie, prPrijs, prImage, prNaam, prBeschrijving, prKbeschrijving) 
				values(?,?,?,?,?,?)", array($categorie, $prijs, $padnaam, $naam, $lang, $kort));
			return $result;
		}
		public function editProduct($id, $naam, $categorie, $prijs, $kort, $lang, $padnaam)
		{
		
			$result = $this->getInstance()->executeQuery("UPDATE producten SET prNaam = ?, prCategorie = ?, prPrijs = ?, prKbeschrijving = ?,  prBeschrijving = ?,  prImage = ? WHERE id = ?", array($naam, $categorie, $prijs, $kort, $lang, $padnaam, $id));
			return $result;
		}
		public function deleteUser($id)
		{
			$result = $this->getInstance()->executeQuery("DELETE from gebruikers where id = ?", array($id));
			return $result;
		}
		public function deleteCategorie($id)
		{
			$result = $this->getInstance()->executeQuery("DELETE from categorie where id = ?", array($id));
			return $result;
		}
		public function getAllUsers()
		{
			$result = $this->getInstance()->selectQuery("SELECT * from gebruikers", null);
			return $result;
		}
		public function getAllProducts()
		{
			$result = $this->getInstance()->selectQuery("SELECT id, prCategorie, prNaam, left(prBeschrijving,40) as prBeschrijving, left(prBeschrijving,20) as prKbeschrijving, prImage, prPrijs FROM producten", null);
			return $result;
		}
		public function getCategoryGamesLimit($category) {
			$result = $this->getInstance()->selectQuery("SELECT producten.id, prCategorie, prNaam, prBeschrijving, prKbeschrijving, prImage, prPrijs, naam FROM producten JOIN categorie on producten.prCategorie = categorie.id where naam = ? LIMIT 4", array($category));
			return $result;
		}

		public function getCategoryGames($category) {
			$result = $this->getInstance()->selectQuery("SELECT producten.id, prCategorie, prNaam, prBeschrijving, prKbeschrijving, prImage, prPrijs, naam FROM producten JOIN categorie on producten.prCategorie = categorie.id where naam = ?", array($category));
			return $result;
		}
		public function checkLogin($username, $password)
		{
			$result = $this->getInstance()->selectQuery("SELECT * FROM gebruiker,s where gebruikersnaam = ? and wachtwoord = ?", array($username, $password));
			return $result;
		}
		public function searchResult($name)
		{
				$result = $this->getInstance()->selectQuery("SELECT * FROM producten where prNaam LIKE concat('%',?,'%')", array($name));
				return $result;
		}
		public function checkUsername($username)
		{
			$result = $this->getInstance()->selectQuery("SELECT * FROM gebruikers where gebruikersnaam = ?", array($username));
			return $result;
		}
		public function insertUser($username, $password, $firstname, $lastname, $adress, $city, $zip, $email)
		{

			$result = $this->getInstance()->executeQuery("INSERT INTO  'webshop'.gebruikers (id ,gebruikersnaam ,wachtwoord ,voornaam ,achternaam ,adres ,woonplaats ,postcode ,email ,isAdmin)
			VALUES (NULL ,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  '0');", array($username, $password, $firstname, $lastname, $adress, $city, $zip, $email));
			return $result;
		}
		public function getProductInfo($id)
		{
			$result = $this->getInstance()->selectQuery("SELECT producten.id, prCategorie, prNaam, prBeschrijving, prKbeschrijving, prImage, prPrijs, naam FROM producten JOIN categorie on producten.prCategorie = categorie.id where producten.id = ?", array($id));
			return $result;
		}
		public function getAllCategories()
		{
			$result = $this->getInstance()->selectQuery("SELECT * FROM categorie", null);
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