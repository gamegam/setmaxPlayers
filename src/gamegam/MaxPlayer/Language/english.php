<?php

namespace gamegam\MaxPlayer\Language;

class english{

	public array $array = [
		"nothing" => "/setmaxplayers [int]",
		"not_number" => "You must enter a number.",
		"error" => "Please enter from 1",
		"isnumber" => "It already has the same value as the maximum number of people.",
		"change" => "Changed to {0} number of people. (Please reboot the server)"
	];

	public function getMessahe(string $msg){
		if (isset($this->array[$msg])){
			return $this->array[$msg];
		}else{
			return "Value does not exist({$msg})";
		}
	}
}