<?php
include ('dbconn.php');

$connection=db_connect();

if(isset($_POST['submit']))
{
    $username=mysqli_real_escape_string($connection, $_POST['username']);
    $password=mysqli_real_escape_string($connection, $_POST['password']);
    
    $sql="Select username, password from bank_account where username='$username' AND password='$password'";
    $query=mysqli_query($connection, $sql);
    
    $user=mysqli_num_rows($query);
    if($user == 1)
    {
        header("location:index.php");
        $_SESSION['username']=$username;
    }else
    {
        echo "Invalid Username and Password";
    }
        
    
}
?>
