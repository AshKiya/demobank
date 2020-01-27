<?php
include("../include/db_conf.php");
include("../include/db_functions.php");
$conn=db_connect();


if(isset($_POST['submit']))
{
    $name=mysqli_real_escape_string($conn, $_POST['name']);
    $contact=mysqli_real_escape_string($conn, $_POST['contact']);
    $accnum=mysqli_real_escape_string($conn, $_POST['accnum']);
    $username=mysqli_real_escape_string($conn, $_POST['username']);
    $password=mysqli_real_escape_string($conn, $_POST['password']);
    
    
    if($name==""){
        echo "<script>alert(' Enter Your Name ');</script>";
    }else if($contact==""){
        echo "<script>alert(' Enter Your Mobile Number ');</script>";
    }else if($accnum==""){
        echo "<script>alert(' Enter Your Account Number ');</script>";
    }else if($username==""){
        echo "<script>alert(' Enter Your Email ID ');</script>";
    }else if($password==""){
        echo "<script>alert(' Enter Password ');</script>";
    }else{
    
    $sql="INSERT INTO `bank_account` (`id`, `name`, `contact`, `accnum`, `username`, `password`, `date`) VALUES (NULL, '$name', '$contact', '$accnum', '$username', '$password', now());";
    $query=mysqli_query($conn, $sql);
    if($query){
        echo "<script>window.location.href="login.php";</script>";
    }else{
        echo "<script>alert('Something Is Going Wrong');</script>";
    }
    }
}

?>