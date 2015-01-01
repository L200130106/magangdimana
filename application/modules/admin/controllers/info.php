<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Info extends MX_Controller {

	function __construct(){
		parent::__construct();
		mustLogin();
		setTemplate('backend');
		$this->load->model('info_model', 'info');
		$this->load->model('perusahaan_model', 'perusahaan');
		$this->load->model('kategori_model', 'kategori');
	}

	public function index(){
		$data['info'] = $this->perusahaan->with('info')->get_all();
		render('info/index', $data);
	}

	public function create(){
		$data['perusahaan'] = $this->perusahaan->get_all();
		$data['kategori'] = $this->kategori->get_all();
		render('info/create', $data);
	}

	public function store(){
		$data = array(
            'id_perusahaan' => $this->input->post('id_perusahaan'),
            'kategori' 		=> $this->input->post('kategori'),
            'posisi' 		=> $this->input->post('posisi'),
            'persyaratan' 	=> $this->input->post('persyaratan'),
            'tgl_upload' 	=> $this->input->post('tgl_upload'),
            'tgl_berkas' 	=> $this->input->post('tgl_berkas'),
            'tgl_mulai' 	=> $this->input->post('tgl_mulai'),
            'tgl_selesai' 	=> $this->input->post('tgl_selesai'),
        );	
		$this->info->insert($data);
        redirect('admin/info');
	}

	public function edit($id){
		$data['perusahaan'] = $this->perusahaan->get_all();
		$data['kategori'] = $this->kategori->get_all();
        $data['info'] = $this->loadModel($id);

        render('info/edit', $data);
	}

	public function update($id){
		$data = array(
            'id_perusahaan' => $this->input->post('id_perusahaan'),
            'kategori' 		=> $this->input->post('kategori'),
            'posisi' 		=> $this->input->post('posisi'),
            'persyaratan' 	=> $this->input->post('persyaratan'),
            'tgl_upload' 	=> $this->input->post('tgl_upload'),
            'tgl_berkas' 	=> $this->input->post('tgl_berkas'),
            'tgl_mulai' 	=> $this->input->post('tgl_mulai'),
            'tgl_selesai' 	=> $this->input->post('tgl_selesai'),
        );	
		$this->info->update($id, $data);
        redirect('admin/info');
	}

	public function delete($id){
		$this->info->delete($id);
		redirect('admin/info');
	}

	private function loadModel($id){
		$model = $this->info->get($id);
		if ($model) {
			return $model;
		}else{
			show_404();
		}
				
	}

	public function FunctionName(){
		$parts = explode('/', $_POST['date']);
		$date  = "$parts[2]-$parts[0]-$parts[1]";
	}

}
