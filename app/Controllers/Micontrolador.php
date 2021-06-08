<?php

namespace App\Controllers;

class Micontrolador extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}
}
