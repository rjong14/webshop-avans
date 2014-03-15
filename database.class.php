<?php
class DB
{
	private $conn;
	//aanroepen van de constructor
	public function __construct()
	{
		//variablen uit config file inladen
		include 'config.ini.php';
	
		//nieuwe connectie maken
		$this->conn = new mysqli($host, $login, $pass, $db);
		//checken of er een fout is
		if($this->conn->connect_errno !=0)
		{
			die("kan niet connecten naar de database");
		}
	}
	//aanroepen van de destruct
	public function __destruct()
	{
		//connectie sluiten
		$this->conn->close();
	}
	
	public function prepareStatement($stmt, $params)
	{
		if(count($params) > 0)
		{
			$types = '';
			//voor elke meegegeven parameter
			foreach($params as $param) {
				//kijken van welke type de parameter is.
				if (is_string($param)) {
					$types .= 's';  // strings.
				} else if (is_int($param)) {
					$types .= 'i';  // integer.
				} else if (is_float($param)) {
					$types .= 'd';  // double.
				} else {
					$types .= 'b';  // default: blob en onbekende type.
				}
			}
			//nieuw array aanmaken en vullen met de types.
			$bind_names[] = $types;
			//loopen door de parameters
			for ($i=0; $i<count($params);$i++) {
				
				$bind_name = 'bind' . $i;
				$$bind_name = $params[$i];
				$bind_names[] = &$$bind_name;
			}
			//de parameters binden aan de query
			call_user_func_array(array($stmt,'bind_param'),$bind_names);
		}
	}

	//methode voor het uitvoeren van overige queries.
	public function executeQuery($query, $params)
	{
		mysqli_report(MYSQLI_REPORT_ALL);
		//het preparen van de query voor uitvoeren
		if($stmt = mysqli_prepare($this->conn, $query))
		{
			//het binden van de parameters
			$this->prepareStatement($stmt, $params);
			//uitvoeren van de query
			mysqli_stmt_execute($stmt);
			return true;
		}
		return false;
	}
	
	public function selectQuery($query, $params)
	{
		//het preparen van de query voor uitvoeren
		if($stmt = mysqli_prepare($this->conn, $query))
		{
			//het binden van de parameters
			$this->prepareStatement($stmt, $params);
			//uitvoeren van de query
			mysqli_stmt_execute($stmt);
			//ophalen van de gegevens van de uitgevoerde query
			$result = $this->fetch($stmt);
			//controleren of die gevult is
			$stmt->close();
			//controleren of die gevult is
			if(empty($result))
			{
				$return = false;
			}
			else
			{
				$return=$result;
			}
			//terug geven van het resultaat
			return $return;
		}
		else
		{
			$return = false;
			return $return;
  		}
	}
 
  	public function fetch($result){
  			
  			//nieuwe array's aanmaken
  			$array = array();
  			//opslaan van de gegevens.
  			//$result->store_result();
  			//nieuwe array's aanmaken
  			$variables = array();
  			$data = array();
  			//de metadata van het resultaat opslaan
  			$meta = $result->result_metadata();
  			//door de metadata loopen
  			while($field = $meta->fetch_field())
  			{
  				//alle veldnamen ophalen
  				$variables[] = &$data[$field->name];
  			}
  			//methode oproepen voor het binden van de veldnamen aan de het resultaat van de query
  			//zodat de juiste value bij de juiste key komt te staan
  			call_user_func_array(array($result, 'bind_result'), $variables);
  			$i=0;
  			//door het resultaat heen loopen
  			while($result->fetch()){
  				$array[$i] = array();
  				//het stoppen van de juiste variables in de array
  				foreach($data as $k=>$v)
  				{
  					$array[$i][$k] = $v;
  				}
  				$i++;
  			}
  		//data teruggeven
  		return $array;
  	}
}