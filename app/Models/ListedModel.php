<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class listedModel extends Model{
        protected $table = 'listed';
        protected $primaryKey = "id_akun";
        protected $allowedFields = ['id_room','id_akun','id_judul','judul','isi'];
        function getroom($id){
            return $this->findAll($id);
        }
        function insertList($list){
            return $this->db->table("listed")->insert($list);
        }
        function getCategory($idjudul){
            return $this->getWhere(["id_judul"=>$idjudul])->getRowArray();
        }
        function deleteList($id){
            return $this->db->table($this->table)->delete(array("id_judul"=>$id));
        }
    }
?>