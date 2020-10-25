<?php 
namespace App\Controllers;

use App\Models\HomeModel;
use App\Models\AkunModel;
use App\Models\RoomModel;
use App\Models\ListedModel;
use App\Models\JudulModel;

class Home extends BaseController
{
	public function room(){
		$session = session();
		$id = $session->get('id_akun');
		$model = new roomModel();
		$listed = new listedModel();
		$modelJudul = new judulModel();
		$getRoom = $listed->getroom($id);
		$datas = [
			"room"=>$model->getidakun($id),
			"todo"=>$getRoom,
			"judul"=>$modelJudul->getAllJudul(1),
		];
		echo View('index',$datas);
	}
	public function listed(){
		$session = session();
		$id = $session->get('id_akun');
		$model = new roomModel();
		$listed = new listedModel();
		$modelJudul = new judulModel();
		$getRoom = $listed->getroom($id);
		$datas = [
			"room"=>$model->getidakun($id),
			"todo"=>$getRoom,
			"judul"=>$modelJudul->getAllJudul($model->getidakun($id)["id_room"]),
		];
		return $datas;
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
	
	public function insertList(){
		$session = session();
		$id = $session->get('id_akun');
		$model = new HomeModel();
		$listedModel = new ListedModel();
		$judulModel = new JudulModel();
		$judul = $this->request->getVar('judul');
		$isi = $this->request->getVar('pesan');
		$listeddata = [
			"id_room"=> $model->getidakun($id)["id_room"],
			"id_akun"=> getidakun($id)["id_akun"],
			"id_judul"=>"j-3",
			"isi"=>$isi,
		];
		$juduls=[
			'id_room'=> $model->getidakun($id)["id_room"],
			'id_judul'=>$id_judul,
			'judul'=>$judul
		];
		$insertj = $judulModel->insertJudul($juduls);
		$insertl = $listedModel->insertList($listeddata);
		return redirect()->to('/Home/room');
	}

}
