<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>TSF Bank</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/header-footer.css">>

</head>
<body >

<header>

  <!-- NAVBAR -->
    <!-- <div class="container-fluid p-0">
      <nav class="navbar navbar-expand-lg" style="background-color: black;">
        <a class="navbar-brand" href="index.php" style="font-weight: bold;" >
          <i class="fas fa-university fa-2x mx-3" style="color:white;"></i>TSFB - The Sparks Foundation Bank</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav ml-auto text-right">
            <li class="nav-item">
              <a class="nav-link active-home" href="index.php" style="font-weight:bold;">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#foot" style="font-weight:bold;">ABOUT US</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#contact" style="font-weight:bold;">CONTACT US</a>
            </li>
          </ul>
        </div>
      </nav>
    </div> -->

    <!-- ======= Header ======= -->
    <!-- Header -->
    <div class="header">
      <!-- Logo -->
      <nav id="logo"> <a class="navbar-brand" href="#"> <i class="fas fa-landmark" ></i> &nbsp; TSF Bank</a> </nav>
      <!-- <nav id="logo"><a class="navbar-brand" href="#"><img src="images/logo.jpeg"> TSF Bank</a></nav> -->
      
      <input type="checkbox" id="chk">
      <label for="chk" class="show-btn">
          <i class="fa fa-bars" ></i>
      </label>
      <ul class="menu">
          <!-- Links -->

         <li><a href="index.php">Home</a></li>
         <li><a href="#foot">About us</a></li>
         <li><a href="#contact">Contact Us</a></li>
         
         
         
         <label for="chk" class="hide-btn">
             <i class="fa fa-times" ></i>
         </label>
     </ul>
     
  </div>
    <!-- <br><br><br><br><br><br> -->
    <!-- End Header -->
    
    <!-- HOME PAGE-->
    <div class="main" >
    <div class="container text-center" >
      <div class="row">
        <div class="col-md-7 col-sm-12  text-white">
          <h1>SPARKS FOUNDATION BANK</h1>
          <p style ="font-size:20px">
          Your Faithful And Friendly Financial Partner
          </p>
          <a href="#service"><button class="btn btn-light px-5 py-2 primary-btn">LET'S GET STARTED</button></a>
        </div>
      <div class="col-md-5 col-sm-12 h-25">
        <img class="responsive" src="images/bank.png" alt="SFB" style="opacity:0.7;"/>
    </div>
    </div>
</div>
</div>
</header>

<!-- SERVICES -->
<section class="service" id="service"> 
  <div class="container">
    <br>
    <p class="subtitle" style ="font-size:20px" >Customer and Transaction History</p>
      <div class="row offset-md-0">
        <div class="col-md-4" style ="height:60vh">
          <a href="history.php" style="text-decoration:none; color:black;">
            <div class="service-box">
              <i class="fa fa-history fa-5x"></i>
              <h2><b style="color:black;">TRANSACTION HISTORY</b></h2>
              <p>Contains the records of every transactions including sender's and receiver's name and 
                the amount transfered.</p>
              <i class="fa fa-arrow-right"></i>
            </div>
          </a>
        </div>
        <div class="col-md-4">
          <a href="usertable.php" style="text-decoration:none; color:black;">
            <div class="service-box">
              <i class="fa fa-users fa-5x" aria-hidden="true"></i>
              <h2><b style="color:black;">VIEW CUSTOMERS</b></h2>
              <p>Contains the information of customers that have an account. Also allows customer to transfer money.</p>
              <i class="fa fa-arrow-right"></i>
            </div>
          </a>
        </div> 
  </div>
</div>
</section>

 <!--CONTACT US-->
 <section class="contactus" id="contact">
        <div class="container headings text-center">
            <h1 class="center" style="font-weight: bold;text-align: center; color:linen;">Contact Us</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-10 offset-lg-2 offet-md-2-col col-1">
                    <form>
                        <div class="form-group">  
                          <input type="text" class="form-control" placeholder="Your name" id="username" required autocomplete="off">
                        </div>
                            <div class="form-group">
                              <input type="email" class="form-control" placeholder="Your email" id="email" required autocomplete="off">
                            </div>
                                <div class="form-group">
                                  <input type="number" class="form-control" placeholder="Your mobile number" id="mobile" required autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label for="comment" style="color:linen; font-weight: bold;">Message:</label>
                                    <textarea class="form-control" rows="4" id="comment" placeholder="Any message you want to give"></textarea>
                                  </div>
                                  <div class="formbutton" style="display: flex;justify-content: center;">
                        <button type="submit" >Submit</button></div>
                      </form>
                </div>
            </div>
        </div>
       </section>    

<!-- ABOUT US
<footer id="foot">
  <div class="container-fluid p-0">
    <div class="row text-left">
      <div class="col-md-5 col-sm-5">
        <p class="pt-4 text-muted">Copyright ©2021 All rights reserved | This website is made by
          <span>GINI CHACKO - THE SPARKS FOUNDATION</span>
        </p>
      </div>
      <div class="col-md-7 col-sm-12" style="text-align: right;">
        <h4 class="text-light">Follow Us</h4>
        <p class="text-muted">Let us be social</p>
        <div class="column text-light">
          <a href="https://github.com/GiniChacko"><i class="fab fa-github"></i>
          <a href="#"><i class="fab fa-instagram" style="margin-left:15px;"></i></a>
          <a href="https://www.linkedin.com/in/gini-chacko-a105b11a3/" style="margin-left:15px;"><i class="fab fa-linkedin"></i></a>
        </div>
      </div>
    </div>
  </div>
 </footer> -->

 <!-- ======= Footer ======= -->
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
                        <li><a href="About.php">About Us</a></li>
                        <li><a href="contact us.php">Contact Us</a></li>
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