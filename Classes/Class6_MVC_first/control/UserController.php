<?php

include "../model/User.php";
include "../util/FileManager.php";

class UserController
{

	private $fileManager;

	public function __construct()
	{
		$this->fileManager = new FileManager();
	} 

	public function registerUser($name, $lastName, 
		$email, $password, $birthdate)
	{
		$user = new User($name, $lastName, 
		$email, $password, $birthdate);
		$this->fileManager->write("user.txt",$user->toString());
	}
}