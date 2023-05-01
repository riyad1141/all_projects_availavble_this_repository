<?php
class User{
    private $username;
    private $password;
    private $message;
    public function __construct($username,$password,$message){
        $this->username = $username;
        $this->password = $password;
        $this->message = $message;
    }
    public function get_name(){
      return  $this->username;
    }
    public function get_pass(){
        return $this->password;
    }
    public function get_mess(){
        return $this->message;
    }
}
class Admin extends User{
    public static function isAdmin(){
        return true;
    }
}

if($_SERVER['REQUEST_METHOD']=='POST'){
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $message = $_REQUEST['Message'];

$user = new User($username,$password,$message);
$admin = new Admin($username,$password,$message);


echo "<h2> Client information is: <h2/>";
echo "Client username is:".$user->get_name()."<br>";
echo "client password is:".$user->get_pass()."<br>";
echo "Client message is:".$user->get_mess()."<br><br>";

echo "<h2><h2/> client all information is:";
    echo "Client username is:".$admin->get_name()."<br>";
    echo "client password is:".$admin->get_pass()."<br>";
    echo "Client message is:".$admin->get_mess()."<br>";
    echo "hello everyone".Admin::isAdmin();
}