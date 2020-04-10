<?php namespace App\Controllers;

class Dashboard extends BaseController
{
	public function index()
	{
		echo view('header');
		echo view('navbar');
		echo view('footer');
	}

	//--------------------------------------------------------------------

}
