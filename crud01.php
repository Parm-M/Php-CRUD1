<?php

class calculation{
    public $a, $b, $c;

    function sum(){
        $this->c = $this->a + $this->b;
        return $this->c;
    }
    
    function sub(){
        $this->c = $this->a - $this->b;
        return $this->c;
    }
}

$c1 = new calculation();
$c1->a = 5;
$c1->b = 6;

$c2->a = 10;
$c2->b = 30;

$c2 = new calculation();

$c1->sum();
$c2->sub();

echo "Sum value of C1" . $c1->sum() . "\n";

echo "Subtraction value of c2" . $c2->sub();
