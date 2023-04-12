<?php

class UniversityStudent{
    // 1 - Properties
    private $id;
    public $name;
    protected $isGraduated = true;

    // 2 - Methods

    public function __construct($id, $name, $isGraduated)
    {
        $this->id = $id;
        $this->name = $name;
        $this->isGraduated = $isGraduated;
    }

    // public function __construct()
    // {
    //     $this->id = 123;
    //     $this->name = 'Ali';
    //     $this->isGraduated = false;
    // }

    public function hello()
    {
      return 'Hello';
    }

    public function setID($id)
    {
        $this->id = $id;
    }
    public function getID()
    {
        return $this->id;
    }

}

$s1 = new UniversityStudent(55, 'OOOOOOOOO', false);
$s2 = new UniversityStudent(88, 'EEEEEE', false);
echo $s1->name;
echo $s2->getID();

// print_r($s1);
// $s1->setID(123);
// $s1->name = 'Ali';
// print_r($s1);
// echo $s1->hello();
// echo $s1->getID();
// $s1->setID(5487);
// echo $s1->getID();
