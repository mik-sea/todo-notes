<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class judulModel extends Model{
    protected $table = 'judul';
    protected $allowedFields = ['id_room','id_judul','judul'];
    function getAllJudul($id_room) {
    	return $this->where('id_room', $id_room)->findAll();
    }
    function insertJudul($judul){
        return $this->db->table($table)->insert($judul);
    }
}