<?php
require_once 'shape.php';

class Rectangle extends Shape{
    private $length;
    private $width;
    public function __construct($name,$length,$width)
    {
        parent::__construct($name);
        $this->length = $length;
        $this->width = $width;
    }
    public function get_area()
    {
        return $this->length * $this->width;
    }
}