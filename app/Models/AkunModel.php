<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class akunModel extends Model{
    protected $table = 'akun';
    protected $allowedFields = ['id_akun','email','password'];
}