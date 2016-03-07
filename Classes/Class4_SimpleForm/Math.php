<?php

class Math
{
	private $pi = 3.141592;	

	public function calculateCircleArea($radius)
	{
		return $this->pi * $radius * $radius;
	}

	public function getHipotenusa($catetoAdj, $catetoOp)
	{
		return sqrt(($catetoAdj * $catetoAdj) + ($catetoOp * $catetoOp));	
	}

	//All students should implement a user graphic interface
        //for getHipotenusa function
        //the interface must be implemented in HTML
        //and the code must be commited on Git
}
