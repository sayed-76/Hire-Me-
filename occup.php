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
         
            <div style="margin-left: 200px;">
            <?php
            
            include "config.php";
            $qry=mysqli_query($con,"SELECT * FROM `service`");
           while($row=mysqli_fetch_array($qry)){
            ?>
            <a href="plumber.html"  style="text-align:center;margin:10px;font-size:35px;" class="btn btn-primary"><?php echo $row['sname'];?></a>

            <?php } ?>
            <!-- <a href="electrician.html"  style="text-align:center;margin:10px;font-size:35px;" class="btn btn-primary">Electrician</a>
            <a href="creg.html"  style="text-align:center;margin:15px;font-size:35px;" class="btn btn-primary">Carpenter</a>
            <a href="creg.html"  style="text-align:center;margin:15px;font-size:35px;" class="btn btn-primary">Home Appliances Repair</a>
            <a href="creg.html"  style="text-align:center;margin:15px;font-size:35px;" class="btn btn-primary">Laundry</a>
            <a href="preg.html"  style="text-align:center;margin:15px;font-size:35px;" class="btn btn-primary">Painter</a>
            <a href="creg.html"  style="text-align:center;margin:15px;font-size:35px;" class="btn btn-primary">AC Technician</a>
            <a href="creg.html"  style="text-align:center;margin:15px;font-size:35px;" class="btn btn-primary">Mechanic</a><a href="creg.html"  style="text-align:center;margin:15px;font-size:35px;" class="btn btn-primary">Customer</a>
            <a href="preg.html"  style="text-align:center;margin:15px;font-size:35px;" class="btn btn-primary">Cook</a>
            <a href="creg.html"  style="text-align:center;margin:15px;font-size:35px;" class="btn btn-primary">Maid</a>
            <a href="creg.html"  style="text-align:center;margin:15px;font-size:35px;" class="btn btn-primary">Baby Sitter</a> -->
            
        </div>
        </div>
    </div>

</body>
</html>