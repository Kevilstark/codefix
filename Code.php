<?php 

// This is an important class

class Employee
{
    // This is a property
    private $name; 
    private $age;
    private $salary;
 
    public function setName(string $name)
    {
        $this->name = $name;
        return $this;
    }
 
    public function getName(): string
    {
        return $this->name;
    }

    public function setAge(int $age)
    {
        $this->age = $age;
        return $this;
    }

    public function getAge(): int
    {
        return $this->age;
    }

}
 
// Instantiate an object from the class Employee
$employee =(new Employee())
->setName('John Doe')
->setAge(20);

echo 'Employee name: '.$employee->getName().
    ', Age: '.$employee->getAge();

// EOF