	function cyr2lat($inputStr) {
		$conversionTable = array(
			"А" => "A", "Б" => "B", "В" => "V", "Г" => "G", "Д" => "D", "Ђ" => "Đ", "Е" => "E", "Ж" => "Ž", "З" => "Z", "И" => "I", "Ј" => "J", "К" => "K", "Л" => "L", "Љ" => "LJ", "М" => "M", "Н" => "N", "Њ" => "NJ", "О" => "O", "П" => "P", "Р" => "R", "С" => "S", "Т" => "T", "Ћ" => "Ć", "У" => "U", "Ф" => "F", "Х" => "H", "Ц" => "C", "Ч" => "Č", "Џ" => "DŽ", "Ш" => "Š",
			"а" => "a", "б" => "b", "в" => "v", "г" => "g", "д" => "d", "ђ" => "đ", "е" => "e", "ж" => "ž", "з" => "z", "и" => "i", "ј" => "j", "к" => "k", "л" => "l", "љ" => "lj", "м" => "m", "н" => "n", "њ" => "nj", "о" => "o", "п" => "p", "р" => "r", "с" => "s", "т" => "t", "ћ" => "ć", "у" => "u", "ф" => "f", "х" => "h", "ц" => "c", "ч" => "č", "џ" => "dž", "ш" => "š"
		); 
		$out = strtr ($inputStr, $conversionTable);
		return $out;
	}
	
	function lat2cyr($inputStr){
		$conversionTable = array(
			"A" => "А", "B" => "Б", "V" => "В", "G" => "Г", "D" => "Д", "Đ" => "Ђ", "E" => "Е", "Ž" => "Ж", "Z" => "З", "I" => "И", "J" => "Ј", "K" => "К", "L" => "Л", "LJ" => "Љ", "M" => "М", "N" => "Н", "NJ" => "Њ", "O" => "О", "P" => "П", "R" => "Р", "S" => "С", "T" => "Т", "Ć" => "Ћ", "U" => "У", "F" => "Ф", "H" => "Х", "C" => "Ц", "Č" => "Ч", "DŽ" => "Џ", "Š" => "Ш", 
			"a" => "а", "b" => "б", "v" => "в", "g" => "г", "d" => "д", "đ" => "ђ", "e" => "е", "ž" => "ж", "z" => "з", "i" => "и", "j" => "ј", "k" => "к", "l" => "л", "lj" => "љ", "m" => "м", "n" => "н", "nj" => "њ", "o" => "о", "p" => "п", "r" => "р",  "s" => "с", "t" => "т", "ć" => "ћ", "u" => "у", "f" => "ф", "h" => "х", "c" => "ц", "č" => "ч", "dž" => "џ", "š" => "ш" 
		); 
		$out = strtr ($inputStr, $conversionTable);
		return $out;
	}
