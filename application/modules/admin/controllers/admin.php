<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends MX_Controller {

	public function __construct(){
		mustLogin();
		setTemplate('backend');
	}

	public function index(){
		$this->template->load('/admin/index');
	}
}

/* End of file users.php */
/* Location: ./application/modules/users/controllers/users.php */