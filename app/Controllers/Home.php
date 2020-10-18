<?php 
namespace App\Controllers;

use App\Models\HomeModel;
use App\Models\AkunModel;
use App\Models\RoomModel;
use App\Models\ListedModel;

class Home extends BaseController
{
	public function index()
	{
		echo View('login');
	}
	public function room(){
		$session = session();
		$id = $session->get('id_akun');
		$model = new roomModel();
		$datas = [
			"room"=>$model->getidakun($id),
		];
		echo View('index',$datas);
	}
	public function listed(){
		$session = session();
		$id = $session->get('id_akun');
		$listed = new listedModel();
		$a = $listed->getroom($id);
		// $data = [
		// 	'id_judul'=>$a['id_judul'],
		// 	'isi'=>$a['isi']
		// ];
		// return json_encode($data);
	}
	public function insert(){
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
                return redirect()->to('/Home/room');
            }else{
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/');
            }
        }else{
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('/');
        }
	}

	//--------------------------------------------------------------------

}
