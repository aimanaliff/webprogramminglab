<?php

class Person
{
    public $firstName;
    public $lastName;

    function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function printName($num)
    {
        for ($count = 0; $count < $num; $count++) {
            echo  $this->firstName . $this->lastName . "<br>";
        }
    }
}

$person1 = new Person("John", "Smith");
$person1->printName(10);
