<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Perusahaan extends MX_Controller {

	function __construct(){
		parent::__construct();
        mustLogin();
		setTemplate('backend');
		$this->load->model('perusahaan_model', 'model');
	}

	public function index(){
		$data['perusahaan'] = $this->model->get_all();
		render('perusahaan/index', $data);
	}

	public function create(){
		render('perusahaan/create');
	}

	public function store(){
		$config['upload_path'] 		= './assets/logo/';
        $config['allowed_types'] 	= 'gif|jpg|png';
        $config['max_size'] 		= '20000';
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('logo')) {
            redirect('admin/perusahaan');
        } else {
            $datafile = $this->upload->data();
            $data = array(
                'nama' 		=> $this->input->post('nama'),
                'alamat' 	=> $this->input->post('alamat'),
                'email' 	=> $this->input->post('email'),
                'telepon' 	=> $this->input->post('telepon'),
                'deskripsi' => $this->input->post('deskripsi'),
                'logo' 		=> $datafile['file_name'],
                'koordinat' => $this->input->post('koordinat'),
            );
            $this->model->insert($data);
            redirect('admin/perusahaan');
        }
	}

	public function edit($id){
        $data['perusahaan'] = $this->loadModel($id);
        render('perusahaan/edit', $data);
	}

	public function update($id){
		$config['upload_path'] = './assets/logo/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '20000';
        
        $this->load->library('upload', $config);

        if ($_FILES['logo']['name'] != '') {
            if (!$this->upload->do_upload('logo')) {
                redirect('admin/perusahaan');
            } else {
                $model = $this->loadModel($id);

                $datafile = $this->upload->data();
                if ($this->deleteGambar($model->logo)) {
                    $data = array(
		                'nama' 		=> $this->input->post('nama'),
		                'alamat' 	=> $this->input->post('alamat'),
		                'email' 	=> $this->input->post('email'),
		                'telepon' 	=> $this->input->post('telepon'),
		                'deskripsi' => $this->input->post('deskripsi'),
		                'logo' 		=> $datafile['file_name'],
		                'koordinat' => $this->input->post('koordinat'),
		            );
                    $this->model->update($id, $data);
                    redirect('admin/perusahaan');
                }
            }
        } else {
            $data = array(
                'nama' 		=> $this->input->post('nama'),
                'alamat' 	=> $this->input->post('alamat'),
                'email' 	=> $this->input->post('email'),
                'telepon' 	=> $this->input->post('telepon'),
                'deskripsi' => $this->input->post('deskripsi'),
                'koordinat' => $this->input->post('koordinat'),
            );
            $this->model->update($id, $data);
            redirect('admin/perusahaan');
        }
	}

	public function detail($id) {
        $data['perusahaan'] = $this->loadModel($id);
        render('perusahaan/detail', $data);
    }

	public function delete($id){
        $model = $this->loadModel($id);
        if ($this->deleteGambar($model->logo)) {
            $this->model->delete($id);
        }
		redirect('admin/perusahaan');
	}

	private function loadModel($id){
		$model = $this->model->get($id);
		if ($model) {
			return $model;
		}else{
			show_404();
		}
				
	}

    private function deleteGambar($name) {
        $realpath = realpath(FCPATH . 'assets/logo/' . $name);
        if (!$realpath) {
            return true;
        }else{
            $flag = unlink($realpath);
            return $flag;
        }
    }


}
