<?php namespace App\Controllers;

class Dashboard extends BaseController
{
	public function index()
	{
	    $title = [
	        'title' => 'Dashboard' . TITLE
        ];

	    $navbar = [
	        'active' => DASHBOARD
        ];

	    $footer = [
	        'date' => date("Y")
        ];

		echo view('header', $title);
		echo view('navbar', $navbar);
        echo view('dashboard');
        echo view('footer', $footer);
	}

	//--------------------------------------------------------------------

}
