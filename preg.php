<?php
include "config.php";

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    
    $location=$_POST['location'];
    
    $number=$_POST['number'];
    $occupation=$_POST['occupation'];
    
    $email=$_POST['email'];

    $pass=$_POST['password'];

    $qry=mysqli_query($con,"INSERT INTO `provider`(`pname`, `plocation`, `pnumber`, `poccupation`, `pemail`, `ppass`) VALUES ('".$name."','".$location."','".$number."','".$occupation."','".$email."','".$pass."')") or(die(mysqli_error($con)));
 if($qry)
 {
    header('location:pdet.php');
 }
 

}

?>