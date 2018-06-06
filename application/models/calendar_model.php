<?php

class Calendar_model extends CI_Model{

	public function get_birthdays(){

		$query = $this->db->query("SELECT * FROM birthdays");

		return $query->result();
	}
}

