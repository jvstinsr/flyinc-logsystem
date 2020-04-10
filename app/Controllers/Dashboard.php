<?php namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        setlocale(LC_TIME, 'de_DE', 'deu_deu');
        $title = [
            'title' => 'Dashboard' . TITLE
        ];

        $navbar = [
            'active' => DASHBOARD
        ];

        $footer = [
            'date' => date("Y")
        ];

        $data = [
            'day' => strftime('%A, %d.%m.%Y')
        ];

        echo view('header', $title);
        echo view('navbar', $navbar);
        echo view('dashboard', $data);
        echo view('footer', $footer);
    }

    //--------------------------------------------------------------------

}
