<?php

include_once "model/Request.php";
include_once "model/User.php";

class UserController
{
	public function register($request)
	{
		$params = $request->get_params();
		$user = new User($params["name"],
				 $params["last_name"],
				 $params["email"],
				 $params["birthdate"],
				 $params["phone"],
				 $params["password"]);

		return var_dump($user);
	}
}