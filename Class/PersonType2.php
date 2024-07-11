<?php

require_once 'Abstract/Person.php';
class PersonType2 extends Person {
    public function work() {
        return "{$this->name} работает в качестве {$this->profession}.";
    }

    public function dream() {
        return "{$this->name} мечтает о {$this->dreams}.";
    }

    public function doHobby() {
        return "{$this->name} в свободное время занимается {$this->hobbies}.";
    }
}