<?php
abstract class Shape{
    protected $name;
    public function __construct($name){
        $this->name = $name;
    }
    public function get_name(){
        return $this->name;
    }
    abstract public function get_area();
}