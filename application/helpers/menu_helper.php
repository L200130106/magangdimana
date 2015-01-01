<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('setActive')){
	function setActive($seg1, $seg2){
		$CI =& get_instance();
		$segment1 = $CI->uri->segment(1);
		$segment2 = $CI->uri->segment(2);
		if (!is_array($seg2)) {
			if (($segment1 == $seg1) && ($segment2 == $seg2)) {
				echo "active";
			} 
		} else {
			foreach ($seg2 as $seg) {
				if (($segment1 == $seg1) && ($segment2 == $seg)) {
					echo "active";
				} 
			}
		}
		


	}
}


