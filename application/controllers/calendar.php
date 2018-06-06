<?php


class Calendar extends CI_Controller {



	public function show(){

		$this->load->model('calendar_model');

		$data['birthdays'] = $this->calendar_model->get_birthdays();

	
		$this->load->view('calendar', $data);

		$this->load->helper('url');


		}

	}


?>