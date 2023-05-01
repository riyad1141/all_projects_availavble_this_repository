<?php
class Gradebook{
    protected $courses = array();
    public function addcourse($course){
        $this->courses[] = $course;
    }
    public function getCourses(){
      return  $this->courses;
    }
    public function getavaragegrade(){
        $total = 0;
        $count = 0;
        foreach ($this->courses as $course){
            $total+=$course->getavaragegrade();
            $count++;
        }
        return $count>0 ? $total /$count : 0;
    }
}