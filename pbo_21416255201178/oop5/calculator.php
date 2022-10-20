<?php
    class Calculator {
        public $bil1;
        public $bil2;

        function __construct($bil1, $bil2) {
            $this->bil1 = $bil1;
            $this->bil2 = $bil2;
        }

        function tambah() {
            return $this->bil1 + $this->bil2;
        }
        function kurang() {
            return $this->bil1 - $this->bil2;
        }
        function kali() {
            return $this->bil1 * $this->bil2;
        }
        function bagi() {
            return $this->bil1 / $this->bil2;
        }
    }

    $calculate1 = new Calculator(10, 2);
    echo $calculate1->tambah();
    echo "<br>";
    echo $calculate1->kurang();
    echo "<br>";
    echo $calculate1->kali();
    echo "<br>";
    echo $calculate1->bagi();
?>