<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class listedModel extends Model{
        protected $table = 'listed';
        protected $primaryKey = "id_akun";
        protected $allowedFields = ['id_room','id_akun','id_judul','isi'];
        function getroom($id){
            return $this->findAll($id);
        }
    }
?>