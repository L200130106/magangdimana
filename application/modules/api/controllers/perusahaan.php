<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Perusahaan extends MX_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('perusahaan_model', 'model');
	}

	public function index(){
		$perusahaan = $this->model->with('info')->get_all();
        echo json_encode($perusahaan);
	}

    public function get($id){
        $perusahaan = $this->model->with('info')->get($id);
        echo json_encode($perusahaan);
    }

}
