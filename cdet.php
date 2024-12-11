<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hire Me</title>
    <link rel="stylesheet" href="styles.css">
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
        <h1 style="text-align:center;margin:70px;font-size:100px;">Hire Me!</h1><br>
        <div class="buttons">
            <!-- < onclick="">Customer</button>
            <button onclick="">Provider</button> -->
         
            <div style="margin-left: 200px;"> <a href="creg.html" class="btn btn-warning">Add New</a>
            <a href="occup.php" class="btn btn-warning">ViewServices</a>
            <table class="table table-stripped">
                <tr>
                    <th>Name</th>
                    <th>location</th>
                    <th>Number</th>
                    <th>email</th>
                    <th>password</th>
                    <th>Action</th>
                </tr>
            <?php
            
            include "config.php";
            $qry=mysqli_query($con,"SELECT * FROM `cust`");
           while($row=mysqli_fetch_array($qry)){
            ?>
           
         
            <tr>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['location'];?></td>
                <td><?php echo $row['num'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['password'];?></td>
                <td>
                    <!-- <a href="dele"></a>  -->
                    <form action="deletecust.php" method="POST">
                        <input type="hidden" name="id"
                            value="<?php echo $row['cid'];?>">
                        <button type="submit" name="remove" class="btn btn-danger" onclick="return confirm('Are You Sure');">Delete</a>
                    </form>
                </td>
</td>
               

            </tr>
           
            <!-- <a href="plumber.html"  style="text-align:center;margin:10px;font-size:35px;" class="btn btn-primary"><?php echo $row['sname'];?></a> -->

            <?php } ?>
            </table>
          
            
        </div>
        </div>
    </div>

</body>
</html>