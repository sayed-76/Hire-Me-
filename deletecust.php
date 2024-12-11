<?php
include "config.php";

if(isset($_POST['remove']))
{
    $cid=$_POST['id'];
    $qry=mysqli_query($con,"DELETE FROM `cust` WHERE cid=".$cid);
    if($qry)
    {
        header('location:cdet.php');
    }
}


?>