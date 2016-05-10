<?php

include_once "model/Request.php";
include_once "model/User.php";
include_once "database/DatabaseConnector.php";

class UserController
{

	private $requiredParameters = 
	["first_name","last_name","email","birthdate",
	 "phone","password"];

	public function register($request)
	{
		$params = $request->get_params();
		if($this->isValid($params))
		{	
			$user = new User($params["first_name"],
					 $params["last_name"],
					 $params["email"],
					 $params["birthdate"],
					 $params["phone"],
					 $params["password"]);

			$db = new DatabaseConnector("localhost", "facebook", "mysql", "", "root", "");

			$conn = $db->getConnection();
			
			
		    return $conn->query($this->generateInsertQuery($user));	
		}
		
		return "Code: 400, Message: There are null parameters";    
	}

	private function generateInsertQuery($user)
	{
		$query =  "INSERT INTO user (first_name, last_name, email, birthdate, phone, pass) VALUES ('".$user->getName()."','".
					$user->getLastName()."','".
					$user->getEmail()."','".
					$user->getBirthdate()."','".
					$user->getPhone()."','". 
					$user->getPassword()."')";

		return $query;						
	}

	public function search($request)
	{
		$params = $request->get_params();
		$crit = $this->generateCriteria($params);

		$db = new DatabaseConnector("localhost", "facebook", "mysql", "", "root", "");

		$conn = $db->getConnection();

		$result = $conn->query("SELECT first_name, last_name, email, birthdate, phone FROM user WHERE ".$crit);

		//foreach($result as $row) 

		return $result->fetchAll(PDO::FETCH_ASSOC);

	}

	private function generateCriteria($params) 
	{
		$criteria = "";
		foreach($params as $key => $value)
		{
			$criteria = $criteria.$key." LIKE '%".$value."%' OR ";
		}

		return substr($criteria, 0, -4);	
	}

	private function isValid($parameters)
	{
		$keys = array_keys($parameters);
		$d = array_diff($keys, $this->requiredParameters);
		$e = array_diff($this->requiredParameters, $keys);

		if(empty($e) && empty($d))
			return true;
		return false;
	}
}