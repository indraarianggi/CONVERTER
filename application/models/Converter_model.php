<?php

/**
* 
*/

defined('BASEPATH') OR exit('No direct script access allowed');

class Converter_model extends CI_Model
{
	
	function getOption()
	{
		$option = $this->input->post('option');
		return $option;
	}

	function getText()
	{
		$text = $this->input->post('input');
		return $text;
	}

	// uji coba
	function getBtn()
	{
		$button = $this->input->post('btn_convert');
		return $button;
	}
}