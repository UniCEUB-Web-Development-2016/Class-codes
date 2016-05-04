<?php


class DatabaseConnector
{
	private $ip;
	private $db_name;
	private $type;
	private $port;
	private $user;
	private $password;

	public function __construct($ip, $db_name, $type,$port, $user, $password)
	{
		$this->ip = $ip;
		$this->db_name = $db_name;
		$this->type = $type;
        $this->port = $port;
        $this->user = $user;
        $this->password = $password;
	}

	public function getConnection()
	{
		$stringPDO = $this->type.":host=".$this->ip.";dbname=".$this->db_name;
		
		try{
			$connection = new PDO($stringPDO,
				$this->user, 
				$this->password);

		 }catch(PDOException $e)
		 {
		 	var_dump($e);
		 }

		return $connection;
	} 

	
}