<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends MX_Controller {

	public function index(){
		$this->load->view('/auth/index');
	}

    public function login() {
        if ($this->input->post()) {
            $data['username'] = $this->input->post('username');
            $data['password'] = $this->input->post('password');

            $flag = $this->ceklogin($data);
            if ($flag) {
                $data = array(
                    'logged_in' => TRUE
                );
                $this->session->set_userdata($data);
                redirect('admin/admin/');
            } else {
                redirect('auth/auth/');
            }
        } else {
            redirect('auth/auth/');
        }
    }

    private function ceklogin($data) {
        $username = 'admin';
        $password = 'password';

        if (($data['username'] != $username) || ($data['password'] != $password)) {
            return false;
        }if (($data['username'] == $username) && ($data['password'] == $password)) {
            return true;
        } else {
            return false;
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('auth/auth/');
    }
}

/* End of file users.php */
/* Location: ./application/modules/users/controllers/users.php */