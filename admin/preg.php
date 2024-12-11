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
    $target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

    $qry=mysqli_query($con,"INSERT INTO `provider`(`pname`,`Picture`, `plocation`, `pnumber`, `poccupation`, `pemail`, `ppass`) VALUES ('".$name."','".$target_file."','".$location."','".$number."','".$occupation."','".$email."','".$pass."')") or(die(mysqli_error($con)));
 if($qry)
 {
    header('location:pdet.php');
 }
 

}

?>