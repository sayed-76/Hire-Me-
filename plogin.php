

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
    <h2 style="text-align:center;font-size:50px;">Provider Sign In</h2><br>
    <div class="row"style="margin-left:450px;">
    
    <form action="" method="POST">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" class="form-control" required><br>


      <label for="name">Password:</label>
      <input type="password" id="password" name="password" class="form-control" required><br>

      <button type="submit" class="btn btn-info" name="login">Sign In</button>
      <a href="preg.html">New you can Rgister</a>
    
      <!-- <a href="occup.html">Sign In</a> -->
    </form>
    <?php
    include "config.php";

    if(isset($_POST['login']))
    {
        $name=$_POST['name'];
        $pass=$_POST['password'];

        $qry=mysqli_query($con,"select * from provider where pname='$name' and ppass='$pass'");
        $row=mysqli_fetch_array($qry);
        if($row>1)
        {
            header('location:pdash.html');
        }
        else{
            echo("sorry");
        }
    }
    
    ?>
    </div>
  </div>

  <script src="script.js"></script>
</body>
</html>