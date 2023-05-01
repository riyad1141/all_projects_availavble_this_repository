<?php
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
    if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['password']) || empty($_FILES['profile_pic'])){
        die("Please try again all fileds are requireds");
    }
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $profile_pic = $_FILES['profile_pic'];

    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        die("Dear sir your email adress is invalid");
    }
    date_default_timezone_set('Asia/Dhaka');
    $upload_file = 'uploads/';
    $file_name = uniqid().'--'.date("Y-m-d_h-i-sa").'--'.$profile_pic['name'];
    if(!move_uploaded_file($profile_pic['tmp_name'], $upload_file.$file_name)){
        die("error uploading file");
    }
    $data = array($name,$email,$password,$file_name);
    $file = fopen("new.csv","a");
    if(fputcsv($file,$data)=== false){
        die("error upload file sorry");
    }
    fclose($file);
    session_start();
    setcookie('username',$name);
    header( 'Location: sucess.php' );
    exit();
}
?>