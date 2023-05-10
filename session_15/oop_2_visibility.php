<?php
class A
{
    public $p1 = 'Public Property';
    protected $p2 = 'Protected Property';
    private $p3 = 'Private Property';
}

class B extends A
{
}

$classB = new B;

echo $classB->p1;
// echo $classA->p2;
// echo $classA->p3;