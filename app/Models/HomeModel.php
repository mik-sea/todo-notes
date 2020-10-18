<?php namespace App\Models;

use CodeIgniter\Model;

class HomeModel extends Model
{
    function __construct()
    {
        $this->db = db_connect();
    }
    function daftar($data){
        return $this->db->table('akun')->insert($data);
    }
    function addRoom($room){
        return $this->db->table('room')->insert($room);
    }
}