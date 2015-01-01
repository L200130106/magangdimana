<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


if ( ! function_exists('logged_in')){
	function logged_in(){
		$CI =& get_instance();
		$flag = $CI->session->userdata('logged_in');
		if ($flag) {
			return true;
		}else{
			return false;
		}
	}
}

if ( ! function_exists('mustLogin')){
	function mustLogin(){
		$CI =& get_instance();
		$flag = $CI->session->userdata('logged_in');
		if (!$flag) {
			redirect('auth');
		}
	}
}
