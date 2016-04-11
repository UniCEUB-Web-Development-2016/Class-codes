<?php

include "control/RequestController.php";

class RequestRouter
{
	
	public function route()
	{
		
     (new RequestController)->createRequest(
     		    $_SERVER["SERVER_PROTOCOL"],
			    $_SERVER["REQUEST_METHOD"],
			    $_SERVER["REQUEST_URI"],
			    $_SERVER["SERVER_ADDR"]);

		

	}
}