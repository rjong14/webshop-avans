<?php
	include 'database.class.php';

	// Created a class called "Queries"
	class Queries {

		// Created a function to get the institutions from the database
		public function getMenuItems() {
			$result = $this->getInstance()->selectQuery("SELECT * FROM menu", null);
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