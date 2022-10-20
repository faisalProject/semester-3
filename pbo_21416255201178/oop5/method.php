<?php
	class Hewan {

		public $energi;

		// function __cunstruct($energi) {
		// 	$this->energi = $energi;
		// }


		function bergerak($energi) {
			echo "Aku dapat bergerak dengan " . $energi;;
		}

		function bernafas() {
			echo "Aku dapat bernafas";
		}

		static function makan() {
			echo "Aku dapat makan";
		}
	}

	$kucing = new Hewan();
	$kucing->energi = 'Karbohidrat';
	$kucing->bergerak($kucing->energi);
?>