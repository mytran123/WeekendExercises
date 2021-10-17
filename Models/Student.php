<?php

class Student
{
    public $name;
    public $math;
    public $physic;
    public $chemistry;
    public $average;

    public function __construct($name,$math,$physic,$chemistry)
    {
        $this->name = $name;
        $this->math = $math;
        $this->physic = $physic;
        $this->chemistry = $chemistry;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getMath()
    {
        return $this->math;
    }

    public function setMath($math)
    {
        $this->math = $math;
    }

    public function getPhysic()
    {
        return $this->physic;
    }

    public function setPhysic($physic)
    {
        $this->physic = $physic;
    }

    public function getChemistry()
    {
        return $this->chemistry;
    }

    public function setChemistry($chemistry)
    {
        $this->chemistry = $chemistry;
    }

    public function getAverage()
    {
        return ($this->math + $this->physic + $this->chemistry) / 3;
    }
}