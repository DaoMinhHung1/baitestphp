<?php
echo "Section 3: Object-Oriented Programming";
class Person
{
    public $name;
    public $age;

    // Constructor để khởi tạo đối tượng Người với tuổi
    public function __construct($age, $name)
    {
        $this->name = $name;
        $this->age = $age;
    }


    public function getName()
    {
        return $this->name;
    }

    // Phương thức để đặt tuổi
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getAge()
    {
        return $this->age;
    }

    // Phương thức để đặt tuổi
    public function setAge($age)
    {
        $this->age = $age;
    }


    public function showcase($name, $age)
    {
        echo "Xin chào, tôi là " . $name . " và tôi " . $age . " tuổi.";
    }
}
