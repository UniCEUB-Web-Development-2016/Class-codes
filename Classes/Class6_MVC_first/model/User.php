<?php

class User
{
	private $name;
	private $lastName;
	private $email;
	private $password;
	private $birthdate;

	public function __construct($name, $lastName, 
		$email, $password, $birthdate)
	{
		$this->name = $name;
		$this->lastName = $lastName;
		$this->email = $email;
		$this->password = $password;
		$this->birthdate = $birthdate;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getLastName()
	{
		return $this->lastName;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function getPass()
	{
		return $this->password;
	}

	public function getBirthdate()
	{
		return $this->birthdate;
	}

	public function toString()
	{
		return $this->name.$this->lastName;
	}
}