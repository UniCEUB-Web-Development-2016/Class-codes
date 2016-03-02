<?php

class Math
{
	private $pi = 3.141592;	

	public function calculateCircleArea($radius)
	{
		return $this->pi * $radius * $radius;
	}
}
