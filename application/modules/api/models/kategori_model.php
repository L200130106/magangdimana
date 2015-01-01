<?php 
class Kategori_model extends Model {
	public $_table = 'kategori';

	public function getPerusahaan($id_kategori){
		$sql = 'select distinct(p.nama), p.id, p.logo from perusahaan p, info i where p.id = i.id_perusahaan and i.kategori = '.$id_kategori;
		return $this->db->query($sql)->result();
	}
}

 ?>