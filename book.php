<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Service Booking - ZETAONE</title>
  <link rel="stylesheet" href="book.css">
</head>
<body>
  <header>
    <div class="logo">Hire Me!</div>
    <!-- <nav>
      <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav> -->
  </header>

  <section id="services" class="services">
    <h1>Book a Service</h1>
    <form id="bookingForm" action="" method="POST">
      <label for="service">Select Service:</label>
      <select id="service" name="service" required>
      <option value="" disabled selected>Select a service</option>
      <?php
            
            include "config.php";
            $qry=mysqli_query($con,"SELECT * FROM `service`");
           while($row=mysqli_fetch_array($qry)){
            ?>
        
        <!-- <option value="AC Technician">AC Technician</option>
        <option value="Electrician">Electrician</option>
        <option value="Plumber">Plumber</option>
        <option value="Carpenter">Carpenter</option>
        <option value="Mechanic">Mechanic</option>
        <option value="Pest Control">Pest Control</option>
        <option value="Home Appliance Repair">Home Appliance Repair</option>
        <option value="Building Painting">Building Painting</option>
        <option value="Cleaning Service">Cleaning Service</option> -->
        <option value="<?php echo $row['sname'];?>"><?php echo $row['sname'];?></option>
        <?php } ?>
      </select>

      <label for="name">Your Name:</label>
      <input type="text" id="name" name="name" placeholder="Enter your name" required>

      <label for="contact">Contact Number:</label>
      <input type="tel" id="contact" name="contact" placeholder="Enter your contact number" required>

      <label for="address">Address:</label>
      <textarea id="address" name="address" placeholder="Enter your address" rows="3" required></textarea>

      <button type="submit" name="book">Book Now</button>
    </form>
    <?php
    include "config.php";
    if(isset($_POST['book']))
    {
      $sname=$_POST['service'];
      $name=$_POST['name'];
      $contact=$_POST['contact'];
      $addr=$_POST['address'];

      $qry=mysqli_query($con,"INSERT INTO `booking`(`cname`, `sname`, `cnum`, `cadr`, `bdate`, `status`) VALUES ('".$name."','".$sname."','".$contact."','".$addr."',now(),'Booked')") or die(mysqli_error($con));
      if($qry)
      {
        echo'<script>alert("Your booking Success");</script>';
        header("location=index.php");
      }
    }
    
    ?>
    <div id="confirmationMessage" class="hidden"></div>
  </section>

  <script src="scripts.js"></script>
</body>
</html>
