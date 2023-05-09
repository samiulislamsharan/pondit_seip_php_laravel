# Session 14: OOP

- Class -> Template or blueprint of object
- Object -> Instanace of a class

```php
function sum(int $a, $b)
{ // Using type hinting (int $a) to explicitly tell the funcntion what type of parameter it will take.
    return $a + $b;
}

//during function call
sum(10, 5.5);

```

- Function -> Method, Member Functions
- Variable -> Property, Member Variables

## Access Modifier

- `public` - the property or method can be accessed from everywhere. This is default
- `protected` - the property or method can be accessed within the class and by classes derived from that class
- `private` - the property or method can ONLY be accessed within the class

## Naming Conventions

1. CamelCase : Prperty, Function
2. PascalCase : Class Name
3. Snake_case: Property, Function
4. UPPERCASE: Constant Name

## A Calculator

Operations of a caltulator:

1. Addition
2. Subtraction
3. Multiplication
4. Division

```php
// Creating Class
class Calculator
{
    // Properties
    public $n1 = 0;
    public $n2 = 0;

    // Methods
    function sum($n1, $n2)
    {
        return $n1 + $n2;
    }
}

// Creating an Object
$obj = new Calculator;

$obj -> n1 = 5; // '->' is object access operator
obj -> sum(); // Calling the method form the obj of calculator.
```

## Homework

- [ ] **Use HTML forms to get inputs from the user, calculate the values and show output.**

## Intervew Questions
