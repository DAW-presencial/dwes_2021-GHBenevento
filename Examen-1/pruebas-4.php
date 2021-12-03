<?php

class MyParent{
    public $name;
    protected $age;
    private $salary;

    public function __construct()
    {

    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age): void
    {
        $this->age = $age;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary): void
    {
        $this->salary = $salary;
    }


}

class MySon extends MyParent{

}

$obj = new MySon();

echo $obj->name;
// echo $obj->age; error because protected
// echo $obj->salary; error because private

echo $obj->getAge();
echo $obj->getSalary();
