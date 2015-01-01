<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kategori extends MX_Controller {

	function __construct(){
		parent::__construct();
		mustLogin();
		setTemplate('backend');
		$this->load->model('kategori_model', 'model');
	}

	public function index(){
		$data['kategori'] = $this->model->get_all();
		render('kategori/index', $data);
	}

	public function create(){
		render('kategori/create');
	}

	public function store(){
		$data = array(
            'kategori' => $this->input->post('kategori'),
        );
        $this->model->insert($data);
        redirect('admin/kategori');
	}

	public function edit($id){
		$data['kategori'] = $this->loadModel($id);
        render('kategori/edit', $data);
	}

	public function update($id){
		$data = array(
            'kategori' => $this->input->post('kategori'),
        );
        $this->model->update($id, $data);
        redirect('admin/kategori');
	}

	public function delete($id){
		$this->model->delete($id);
		redirect('admin/kategori');
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
