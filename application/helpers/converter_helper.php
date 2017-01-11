<?php

function ascii_biner($input)
{
	$y= strlen($input);
	$z= str_split($input);
	$result = "";

	for ($a=0; $a<$y; $a++)
	{
		$result .= decbin(ord($z[$a]))." ";
	}

	return $result;
}

function ascii_desimal($input)
{
	$y= strlen($input);
	$z= str_split($input);
	$result = "";

	for ($a=0; $a<$y; $a++)
    {
        $result .= ord($z[$a])." ";
    }

    return $result;
}

function ascii_hexa($input)
{
	$y= strlen($input);
	$z= str_split($input);
	$result = "";

	for ($a=0; $a < $y; $a++)
	{
	    $result .= strtoupper(bin2hex($z[$a]))." ";
	}

	return $result;
}

function biner_ascii($input)
{
	$z= explode(" ",$input);
	$y= count($z);
	$result = "";

	for ($a=0; $a < $y; $a++) {
		$p = str_split($z[$a]);
		$q = count($p);
		$r = "";

		for ($b=0; $b < $q; $b++){
			if ($p[$b] == "0" || $p[$b] == "1") {
				$r = $r . $p[$b];
			}
			else {
				$r = false;
				break;
			}

			if (strlen($z[$a]) > 7){
				$r = false;
			}
		}

		if ($r==false){
			$result .= " ERROR!! ";
		}
		else{
			$result .= chr(bindec($r));
		}
	}

	return $result;
}

function biner_desimal($input)
{
	$z= explode(" ",$input);
	$y= count($z);
	$result = "";

	for ($a=0; $a < $y; $a++) {
		$p = str_split($z[$a]);
		$q = count($p);
		$r = "";

		for ($b=0; $b < $q; $b++) {
			if ($p[$b] == "0" || $p[$b] == "1") {
				$r = $r . $p[$b];
			}
			else {
				$r = false;
				break;
			}
			
			if (strlen($z[$a]) > 7){
				$r = false;
			}
		}
		
		if ($r==false) {
			$result .= " ERROR!! ";
		}
		else {
			$result .= bindec($r)." ";
		}
	}

	return $result;
}

function biner_hexa($input)
{
	$z= explode(" ",$input);
	$y= count($z);
	$result = "";

	for ($a=0; $a < $y; $a++) {
		$p = str_split($z[$a]);
		$q = count($p);
		$r = "";

		for ($b=0; $b < $q; $b++){
			if ($p[$b] == "0" || $p[$b] == "1") {
				$r = $r . $p[$b];
			}
			else {
				$r = false;
				break;
			}

			if (strlen($z[$a]) > 7) {
				$r = false;
			}
		}
		if ($r==false){
			$result .= " ERROR!! ";
		}
		else{
			$result .= bin2hex(chr(bindec($r)))." ";
		}
	}

	return $result;
}

function desimal_ascii($input)
{
	$z= explode(" ",$input);
	$y= count($z);
	$result = "";

	for ($a=0; $a < $y; $a++){
		if ((strlen($z[$a]) <= 3)&& ($z[$a] <= 127) && (is_numeric($z[$a]))){
			$result .= chr($z[$a]);
		}
		else {
			$result .= " ERROR!! ";
		}
	}

	return $result;
}

function desimal_biner($input)
{
	$z= explode(" ",$input);
	$y= count($z);
	$result = "";

	for ($a=0; $a < $y; $a++){
		if ((strlen($z[$a]) <= 3)&& ($z[$a] <= 127) && (is_numeric($z[$a]))){
			$result .= decbin($z[$a])." ";
		}
		else {
			$result .= " ERROR!! ";
		}
	}

	return $result;
}

function desimal_hexa($input)
{
	$z= explode(" ",$input);
	$y= count($z);
	$result = "";

	for ($a=0; $a < $y; $a++){
		if ((strlen($z[$a]) <= 3)&& ($z[$a] <= 127) && (is_numeric($z[$a]))){
			$result .= bin2hex(chr($z[$a]))." ";
		}
		else {
			$result .= " ERROR!! ";
		}
	}

	return $result;
}

function hexa_ascii($input)
{
	$x= strtoupper($input);
	$z= explode(" ",$x);
	$y= count($z);
	$result = "";

	for ($a=0; $a < $y; $a++) {
		if (strlen($z[$a]) == 1) {
			if ($z[$a] == "A" ||$z[$a] == "B" ||$z[$a] == "C" ||$z[$a] == "D" ||$z[$a] == "E" || $z[$a] == "F" || $z[$a] == "0" || $z[$a] == "1"|| $z[$a] == "2"|| $z[$a] == "3"|| $z[$a] == "4"|| $z[$a] == "5"|| $z[$a] == "6"|| $z[$a] == "7"|| $z[$a] == "8"|| $z[$a] == "9") {
				$r = "0" . $z[$a];
			}
			else {
				$r = false; 
			}
		}
		else if(strlen($z[$a]) == 2) {
			$p = str_split($z[$a]);
			$q = count($p);
			$r = "";
			for ($b=0; $b < $q; $b++) {
				if ($p[0] <= 7 && ($p[1] == "A" ||$p[1] == "B" ||$p[1] == "C" ||$p[1] == "D" ||$p[1] == "E" || $p[1] == "F" || $p[1] == "0" || $p[1] == "1"|| $p[1] == "2"|| $p[1] == "3"|| $p[1] == "4"|| $p[1] == "5"|| $p[1] == "6"|| $p[1] == "7"|| $p[1] == "8"|| $p[1] == "9")) {
					$r = $p[0] . $p[1];
				}
				else {
					$r = false;
					break;
				}
			}	
		}
		else {
			$r = false;
		}

		if ($r==false) {
			$result .= " ERROR!! ";
		}
		else {
			$result .= hex2bin($r);
		}
	}

	return $result;
}

function hexa_biner($input)
{
	$x= strtoupper($input);
	$z= explode(" ",$x);
	$y= count($z);
	$result = "";

	for ($a=0; $a < $y; $a++) {
		if (strlen($z[$a]) == 1) {
			if ($z[$a] == "A" ||$z[$a] == "B" ||$z[$a] == "C" ||$z[$a] == "D" ||$z[$a] == "E" || $z[$a] == "F" || $z[$a] == "0" || $z[$a] == "1"|| $z[$a] == "2"|| $z[$a] == "3"|| $z[$a] == "4"|| $z[$a] == "5"|| $z[$a] == "6"|| $z[$a] == "7"|| $z[$a] == "8"|| $z[$a] == "9") {
				$r = "0" . $z[$a];
			}
			else {
				$r = false;
			}
		}
		else if(strlen($z[$a]) == 2) {
			$p = str_split($z[$a]);
			$q = count($p);
			$r = "";
			for ($b=0; $b < $q; $b++) {
				if ($p[0] <= 7 && ($p[1] == "A" ||$p[1] == "B" ||$p[1] == "C" ||$p[1] == "D" ||$p[1] == "E" || $p[1] == "F" || $p[1] == "0" || $p[1] == "1"|| $p[1] == "2"|| $p[1] == "3"|| $p[1] == "4"|| $p[1] == "5"|| $p[1] == "6"|| $p[1] == "7"|| $p[1] == "8"|| $p[1] == "9")) {
					$r = $p[0] . $p[1];
				}
				else {
					$r = false;
					break;
				}
			}
		}
		else {
			$r = false;
		}

		if ($r==false) {
			$result .= " ERROR!! ";
		}
		else {
			$result .= decbin(ord(hex2bin("$r")))." ";
		}
	}

	return $result;
}

function hexa_desimal($input)
{
	$x= strtoupper($input);
	$z= explode(" ",$x);
	$y= count($z);
	$result = "";

	for ($a=0; $a < $y; $a++) {
		if (strlen($z[$a]) == 1) {
			if ($z[$a] == "A" ||$z[$a] == "B" ||$z[$a] == "C" ||$z[$a] == "D" ||$z[$a] == "E" || $z[$a] == "F" || $z[$a] == "0" || $z[$a] == "1"|| $z[$a] == "2"|| $z[$a] == "3"|| $z[$a] == "4"|| $z[$a] == "5"|| $z[$a] == "6"|| $z[$a] == "7"|| $z[$a] == "8"|| $z[$a] == "9") {
				$r = "0" . $z[$a];
			}
			else {
				$r = false;
			}
		}
		else if(strlen($z[$a]) == 2) {
			$p = str_split($z[$a]);
			$q = count($p);
			$r = "";
			for ($b=0; $b < $q; $b++) {
				if ($p[0] <= 7 && ($p[1] == "A" ||$p[1] == "B" ||$p[1] == "C" ||$p[1] == "D" ||$p[1] == "E" || $p[1] == "F" || $p[1] == "0" || $p[1] == "1"|| $p[1] == "2"|| $p[1] == "3"|| $p[1] == "4"|| $p[1] == "5"|| $p[1] == "6"|| $p[1] == "7"|| $p[1] == "8"|| $p[1] == "9")) {
					$r = $p[0] . $p[1];
				}
				else {
					$r = false;
					break;
				}
			}
		}
		else {
			$r = false;
		}
		if ($r==false) {
			$result .= " ERROR!! ";
		}
		else {
			$result .= ord(hex2bin("$r"))." ";
		}
	}

	return $result;
}