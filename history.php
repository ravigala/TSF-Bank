<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History - The Sparks Foundation Bank</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet"  href="css/table.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/header-footer.css">
</head>
<body>
  
<!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg "style="background-color: black; ">
        <a class="navbar-brand" href="index.php" style="font-weight: bold; ">
          <i class="fas fa-landmark fa-2x mx-3" style="background-color: black; color:white;"></i><b style="color:white; margin-top:10px;">TSF Bank</b>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <i class="fa fa-bars "></i>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar" >
          <ul class="navbar-nav ml-auto text-right">
            <li class="nav-item" >
              <a class="nav-link active-home" href="index.php"><b style="color:white; font-size:20px;">HOME</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="usertable.php"><b style="color:white;font-size:20px;">TRANSFER MONEY</b></a>
            </li>
          </ul>
        </div>
</nav>

<!-- TRANSACTION HISTORY TABLE -->
<div class="transact" id="major"> 
  <div class="main">
  <div align="center" >
    <h2 class="text-center pt-4" style="font-weight:bold; color:white;">TRANSACTION HISTORY</h2>
    <div class="table">
      <table class="content-table"  style="margin-bottom:auto;">
        <thead>
            <tr>
                <th class="text-center">SENDER</th>
                <th class="text-center">RECEIVER</th>
                <th class="text-center">BALANCE</th>
                <th class="text-center">DATE & TIME</th>
            </tr>
        </thead>
        <tbody>
         <?php

            include 'DBCONFIG/config.php';

            $sql ="select * from sparkstransact";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
         ?>

            <tr>
              <td class="text-center py-2"><?php echo $rows['sender']; ?></td>
              <td class="text-center py-2"><?php echo $rows['receiver']; ?></td>
              <td class="text-center py-2">₹<?php echo $rows['balance']; ?> </td>
              <td class="text-center py-2"><?php echo $rows['datetime']; ?> </td>  
        <?php
            }

        ?>
        </tbody>
    
        </div>
        </div>
        </div>
        </table>
        </div>
          
 <!-- Footer -->
 <footer id="foot">
        <div class="footer">
            <div class="container">
                 <!-- Grid row -->
                 <div class="row">
                    <!-- Grid column1 -->
                   <div class="col-md-4 col-sm-6 col-xs-12 segment-one">
                       <h3>TSF Bank</h3>
                       <p>TSF is a leading private sector bank in India, offers Netbanking services & Personal banking services.</p> 
                                    
                   </div>
                    <!-- Grid column1 -->

                     <!-- Grid column2 -->
                     <div class="col-md-4 col-sm-6 col-xs-12 segment-two ">
                        <!-- Links -->
                       <h2>Useful  Links</h2>
                       <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#foot">About us</a></li>
                        <li><a href="#contact">Contact Us</a></li>
                        </ul>
                                    
                   </div>
                    <!-- Grid column2 -->

                     <!-- Grid column3 -->
                     <div class="col-md-4 col-sm-6 col-xs-12 segment-three ">
                        <h2>Follow Us</h2>
                        <!-- Links -->
                        <p>Please Follow us on our Social Media Profile to be updated.</p>
                        <a href="https://facebook.com" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i> </a>
                        <a href="https://instagram.com" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="https://linkedin.com" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </div>
                    <!-- Grid column3 -->

                </div>
                <!-- Grid row -->
                </div>
        </div>
         <!-- Copyright -->
         <p class="footer-bottom-text">All Right reserved by &copy;Ravi Gala.2021</p>
         <!-- Copyright -->
    </footer>
    <!-- End Footer -->
          
</body>
</html>
