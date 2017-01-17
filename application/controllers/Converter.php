<?php

/**
* 
*/

defined('BASEPATH') OR exit('No direct script access allowed');

class Converter extends CI_Controller
{

	function index()
	{
		$this->form_validation->set_rules('option', 'Option convert from', 'required');
		$this->form_validation->set_rules('input', 'Text', 'required');

		if ($this->form_validation->run()) {
			$input = $this->Converter_model->getText();
			$result = $this->Converter_model->convert();

			$data = [
				"title"		=> "Converter | Home",
				"content"	=> "content/home",
				"input"		=> $input,
				"result"	=> $result
			];
			$this->load->view('core/wrapper', $data);
		}
		else {
			$data = [
				"title"		=> "Converter | Home",
				"content"	=> "content/home",
				"input"		=> "",
				"result"	=> ""
			];
			$this->load->view('core/wrapper', $data);
		}
	}

	function guide()
	{
		$data = [
			"title"		=> "Converter | Guide",
			"content"	=> "content/guide",
		];
		$this->load->view('core/wrapper', $data);
	}

	function about()
	{
		$data = [
			"title"		=> "Converter | About",
			"content"	=> "content/about",
		];
		$this->load->view('core/wrapper', $data);
	}

}