<?php
// Session 15: Class, Object, Properties, Method Chaining and Inheritance

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
$studentInfo = $studentObj->setName('SAMIUL')->setAddress('UTTARA')->getStudent();

echo '<pre>';
print_r($studentInfo);
