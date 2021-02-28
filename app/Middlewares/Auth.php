<?php

namespace App\Middlewares;


class Auth
{
	
	public function handle()
	{
		echo 'Auth middleware';
		exit();
	}

}