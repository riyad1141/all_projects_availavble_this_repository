<?php
//class Cars{
//    public $name;
//    public $colour;
//    public function __construct($name,$colour){
//        $this->name = $name;
//        $this->colour = $colour;
//    }
//    public function set_name($name){
//        $this->name = $name;
//    }
//    public function get_name(){
//        return $this->name;
//    }
//    public function set_colour($colour){
//        $this->colour = $colour;
//    }
//    public function get_colour(){
//        return $this->colour;
//    }
//
//}
//
//class Toyota extends Cars{
//    public $secret_engine;
//    public function engine_name($engine){
//        $this->secret_engine = $engine;
//    }
//    public function full_specification($name ,$colour){
//        echo "This car name is $name and this car colour is $colour and car engine number is $this->secret_engine";
//    }
//}
//$my_cars = new Toyota("Rolls Royals","Blue");
////$my_cars->set_name("BMW");
////$my_cars->set_colour("Black");
//
//$my_cars->engine_name("$#^&*(1235894");
//
//$my_cars->full_specification($my_cars->get_name(),$my_cars->get_colour());

//
//class Animal{
//    protected $name;
//    protected $species;
//    public function __construct($name,$species){
//        $this->name = $name;
//        $this->species = $species;
//    }
//    public function get_name(){
//        return $this->name;
//    }
//    public function get_species(){
//        return $this->species;
//    }
//}
//class Sub_animal extends Animal{
//    protected $bread;
//    public function __construct($name, $bread)
//    {
//        parent::__construct($name, 'Royal Bengal Tiger');
//        $this->bread = $bread;
//    }
//    public function get_bread(){
//        return $this->bread;
//    }
//}
////$Animal = new Animal("Rolls Royals","Lion king");
//$sub_animal = new Sub_animal("Doggy and cat","Golden White");
//
////echo $Animal->get_name();
//echo PHP_EOL;
//echo $sub_animal->get_name();
//echo PHP_EOL;
//echo $sub_animal->get_species();
//echo PHP_EOL;
//echo $sub_animal->get_bread();
//echo PHP_EOL;
////echo $Animal->get_species();

class Employee{
    protected $name;
    protected $salary;
    public function __construct($name,$salary){
        $this->name = $name;
        $this->salary = $salary;
    }
    function get_name(){
        return $this->name;
    }
    function get_salary(){
        return $this->salary;
    }
}
class sub_employee extends Employee{
    protected $subject;
    public function __construct($name, $salary,$subject)
    {
        parent::__construct($name, $salary);
        $this->subject = $subject;
    }
    public function get_subject(){
        return $this->subject;
    }
}
$employee = new Employee("Hider",80000);
$sub_employee = new sub_employee("Faisal",15000000,"Science");


echo "his name is ". $employee->get_name()." and his salary is ".$employee->get_salary();
//echo $employee->get_name();
//echo PHP_EOL;
//echo $employee->get_salary();
echo PHP_EOL;


//echo $sub_employee->get_name();
//echo PHP_EOL;
//echo $sub_employee->get_salary();
//echo PHP_EOL;
//echo $sub_employee->get_subject();

echo "his name is ". $sub_employee->get_name()." and his salary is ".$sub_employee->get_salary()." his subject is ".$sub_employee->get_subject();