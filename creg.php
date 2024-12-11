<?php
include "config.php";

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    
    $location=$_POST['location'];
    
    $number=$_POST['number'];
    
    $email=$_POST['email'];

    $pass=$_POST['password'];

    $qry=mysqli_query($con,"INSERT INTO `cust`(`name`, `location`, `num`, `email`, `password`) VALUES ('".$name."','".$location."','".$number."','".$email."','".$pass."')") or(die(mysqli_error($con)));
 if($qry)
 {
    header('location:cdet.php');
 }
 

}

?>