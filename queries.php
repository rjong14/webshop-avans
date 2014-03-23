<?php
	include_once 'database.class.php';

	// Created a class called "Queries"
	class Queries {

		public function editUser($id, $nickname, $wachtwoord, $naam, $achternaam, $adres, $woonplaats, $postcode, $email, $isAdmin)
		{

			$result = $this->getInstance()->executeQuery("UPDATE gebruikers SET gebruikersnaam = ?, wachtwoord = ?, voornaam = ?, achternaam = ?,  adres = ?,  woonplaats = ?, postcode = ?, email = ?, isAdmin = ? WHERE id = ?", array($nickname, MD5($wachtwoord), $naam, $achternaam, $adres, $woonplaats, $postcode, $email, $isAdmin, $id));
			return $result;
		}
		public function editCategorie($id, $naam)
		{
			$result = $this->getInstance()->executeQuery("UPDATE categorie SET naam = ? WHERE id = ?", array($naam,$id));
			return $result;
		}
		public function editMenuitem($id, $label, $link)
		{
			$result = $this->getInstance()->executeQuery("UPDATE menu SET label = ?, link = ? WHERE id = ?", array($label, $link,$id));
			return $result;
		}
		public function getMenuItems() {
			$result = $this->getInstance()->selectQuery("SELECT * FROM menu", null);
			return $result;
		}
		public function getMenuItem($id) {
			$result = $this->getInstance()->selectQuery("SELECT * FROM menu where id = ?", array($id));
			print_r($result);
			return $result;
		}
		public function deleteProduct($id)
		{
			$result = $this->getInstance()->executeQuery("DELETE from producten where id = ?", array($id));
			return $result;
		}
		public function deleteItem($id)
		{
			$result = $this->getInstance()->executeQuery("DELETE from menu where id = ?", array($id));
			return $result;
		}

		public function AddItem($label, $link)
		{		
			$result = $this->getInstance()->executeQuery("INSERT INTO menu (label, link) 	values(?,?)", array($label, $link));
			return $result;
		}
		public function addCategorie($naam)
		{		
			$result = $this->getInstance()->executeQuery("INSERT INTO categorie (naam) 	values(?)", array($naam));
			return $result;
		}
		public function addUser($nickname, $wachtwoord, $naam, $achternaam, $adres, $woonplaats, $postcode, $email, $isAdmin)
		{		
			
			$result = $this->getInstance()->executeQuery("INSERT INTO gebruikers (gebruikersnaam, wachtwoord, voornaam, achternaam, adres, woonplaats, postcode, email, isAdmin) 
			values(?,?,?,?,?,?,?,?,?)", array($nickname, md5($wachtwoord), $naam, $achternaam, $adres, $woonplaats, $postcode, $email, $isAdmin));
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
			$result = $this->getInstance()->selectQuery("SELECT * FROM gebruikers where gebruikersnaam = ? and wachtwoord = ?", array($username, md5($password)));
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
		public function getUserInfo($id)
		{
			$result = $this->getInstance()->selectQuery("SELECT * FROM gebruikers where id = " . $id, null);
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