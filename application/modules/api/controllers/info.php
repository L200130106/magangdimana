<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Info extends MX_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('info_model', 'info');
		$this->load->model('perusahaan_model', 'perusahaan');
		$this->load->model('kategori_model', 'kategori');
	}

	public function index(){
		$data['info'] = $this->perusahaan->with('info')->get_all();
		render('info/index', $data);
	}

}
