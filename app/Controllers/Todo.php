<?php
namespace App\controllers;

use App\Models\HomeModel;
use App\Models\AkunModel;
use App\Models\RoomModel;
use App\Models\ListedModel;
use App\Models\JudulModel;


class Todo extends BaseController
{
    // login view
    public function loginView()
	{
		echo View('login');
    }
    // daftar baru
    public function insertd(){
		$id = date("Ymdhis");
		$room = mt_rand(100, 9999);
		$rooms = [
			'id_akun' => $id,
			'id_room' =>$room
		];
		$data = [
			'id_akun' => $id,
			'nama' => "user".$id,
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
		];
		$model = new HomeModel();
		$cek = $model->daftar($data);
		$room = $model->addRoom($rooms);
		return redirect()->to('/');
    }
    // login
    public function login(){
		$session = session();
        $model = new AkunModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
		$data = $model->where('email', $email)->first();
        if($data){
			$pass = $data['password'];
			// $verify_pass = password_verify($pass, $password);
            if($pass == $password){
                $ses_data = [
                    'id_akun'       => $data['id_akun'],
                    'email'    => $data['email'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/room');
            }else{
                $session->setFlashdata('msg', 'Email / Password Salah');
                return redirect()->to('/');
            }
        }else{
            $session->setFlashdata('msg', 'Email / Password Salah');
            return redirect()->to('/');
        }
    }
    // menampilan halaman proto
    public function index(){
        $sess = session();
        $id_akun = $sess->get('id_akun');
        $list = new ListedModel();
        $datas = ["data"=>$list->getRoom($id_akun)];
        return View("proto",$datas);
    }
    
    // show api to room
    public function show($id){
        $list = new ListedModel();
        $akun = new AkunModel();
        $get = $list->getCategory($id);
        $getakun = $akun->getAkun($get["id_akun"]);
        // if($get){
            $code = 200;
            $respons = [
                "status"=>$code,
                "error"=>false,
                "data"=>$get,
                "email"=>$getakun
            ];
        // }
        return $this->response->setJSON($respons);
    }
    // insert list baru
    public function insert(){
        $session = session();
        $judul = $this->request->getVar('judul');
        $isi = $this->request->getVar('pesan');
        $id = $session->get('id_akun');
        $list = new ListedModel();
        $get = $list->getroom($id);
        $idjudul = "judul-".$judul;
        $postdata = [
			"id_room"=> $get[0]["id_room"],
            "id_akun"=> $id,
            "id_judul"=>$idjudul,
			"judul"=>$judul,
			"isi"=>$isi,
        ];
        $list->insertList($postdata);
        return redirect()->to('/room');
    }
    // tampilan list
    function addList(){
        return view("addlist");
    }
    // delete list
    function deleteList($id){
        $list = new ListedModel();
        $list->deleteList($id);
        return redirect()->to('/room');
    }
}