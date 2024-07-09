<?php
class Person {
    private $name;
    private $age;
    private $gender;

    public function __construct() {
        $this->name = 'Валентина';
        $this->age = 27;
        $this->gender = 'female';
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function getGender() {
        return $this->gender;
    }


    public function introduce() {
        echo "Привет! Меня зовут " . $this->getName() . 
             ", мне " . $this->getAge() . " лет" . 
             ", и я " . ($this->getGender() === 'male' ? 'мужчина' : 'женщина') . ".";
    }
}

$valia = new Person();
$valia->introduce();