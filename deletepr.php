<?php
include "config.php";

if(isset($_POST['remove']))
{
    $cid=$_POST['id'];
    $qry=mysqli_query($con,"DELETE FROM `provider` WHERE pid=".$cid);
    if($qry)
    {
        header('location:pdet.php');
    }
}


?>