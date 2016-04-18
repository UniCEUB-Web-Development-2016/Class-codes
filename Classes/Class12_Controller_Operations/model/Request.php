<?php

class Request
{
	private $protocol;
	private $method;
	private $resource;
	private $params;
	private $server_address;


	public function __construct($protocol,$method,$resource,$params, $server_addr)
	{
		$this->set_protocol($protocol);
		$this->set_method($method);
		$this->set_resource($resource);
		$this->set_params($params);
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
	
	private function set_resource($resource)
	{
		$this->resource = $resource;
	}
	
	private function set_params($params)
	{
		$this->params = $params;
	}

	private function set_server_addr($server)
	{
		$this->server_address = $server;
	}

	public function get_resource()
	{
		return $this->resource;
	}

	public function get_params()
	{
		return $this->params;
	}

	public function get_method()
	{
		return $this->method;
	}

















	
}