<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('render')){
	function render($view, $data = null){
		$CI =& get_instance();
		$CI->load->library('template');
		$CI->template->load($view, $data);
	}
}


if ( ! function_exists('setTemplate')){
	function setTemplate($template){
		$CI =& get_instance();
		$CI->load->library('template');
		$CI->template->setTemplate($template);
	}
}

if ( ! function_exists('setVar')){
	function setVar($name, $value){
		$CI =& get_instance();
		$CI->load->library('template');
		$CI->template->set($name, $value);
	}
}

