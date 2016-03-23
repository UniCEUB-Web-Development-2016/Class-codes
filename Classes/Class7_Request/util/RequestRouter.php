<?php

include "model/Request.php";
include "control/RequestController.php";

class RequestRouter
{
	
	public function route()
	{
		$r = new Request($_SERVER["SERVER_PROTOCOL"],
			    $_SERVER["REQUEST_METHOD"],
			    $_SERVER["REQUEST_URI"],
			    $_SERVER["SERVER_NAME"],
			    $_SERVER["SERVER_ADDR"]);
		
		(new RequestController)->executeRequest($r);
		

	}
}