<?php


class RequestController
{

	public function executeRequest($request)
	{
		$uri = $request->get_uri();
		echo $this->getParameters($uri);
		
	}


	public function getResource($uri)
	{
	     $a = explode('?', $uri);
	     return str_replace("/", "", $a[0]);		
	}

	
	public function getParameters($uri)
	{
	     
			
	}	









}