<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template {
	var $template_data = array();
	var $template = 'frontend';
	
	function __construct(){
		// $this->getDataFooter();
	}

	function set($name, $value){
		$this->template_data[$name] = $value;
	}

	function setTemplate($template){
		$this->template = $template;
	}

	function load($view = '' , $view_data = array(), $return = FALSE){               
		$this->CI =& get_instance();
		$this->set('contents', $this->CI->load->view($view, $view_data, TRUE));			
		return $this->CI->load->view($this->template, $this->template_data, $return);
	}


	// private function getDataFooter(){
	// 	$CI =& get_instance();
	// 	$setting = $CI->db->get('setting')->result();
	// 	$this->template_data['setting'] = $setting;
	// }
}

/* End of file Template.php */
/* Location: ./system/application/libraries/Template.php */