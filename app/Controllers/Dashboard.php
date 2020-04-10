<?php namespace App\Controllers;

class Dashboard extends BaseController
{
	public function index()
	{
	    $title = [
	        'title' => 'Dashboard' . TITLE
        ];

	    $data = [
	        'active' => DASHBOARD
        ];

		echo view('header', $title);
		echo view('dashboard', $data);
		echo view('navbar');
		echo view('footer');
	}

	//--------------------------------------------------------------------

}
