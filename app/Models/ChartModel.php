<?php namespace App\Models;

use CodeIgniter\Model;

class ChartModel extends Model
{
    function userObjects() {
        $db = db_connect();
        $query = $db->query('SELECT * FROM user_flyinc');
        return $query->getResultArray();
    }

    function dates() {
        $db = db_connect();
        $query = $db->query('SELECT * FROM logfile_flyinc WHERE date');
        return $query->getResult();
    }

    function joinTest() {
        $db = db_connect();
        $query = $db->query('SELECT * FROM logfile_flyinc JOIN user_flyinc on logfile_flyinc.user_id = user_flyinc.id');
        return $query->getResultArray();
    }

}