<?php namespace App\Controllers;

use App\Models\ChartModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $chartModel = new ChartModel();

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

        $dates = array();
        foreach ($chartModel->dates() as $row) {
            if (!in_array($row->date, $dates)) {
                array_push($dates, $row->date);
            }
        }

        /*$user = array();
        foreach ($chartModel->userObjects() as $row) {
            array_push()
        }*/

        $data = [
            'currentDay' => strftime('%A, %d.%m.%Y'),
            'lastWeekDay' => strftime('%A, %d.%m.%Y', strtotime('-4 days')),
            'user' => $chartModel->userObjects(),
            'dates' => $dates,
            "testArray" => $chartModel->joinTest()
        ];

        echo view('header', $title);
        echo view('navbar', $navbar);
        echo view('dashboard', $data);
        echo view('footer', $footer);
    }

    //--------------------------------------------------------------------

}
