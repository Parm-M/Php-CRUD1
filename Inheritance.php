<?php

// with keywords of extends

class employee {
    public $name;
    public $age;
    public $salary;

    // Construct function to initialize the value
    function __construct($n, $a, $s){
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }
    // Method
    function info(){
        echo "<h4>Employee Profile</h4>";
        echo "Employee Name : " . $this->name . "<br>";
        echo "Employee Age : " . $this->age . "<br>";
        echo "Employee Salary : " . $this->salary . "<br>";
    }
}

// Object
$e1 = new employee("John", 25, 50000);
// calling
$e1->info();

// Manager Class
class manager{
    function __construct($n, $a, $s){
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }
}