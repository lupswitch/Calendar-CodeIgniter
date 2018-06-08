<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calendar extends CI_Controller {



	public function show(){

		$this->load->model('calendar_model');

		$data['birthdays'] = $this->calendar_model->get_birthdays();

	
		$this->load->view('calendar/index', $data);

	}

	public function edit_birthdays(){

		$this->load->model('calendar_model');

		$data['birthdays'] = $this->calendar_model->edit_birthdays();

		$this->load->view('calendar/update', $data);

	}

		


	public function delete_birthdays($id){

		$this->load->model('calendar_model');

		$data['birthdays'] = $this->calendar_model->delete_birthdays($id);

		$this->load->view('calendar/index', $data, $id);


	}

}


?>