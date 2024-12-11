
<!DOCTYPE html>
<html>
<head>
  <title>Sign In</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="bootstrap.min.css">
  <style>
    body{
        background-repeat: no-repeat;
        background-color:#d0e8f3;
    }
</style>
</head>
<body>
  <div class="container">
    <h2 style="text-align:center;font-size:50px;">Services Info</h2><br>
    <div class="row"style="margin-left:450px;">
    
    <form action="" method="POST">

       <label for="provider">Provider Name:</label> 
       <select name="pid" id="">
        <?php
            
        include "config.php";
        $qry=mysqli_query($con,"SELECT * FROM `provider`");
       while($row=mysqli_fetch_array($qry)){
        ?>
        <!-- <input type="hidden" name=""> -->
        <option value="<?php echo $row['pid'];?>"><?php echo $row['pname'];?></option>
        <?php } ?>
       </select><br>
      
      <label for="name">Service Name:</label>
      <input type="text" id="name" name="name" class="form-control" required><br>

     

      <button type="submit" class="btn btn-info" name="submit">Add</button>
    
      <!-- <a href="occup.html">Sign In</a> -->
    </form>
    <?php
include "config.php";

if(isset($_POST['submit']))
{
   $pid=$_POST['pid'];
    $name=$_POST['name'];
    
    

    $qry=mysqli_query($con,"INSERT INTO `service`(`pid`, `sname`) VALUES ('".$pid."','".$name."')") or(die(mysqli_error($con)));
 if($qry)
 {
    header('location:sdet.php');
 }
 

}

?>
    </div>
  </div>
</body>
</html>