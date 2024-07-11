<?php

require_once 'Class/PersonType1.php';
require_once 'Class/PersonType2.php';

$person1 = new PersonType1("Валентина", 27, "инженер", "путешествиях", "вязание");
$person2 = new PersonType2("Мария", 29, "дизайнер", "создании сада", "рисование");

echo $person1->displayInfo() . "\n";
echo $person2->displayInfo() . "\n";