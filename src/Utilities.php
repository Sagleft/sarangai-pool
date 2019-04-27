<?php
	namespace Sarangai;
	
	class Utilities {
		function filter($string, $useDB = false) {
			$string = strip_tags($string);
			$string = stripslashes($string);
			$string = htmlspecialchars($string);
			$string = trim($string);
			if($useDB) {
				//TODO
				//real escape
			} else {
				$string = mysql_escape_string($string);
			}
			return $string;
		}
	}
	