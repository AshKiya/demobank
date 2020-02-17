<?php
include ('dbconn.php');

if(isset($_POST['submit']))
{
//     $name=mysqli_real_escape_string($connection , $_POST['name']);
//     $contact=mysqli_real_escape_string($connection , $_POST['contact']);
//     $accnum=mysqli_real_escape_string($connection , $_POST['accnum']);
//     $username=mysqli_real_escape_string($connection , $_POST['username']);
//     $password=mysqli_real_escape_string($connection , $_POST['password']);
    
    $name= $_POST['name'];
    $contact= $_POST['contact'];
    $accnum=$_POST['accnum'];
    $username= $_POST['username'];
    $password= $_POST['password'];
    
    $sql="INSERT INTO `bank_account` (`id`, `name`, `contact`, `accnum`, `username`, `password`, `date`) VALUES (NULL, '$name', '$contact', '$accnum', '$username', '$password', now());";
    $query=mysqli_query($sql);
    if($query){
        header("location:home.php");
    }else{
        echo "Something Went Wrong";
    }
    
}

?>
