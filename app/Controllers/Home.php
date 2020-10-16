<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('login.html');
	}
	public function room(){
		return view('index');
	}

	//--------------------------------------------------------------------

}
