<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kategori extends MX_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('kategori_model', 'model');
	}

	public function index(){
		$kategori = $this->model->get_all();
		echo json_encode($kategori);
	}

	public function get($id){
		$kategori = $this->model->get($id);
		echo json_encode($kategori);
	}

	public function getPerusahaan($id_kategori){
		$perusahaan = $this->model->getPerusahaan($id_kategori);
		echo json_encode($perusahaan);
	}

	

}
