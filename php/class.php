<?php
    class Human{
        public $name;
        public $age;

        function __construct($name, $age){
            $this->name = $name;
            $this->age = $age;
        }

        function greeting(){
            echo "Hello ".$this->name . $this->age."<br>";
        }

        function eat(){
            echo "Human eat food";
        }
    }

    $human = new Human("Ahmed", 13);
    $human->greeting();
    $human->eat();
    
?>