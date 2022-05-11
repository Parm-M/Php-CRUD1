<?php


class fruit{
    // Not with Default value

    // public $name, $age;
    
    // With Default Value
    // public $name = "John Doe";
    // public $age = 0;

// If we are going to use construct then 
    public $name;
    public $age;

    // Above value has Global scope   
    // Constructor Function with local scope inside the construction function
    // But not with default value for that we have to set the default inside the construct
    
    
    // function __construct($name, $age)
    function __construct($name = "Fruit", $age = "0")
    {
        // Assign the value 
        $this->name = $name; // Here $name is from the construct
        $this->age = $age;
    }
    // Benefit of above construct function is that we do not have pass the value again and again 
    function show(){
        echo $this->name . " - " . $this->age;
    }
}

// Initialize

// $p1 = new fruit();
// $p1->name = "Apple"
// $p1->age = 10;

// AFter Construct
$p1 = new fruit();
$p2 = new fruit("Apple", 20);
$p3 = new fruit("Orange", 15);


$p1->show();
$p2->show();
$p3->show();

