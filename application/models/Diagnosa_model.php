<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diagnosa_model extends CI_Model {

	private $table = 'diagnosa';
	
	public function get_data($id = NULL)
	{
		if ($id) {
			return $this->db->get_where($this->table, ['id' => $id])->row();
		} else {
			return $this->db->get($this->table, ['id' => $id])->result();
		}
	}	

}

/* End of file Diagnosa_model.php */
/* Location: ./application/models/Diagnosa_model.php */