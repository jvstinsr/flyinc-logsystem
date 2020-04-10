<?php namespace App\Controllers;

class Dashboard extends BaseController
{
	public function index()
	{
	    $title = [
	        'title' => 'Dashboard' . TITLE
        ];

		echo view('header', $title);
		echo view('navbar');
		echo view('footer');
	}

	//--------------------------------------------------------------------

}
