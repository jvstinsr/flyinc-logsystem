<?php namespace App\Controllers;

class Dashboard extends BaseController
{
	public function index()
	{
	    $title = [
	        'title' => 'Dashboard' . TITLE
        ];

		echo view('header');
		echo view('navbar');
		echo view('footer');
	}

	//--------------------------------------------------------------------

}
