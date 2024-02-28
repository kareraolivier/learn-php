<?php

// Define a class
class User
{
    // Properties (variables)
    public $name;
    public $age;
    public $gender;

    // Constructor method
    public function __construct($name, $age, $gender)
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }

    // Method
    public function greet()
    {
        return "Hello, my name is $this->name!";
    }
}

// Create objects (instances) of the class
$user1 = new User('John', 30, 'male');
$user2 = new User('Jane', 25, 'female');

// Access object properties
echo $user1->name; // Outputs: John
echo $user2->age; // Outputs: 25

// Call object methods
echo $user1->greet(); // Outputs: Hello, my name is John!