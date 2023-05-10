# Session 15: Class, Object, Properties, Method Chaining and Inheritance

```php
// Defining class
class Building
{
    // Properties
    public $color = NULL;

    // Method (by default public)
    public function setWindow($color)
    {
        $this -> color = $color;
    }
}

// Creating object
$obj = new Building;
// $obj -> color = 'Red';
$obj -> setWindow('Red');

```

## Method Chaining

Make modifier methods return the host object, so that multiple modifiers can be invoked in a single expression.

```php
class Student
{
    public $name;
    public $address;

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }
    public function getStudent()
    {
        $studentsInfo = [
            'name' => $this->name,
            'address' => $this->address
        ];
        return $studentsInfo;
    }
}

$studentObj = new Student;

// Method chaining
$studentInfo = $studentObj->setName('SAMIUL')
                          ->setAddress('UTTARA')
                          ->getStudent();

echo '<pre>';
print_r($studentInfo);

```

## Inheritance

PHP only supports **single inheriance**. We use `trait` for code reusability.

- `public` - The property or method can be accessed from everywhere. This is default.
- `protected` - The property or method can be accessed within the class and by classes derived from that class.
- `private` - The property or method can ONLY be accessed within the class.

```php
class Calculator
{
    proteceted function sub ()
    {

    }
}

class scientificCalculator extends Calculator
{
    log()
    {
  
    }
}

$sciCalc = new scientificCalculator;
$sciCalc -> sub(); // Protected elements cannot be accessed outside the class/derived class.
$sciCalc -> log();
```

## Traits

PHP implements a way to reuse code called Traits.

It is not possible to instantiate a Trait on its own. It is an addition to traditional inheritance and enables horizontal composition of behavior; that is, the application of class members without requiring inheritance.

## Exam

* Class
* Object
* Visibility
* Inheritance
* Traits
