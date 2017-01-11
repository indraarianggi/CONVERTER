<?php

/**
* 
*/

defined('BASEPATH') OR exit('No direct script access allowed');

class Converter extends CI_Controller
{

	function index()
	{
		$this->form_validation->set_rules('option', 'Convert From ...', 'required');
		$this->form_validation->set_rules('input', 'Text', 'required');

		if ($this->form_validation->run()) {
			$option = $this->Converter_model->getOption();
			$text = $this->Converter_model->getText();
			$button = $this->Converter_model->getBtn();

			echo $button;

		}
		else {
			$data = [
				"title"		=> "Converter | Home",
				"content"	=> "content/home"
			];
			$this->load->view('core/wrapper', $data);
		}
	}
}