<?php
class Student extends Person
{
    public $major;

    // Constructor của lớp Sinh viên
    public function __construct($age, $name, $major)
    {
        parent::__construct($age, $name);
        $this->major = $major;
    }

    // Phương thức để lấy ID sinh viên
    public function getMajor()
    {
        return $this->major;
    }

    // Phương thức để đặt ID sinh viên
    public function setMajor($major)
    {
        $this->major = $major;
    }

    // Phương thức riêng của lớp Sinh viên
    public function showcase1()
    {
        echo "Xin chào, tôi là " . $this->name . " và tôi " . $this->getAge() . " tuổi và tôi học chuyên ngành " . $this->getMajor();
    }
}
