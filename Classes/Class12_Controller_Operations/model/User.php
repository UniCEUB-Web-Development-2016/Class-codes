<?php

class User
{
	private $name;
	private $last_name;
	private $email;
	private $birthdate;
	private $phone;
	private $password;

	public function __construct($name, $last_name,
	$email, $birthdate, $phone, $password)
	{
		$this->name = $name;
		$this->last_name = $last_name;
		$this->email = $email;
		$this->birthdate = $birthdate;
		$this->phone = $phone;
		$this->password = $password;
	}

}