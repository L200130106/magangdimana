<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  extends MX_Controller {

	function __construct(){
		parent::__construct();
		setTemplate('template');
		$this->load->model('name_model', 'model');
	}

	public function index(){

	}

	public function create(){
		
	}

	public function store(){
		
	}

	public function edit($id){
		
	}

	public function update($id){
		
	}

	public function delete($id){
		
	}

	private function loadModel($id){
		$model = $this->model->get($id);
		if ($model) {
			return $model;
		}else{
			show_404();
		}
				
	}

}
