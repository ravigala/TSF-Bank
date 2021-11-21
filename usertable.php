
<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Customers - The Sparks Foundation Bank</title>
    <link rel="stylesheet" href="CSS/table.css">
    <link rel="stylesheet" href="css/header-footer.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <style type="button">
       button:focus {
    outline: none !important;
    }
    </style> 
   
</head>
<body>
 <?php
     include 'DBCONFIG/config.php';
     $sql = "SELECT * FROM sparksusers";
     $result = mysqli_query($conn,$sql);
 ?>
<?php
   include 'navbar.php';
 ?>
 
    <div align="center" style="background-image: url('bg-4.png'); height: 100%; background-position: center;
    background-repeat: no-repeat; background-size: cover; margin:auto; ">

    <!-- CUSTOMER DETAILS -->
    <h2 class="text-center pt-4" style="font-weight:bold; color: white;">CUSTOMER DETAILS</h2>  
    <table class="content-table" style="margin-bottom:auto;">
        <thead>
          <tr>
            <th scope="col" class="text-center py-2">ACCOUNT.NO</th>
            <th scope="col" class="text-center py-2">NAME</th>
            <th scope="col" class="text-center py-2">EMAIL</th>
            <th scope="col" class="text-center py-2">MOBILE NO.</th>
            <th scope="col" class="text-center py-2">BALANCE</th>
            <th scope="col" class="text-center py-2">OPERATION</th>
          </tr>
        </thead>
        <tbody>
        <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td class="text-center py-2"><?php echo $rows['id'] ?></td>
                        <td class="text-center py-2"><?php echo $rows['name']?></td>
                        <td class="text-center py-2"><?php echo $rows['email']?></td>
                        <td class="text-center py-2"><?php echo $rows['phone']?></td>
                        <td class="text-center py-2">₹<?php echo $rows['balance']?></td>
                        <div class="message-wrapper">
                           <div class="container">
                           <td class="text-center"><a href="transact.php?id= <?php echo $rows['id'] ;?>"> <span class="btn message" ><b>TRANSFER</b></span></a></td>
                           </div>
                       </div>
                       
                   </tr>
                <?php
                    }
                ?>
        </tbody>
      
    </div>
    </table>

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
