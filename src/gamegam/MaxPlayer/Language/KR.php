<?php

namespace gamegam\MaxPlayer\Language;

class KR{

	public array $array = [
		"nothing" => "/setmaxplayers [int]",
		"not_number" => "숫자을 입력해주세요!",
		"error" => "입력 값은 1이상 적어주셔야 합니다.",
		"isnumber" => "이미 변경한 값과 최대동접수가 똑같습니다.",
		"change" => "서버최대인원을 {0}명으(로) 변경하였습니다.(서버재부팅시 변경된 값을 확인 할 수 있습니다.)"
	];

	public function getMessahe(string $msg){
		if (isset($this->array[$msg])){
			return $this->array[$msg];
		}else{
			return "Value does not exist({$msg})";
		}
	}
}
