<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class akunModel extends Model{
    protected $table = 'akun';
    protected $allowedFields = ['id_akun','email'];
    public function getAkun($id){
        return $this->select('email')->getWhere(["id_akun"=>$id])->getRowArray();
    }
}