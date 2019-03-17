<?php

namespace Brady\Wang;

use Brady\Tools\Test;

class TestController
{
	public function __construct()
	{
		new Test();
		new TestController();
	}
}