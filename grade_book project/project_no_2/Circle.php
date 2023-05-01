<?php
require_once 'shape.php';

class circle extends Shape{
    private $radious;
    public function __construct($name,$radious)
    {
        parent::__construct($name);
        $this->radious = $radious;
    }
    public function get_area()
    {
        return pi()*$this->radious*$this->radious;
    }
}