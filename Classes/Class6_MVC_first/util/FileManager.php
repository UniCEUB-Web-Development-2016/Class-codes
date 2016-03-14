<?php

class FileManager
{
	public function write($fileName, $text)
	{
		$file = fopen($fileName, 'w');
		fwrite($file, $text);
		fclose($file);
	}
}