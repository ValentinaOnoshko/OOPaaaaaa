<?php

require_once 'Interface/PersonActions.php';
abstract class Person implements PersonActions {
    protected $name;
    protected $age;
    protected $profession;
    protected $dreams;
    protected $hobbies;
    public function __construct($name, $age, $profession, $dreams, $hobbies) {
        $this->setName($name);
        $this->setAge($age);
        $this->setProfession($profession);
        $this->setDreams($dreams);
        $this->setHobbies($hobbies);
    }
    public function getName() {
        return $this->name;
    }
    public function getAge() {
        return $this->age;
    }
    public function getProfession() {
        return $this->profession;
    }
    public function getDreams() {
        return $this->dreams;
    }
    public function getHobbies() {
        return $this->hobbies;
    }
    public function setName($name) {
        $this->name = $name;
    }
    public function setAge($age) {
        $this->age = $age;
    }
    public function setProfession($profession) {
        $this->profession = $profession;
    }
    public function setDreams($dreams) {
        $this->dreams = $dreams;
    }
    public function setHobbies($hobbies) {
        $this->hobbies = $hobbies;
    }
    public function displayInfo() {
        return "{$this->name}, {$this->age} лет, профессия: {$this->profession}. Мечтает о {$this->dreams}, увлечения: {$this->hobbies}.";
    }
    abstract public function work();
    abstract public function dream();
    abstract public function doHobby();
}
