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

	public function getName()
	{
		return $this->name;
	}

	public function getLastname()
	{
		return $this->last_name;
	}

	public function getPhone()
	{
		return $this->phone;
	}

	public function getBirthdate()
	{
		return $this->birthdate;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function getPassword()
	{
		return $this->password;
	}

}