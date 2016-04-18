<?php

include_once "model/Request.php";
include_once "control/UserController.php";

class ResourceController
{

	private $controlMap = 
	[
		"cebola" => "CebolaController",
		"user" => "UserController",
		"product" => "ProductController",
	];

	public function createResource($request)
	{
		return (new $this->controlMap[$request->get_resource()]())->register($request);
	}
}