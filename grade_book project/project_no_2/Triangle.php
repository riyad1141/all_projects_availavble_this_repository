<?php
require_once 'shape.php';

class Triangle extends Shape{
    private $height;
    private $base;
    public function __construct($name,$base,$height)
    {
        parent::__construct($name);
        $this->base = $base;
        $this->height = $height;
    }
    public function get_area()
    {
        return 0.5 * $this->base * $this->height;
    }
}