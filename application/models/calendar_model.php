<?php

class Calendar_model extends CI_Model{

	//------------------------------------------------------------------------------------------------------
	//Show Functie
	public function get_birthdays(){

		$query = $this->db->query("SELECT * FROM birthdays ORDER BY year" );

		return $query->result();
	}

	//------------------------------------------------------------------------------------------------------
	//Edit Functie

	public function edit_birthdays(){

		$query = $this->db->query("UPDATE birthdays SET person = :name, day = :day, month = :month, year = :year WHERE id = :id");

		return $query->result();
	}

	//------------------------------------------------------------------------------------------------------
	//Delete Functie

	public function delete_birthdays($id){

		$query = $this->db->query("DELETE FROM birthdays WHERE `id`");

		return $query->result();

				// $this->db->where('id', $id);
   				// $this->db->delete('testimonials'); 

	}

}

