<?php

include "RequestController.php";
include "ResourceController.php";

class ControlManager
{
	private $resourceController;
	private $requestController;

	public function __construct()
	{
		$this->resourceController = new ResourceController();

		$this->requestController = new RequestController();
	}

	public function getResource()
	{
		$request = $this->requestController-> createRequest(
     		    $_SERVER["SERVER_PROTOCOL"],
			    $_SERVER["REQUEST_METHOD"],
			    $_SERVER["REQUEST_URI"],
			    $_SERVER["SERVER_ADDR"]);

		return $this->route_method($request);
	}	

	public function route_method($request)
	{
		switch($request->get_method())
		{
			case "GET": 
			       return $this->resourceController->searchResource($request);
			           break;
			
			case "POST": 
			   return $this->resourceController->createResource($request);
			    break;

			case "PUT":
			 			break;

			case "DELETE": 
						break;

			default:

		           
		}	
	}
}