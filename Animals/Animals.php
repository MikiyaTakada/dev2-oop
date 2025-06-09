<?php
    class Animal{
        protected $name;
        protected $species;
        protected $breed; 
        public function __construct($name, $species ,$breed){
            $this->name = $name;
            $this->species = $species;
            $this->breed = $breed;
        }

        public function getName(){
            echo "<h1 class='text-danger'>{$this->name}</h1><br><br>";
        }

        public function introduce(){
            echo "<p>Hello there! My name is {$this->name} I am a {$this->species}, and my breed is {$this->breed}</p><br>";
        }

    }

class Dog extends Animal{
    public function __construct($name, $species, $breed){
        parent::__construct($name, $species, $breed);
    }
    public function speak(){
        echo "<h1 class='text-danger'> {$this->name} says:  WanWan </h1>";
    }
}

class Cat extends Animal{
    public function __construct($name, $species, $breed){
        parent::__construct($name, $species, $breed);
    }
    public function speak(){
        echo "<h1 class='text-danger'> {$this->name} says: NyaNya </h1>";
    }
}

class Bird extends Animal{
    public function __construct($name, $species, $breed){
        parent::__construct($name, $species, $breed);
    }
    public function speak(){
        echo "<h1 class='text-danger'> {$this->name} says: TyunTyun </h1>";
    }
}


?>