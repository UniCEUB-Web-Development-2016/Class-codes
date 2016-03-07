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
}
