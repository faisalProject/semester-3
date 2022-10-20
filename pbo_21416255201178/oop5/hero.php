<?php 
    class Hero {
        // property
        public $name;
        public $health;
        public $weapon;
        public $attck;

        function __construct($name, $health, $weapon, $attck) {
            $this->name = $name;
            $this->health = $health;
            $this->weapon = $weapon;
            $this->attck = $attck;
        }

        function displayAttr() {
            echo "Nama   : " .$this->name;
            echo "<br>"; 
            echo "Health : " .$this->health;
            echo "<br>"; 
            echo "Nama : " .$this->weapon;
            echo "<br>"; 
            echo "<br>"; 
        }

        function attcak($name) {
            echo $this->name . " menyerang " ;
        }
    }

    $sniper = new Hero("Sniper", 100, "Scar", 20);
    $layla = new Hero("Layla", 100, "Scar", 20);
    $sniper->displayAttr();
    $sniper->attcak($layla);
?>