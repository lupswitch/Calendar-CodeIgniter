<?php

class Calendar_model extends CI_Model{

	public function get_birthdays(){

		$query = $this->db->query("SELECT * FROM birthdays ORDER BY year" );

		return $query->result();
	}

	public function edit_birthdays(){

		$query = $this->db->query("UPDATE birthdays SET person = :name, day = :day, month = :month, year = :year WHERE id = :id");

		return $query->result();
	}

	public function delete_birthdays($id){

		$query = $this->db->query("DELETE FROM birthdays WHERE id = :id");

		return $query->result();

	}

}

