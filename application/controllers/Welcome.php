<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('CRUDESQL', 'Usuario_model');
		$this->load->helper('url', 'form');
	}


	public function index()
	{
		$data['juventudes'] = $this->AreasSQL->MostrarDatosUsuario();
		$this->load->view('index', $data);
	}

	function Administracion()
	{
		session_start();
		if (count($_SESSION) > 0) { 
			$data['AreaGTO'] = $this->AreasSQL->getAreas();
			$data['juventudes'] = $this->AreasSQL->AreaJoin();

			$this->load->view('index', $data);
		} else {
			redirect('Welcome/Login');
		}
	}
	function Login()
	{
		$this->load->view('LoginAdmin/SessionLogin');
	}

	function EditarUsuario(){
		session_start();
		if (count($_SESSION) > 0) { 
		$ID = $this->input->get('id');
		$juventudes = $this->CRUDESQL->getDatos($ID);
		$AreaGTO['AreaGTO'] = $this->AreasSQL->getAreas(); 
		$arr = [
			'AreaGTO' => $AreaGTO,
			'juventudes' => $juventudes,
		];

		$this->load->view('header');
		$this->load->view('Forms/EditUser', $arr);
		$this->load->view('footer');
		$this->load->view('footer_js');
	}else{
		$this->load->view('NoAutorizado');
	}
	}
	
}