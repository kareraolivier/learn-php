<?php
class User
{
    public $name;
    public $age;
    public $gender;

    public function __construct($name, $age, $gender)
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }

    // Method
    public function greet()
    {
        return "Hello, my name is $this->name! \n";
    }

    public function __toString()
    {
        return ["Name" => $this->name, "Age" => $this->age, "Gender" => $this->gender];
    }
}
// Create objects (instances) of the class
$user1 = new User('John', 30, 'male');
$user2 = new User('Jane', 25, 'female');

// Access object properties
echo $user1->name, "\n"; // Outputs: John
echo $user2->age, "\n"; // Outputs: 25

// Call object methods
echo $user1->greet(); // Outputs: Hello, my name is John!

$user1 = new User('karera', 12, 'male');

print_r(json_encode($user1));



// Inhertance in classes 
class Person extends User
{
    public $hobbies;
    public function __construct($name, $age, $gender, $hobbies)
    {
        parent::__construct($name, $age, $gender);
        $this->hobbies = $hobbies;
    }

    public function __toString()
    {
        return ["Name" => $this->name, "Age" => $this->age, "Gender" => $this->gender, "hobbies" => $this->hobbies];
    }
}


$person1 = new Person('karera', 12, 'male', 'movies');
print_r(json_encode($person1));
