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
         
            <div style="margin-left: 200px;"> <a href="preg.html" class="btn btn-warning">Add New</a>
            <a href="occup.php" class="btn btn-warning">ViewServices</a>
            <table class="table table-stripped">
                <tr>
                    <th>Name</th>
                    <th>Service</th>
                    <th>Contact</th>
                    <th>Address</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Action</th>
                  
                </tr>
                <!-- SELECT `pid`, `pname`, `plocation`, `pnumber`, `poccupation`, `pemail`, `ppass` FROM `provider` WHERE 1 -->
            <?php
            
            include "config.php";
            $qry=mysqli_query($con,"SELECT * FROM `booking`");
           while($row=mysqli_fetch_array($qry)){
            ?>
           
         
            <tr>
                <td><?php echo $row['cname'];?></td>
                <td><?php echo $row['sname'];?></td>
                <td><?php echo $row['cnum'];?></td>
                <td><?php echo $row['cadr'];?></td>
                <td><?php echo $row['bdate'];?></td>
                <td><?php echo $row['status'];?></td>
                <!-- <td><?php echo $row['ppass'];?></td> -->
                <td>
                    <!-- <a href="dele"></a>  -->
                    <form action="edtbk.php" method="POST">
                        <input type="hidden" name="id"
                            value="<?php echo $row['bid'];?>">

                        <button type="submit" name="remove" class="btn btn-danger" onclick="return confirm('Are You Sure');">Edit</a>
                    </form>
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