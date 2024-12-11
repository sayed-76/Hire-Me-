<?php
include "config.php";

if(isset($_POST['remove']))
{
    $cid=$_POST['id'];
    $qry=mysqli_query($con,"UPDATE `booking` SET `status`='Confirmed' WHERE bid=".$cid);
    if($qry)
    {
        header('location:bdet.php');
    }
}


?>