<?php

include_once "model/Request.php";

class RequestController
{

	public function createRequest($protocol, $method, $uri, $server_addr)
	{
		$uri_array = explode("/", $uri);

		return new Request(
			    $protocol,
				$method,
				$uri_array[2],
				$this->getParams($uri_array[3]), 
				$server_addr);
		
	}	


	public function getParams($string_params)
	{
		$a = str_replace ("?" , "" , $string_params);

		$b = explode("&", $a);
		
		$params_map = array();

		foreach ($b as $value) {
			$c = explode("=", $value);

			$params_map[$c[0]] = $c[1];
		}
		return $params_map;	
	}






}