<?php
include ('dbconn.php');

if(isset($_POST['submit']))
{
    $name=mysqli_real_escape_string($connection , $_POST['name']);
    $contact=mysqli_real_escape_string($connection , $_POST['contact']);
    $accnum=mysqli_real_escape_string($connection , $_POST['accnum']);
    $username=mysqli_real_escape_string($connection , $_POST['username']);
    $password=mysqli_real_escape_string($connection , $_POST['password']);
    
    
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
    $query=mysqli_query($connection , $sql);
    if($query){
        echo "<script>window.location.href="login.php";</script>";
    }else{
        echo "<script>alert('Something Is Going Wrong');</script>";
    }
    }
}

?>
