<?php

namespace Brady;

use Yong\Test;

class Wang
{
	const  MODEL = Test::class;
	public function get()
	{
		echo self::MODEL;
	}

	public function query()
	{
		return ;
	}
}


$wang = new Wang();
$wang->get();
var_dump($wang->query());

var_dump(empty($name));



