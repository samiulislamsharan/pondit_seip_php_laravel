<?php
// class, object, property, method
// Creating Class
class Calculator
{
    // Properties or Member Variables
    public $number1 = 0;
    public $number2 = 0;

    // Setters
    public function setNumber1($number){
        $this->number1 = $number;
    }
    public function setNumber2($number2){
        $this->number2 = $number2;
    }

    // Getters
    public function getNumber1(){
        return $this->number1;
    }
    public function getNumber2(){
        return $this->number2;
    }

    // Methods or Member Functions
    public function sum()
    {
        return ('Sum is = ' . $this->number1 + $this->number2);
    }
    public function sub()
    {
        return ('Sub is = ' . $this->number1 - $this->number2);
    }
    public function mul()
    {
        return ('Mul is = ' . $this->number1 * $this->number2);
    }
    public function div()
    {
        return ('Div is = ' . $this->number1 / $this->number2);
    }
    public function result()
    {
        echo $this->sum() . '</br>';
        echo $this->sub() . '</br>';
    }
}

// Creating an Object
$obj = new Calculator;
// $obj->number1 = 10; // '->' is object access operator
// $obj->number2 = 5; 

// Using setter function to set variable to the object properties
$obj->setNumber1(10);
$obj->setNumber2(5);

echo '<h1>Using Class and Objects in PHP</h1>';

echo $obj->getNumber1() . '</br>';
echo $obj->getNumber2() . '</br>';
echo $obj->result();
// echo $obj->sum() . '</br>';
// echo $obj->sub() . '</br>';
// echo $obj->mul() . '</br>';
// echo $obj->div() . '</br>';
// echo $obj->number1;

// var_dump($obj);