<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_laporan extends CI_Model
{

	public function get_data()
	{
		return $this->db->get('Table', limit, offset);
	}
}
