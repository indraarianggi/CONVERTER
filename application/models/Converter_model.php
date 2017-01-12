<?php

/**
* 
*/

defined('BASEPATH') OR exit('No direct script access allowed');

class Converter_model extends CI_Model
{
	
	function getFrom()
	{
		$from = $this->input->post('option');
		return $from;
	}

	function getText()
	{
		$text = $this->input->post('input');
		return $text;
	}

	function getTo()
	{
		$to = $this->input->post('btn_convert');
		return $to;
	}

	function convert()
	{
		// load converter_helper.php secara manual
		$this->load->helper('converter');

		$from = $this->getFrom();
		$text = $this->Converter_model->getText();
		$convertto = $this->Converter_model->getTo();

		switch ($from) {
			case 'ascii':
				if ($convertto == "desimal") {
					$result = ascii_desimal($text);
				}
				elseif ($convertto == "biner") {
					$result = ascii_biner($text);
				}
				else {
					$result = ascii_hexa($text);
				}
				break;
			case 'desimal' :
				if ($convertto == "ascii") {
					$result = desimal_ascii($text);
				}
				elseif ($convertto == "biner") {
					$result = desimal_biner($text);
				}
				else {
					$result = desimal_hexa($text);
				}
				break;
			case 'biner' :
				if ($convertto == "ascii") {
					$result = biner_ascii($text);
				}
				elseif ($convertto == "desimal") {
					$result = biner_desimal($text);
				}
				else {
					$result = biner_hexa($text);
				}
				break;
			case 'hexadesimal' :
				if ($convertto == "ascii") {
					$result = hexa_ascii($text);
				}
				elseif ($convertto == "desimal") {
					$result = hexa_desimal($text);
				}
				else {
					$result = hexa_biner($text);
				}
				break;
			default:
				$result = "No option from selected";
				break;
		}

		return $result;
	}
}