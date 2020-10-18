<?php namespace App\Models;

use CodeIgniter\Model;

class roomModel extends Model
{
    protected $table = "room";
    protected $primaryKey = "id_akun";
    protected $allowedFields = ['id_akun','id_room'];
    function getidakun($id){
        return $this->find($id);
    }
}