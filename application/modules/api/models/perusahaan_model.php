<?php 
class Perusahaan_model extends Model {
	public $_table = 'perusahaan';
	public $has_many = array(
		'info' 	=> array('primary_key' => 'id_perusahaan', 'model' => 'info_model'),
    );
}

 ?>