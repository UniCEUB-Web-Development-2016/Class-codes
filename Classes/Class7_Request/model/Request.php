<?php

class Request
{
	private $protocol;
	private $method;
	private $uri;
	private $server_name;
	private $server_address;


	public function __construct($protocol,$method,$uri,$server_name, $server_addr)
	{
		$this->set_protocol($protocol);
		$this->set_method($method);
		$this->set_uri($uri);
		$this->set_server_name($server_name);
		$this->set_server_addr($server_addr);
	}
	
	
	private function set_protocol($protocol)
	{
		$this->protocol = $protocol;
	}
	
	private function set_method($method)
	{
		$this->method = $method;
	}
	
	private function set_uri($uri)
	{
		$this->uri = $uri;
	}
	
	private function set_server_name($server)
	{
		$this->server_name = $server;
	}

	private function set_server_addr($server)
	{
		$this->server_address = $server;
	}

	public function get_uri()
	{
		return $this->uri;
	}

















	
}