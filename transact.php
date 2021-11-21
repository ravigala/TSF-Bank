<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
include 'DBCONFIG/config.php';

if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from sparksusers where id=$from";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query); 

    $sql = "SELECT * from sparksusers where id=$to";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);

   if (($amount)<0)
   {
            ?>
            <script>
            setTimeout(
            function popUp(){
            
            swal({title: "Sorry!", 
                text: "Negative Values Cannot Be Transferred!!",
                icon: "error",
                button: "Try again",});
            }
            ,0000
            );
            console.log("negative");
            </script> 
        
        <?php
    }
   
    else if($amount > $sql1['balance']) 
    {
        ?>
        <script>
         setTimeout(
        function popUp(){
     
        swal({title: "Sorry!", 
             text: "Insufficient Balance!!",
             icon: "info",
             button: "Try again",});
        },0000
       );
        console.log("insufficient");
         </script> 
     
       <?php
    }
       
    else if($amount == 0){
 
       ?>
       <script>
       setTimeout(
       function popUp(){
       
       swal({title: "Sorry!", 
            text: "Please Enter Valid Value!!",
            icon: "warning",
            button: "Try again",
            
            },);
            
       },0000
       );
       console.log("error");
        </script> 
    
      <?php
     }

    else {
        
                
                $newbalance = $sql1['balance'] - $amount;
                $sql = "UPDATE sparksusers set balance=$newbalance where id=$from";
                mysqli_query($conn,$sql);
             

                
                $newbalance = $sql2['balance'] + $amount;
                $sql = "UPDATE sparksusers set balance=$newbalance where id=$to";
                mysqli_query($conn,$sql);
                
                $sender = $sql1['name'];
                $receiver = $sql2['name'];
                $sql = "INSERT INTO sparkstransact(`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$amount')";
                $query=mysqli_query($conn,$sql);

                if($query){
                   
                    ?>
                    <script>
                     setTimeout(
                    function popUp(){
            
                    swal({title: "Done!", 
                          text: "Your Transaction Is Successful!!",
                          icon: "success",
                          button: "Ok",});
                    },0000
                    );
                    console.log("done");
                        </script> 
                    
                    <?php
                }

                $newbalance= 0;
                $amount =0;
        }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction - The Sparks Foundation Bank</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="CSS/transact.css">
    <link rel="stylesheet" href="css/header-footer.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
 <?php
   include 'navbar.php';
 ?>
 <div class="main2" style="background-image: url('bg-4.png'); height: 100%; background-position: center;
    background-repeat: no-repeat; background-size: cover; ">
	<div class="container" >
        <?php
                include 'DBCONFIG/config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM  sparksusers where id=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($conn);
                }
                $rows=mysqli_fetch_assoc($result);
            ?>
            <form method="post" name="tcredit" class="tabletext" >

        <h2  class="text-center pt-4" style="font-weight:bold; color:white;">TRANSACTION</h2>
      
     <div class="row">

        
        <div class="col-sm-4">
                <div class="card " style="border-radius:20px;">
                   
                   <div class="card-body">
                  <center> <h3 >SENDER'S DETAILS</h3></center>
                  <br>
                        <label >C.NO : </label>
                        <font> <?php echo $rows['id'] ?> </font>
                        <br>
                        <label >NAME : </label>
                        <font > <?php echo $rows['name'] ?> </font>
                        <br>
                        <label >E-MAIL : </label>
                        <font> <?php echo $rows['email'] ?> </font>
                        <br>
                        <label >PHONE : </label>
                        <font > <?php echo $rows['phone'] ?> </font>
                        <br>
                        <label >BALANCE : </label>
                        <font > ₹<?php echo $rows['balance'] ?> </font>
                        <br>
                   </div>

               </div>
          </div>
          <div class="col-sm-2" style="margin-top: 200px;">
          <br><br><br>
             <center>
                 <button style="border:none;  background-color: #f08080; s" name="submit" type="submit" id="myBtn" onclick="popUp()"><span class="btn message" style="color:black;"><b>TRANSFER</b></span></button>
                  
            </center>
          </div>
        
          <div class="col-sm-4">
                <div class="card " style="border-radius:20px;">
                   
                   <div class="card-body" style="margin-bottom: 13px;">
                  <center> <h3>RECEIVER'S DETAILS</h3></center>
                  <br>
                  <label style="color:black; font-size:25px; font-weight: bold;">RECEPIENT </label>
                  <select name="to" class="form-control" required>
                  <option style="color:black; font-size:15px; font-weight: bold;" value="" disabled selected>Choose</option>
                 
            <?php
                include 'DBCONFIG/config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM sparksusers where id!=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error ".$sql."<br>".mysqli_error($conn);
                }
                while($rows = mysqli_fetch_assoc($result)) {
            ?>
                <option class="table" value="<?php echo $rows['id'];?>" >
                
                    <?php echo $rows['id'] ;?> - 
                    <?php echo $rows['name'] ;?> (Balance:₹
                    <?php echo $rows['balance'] ;?> ) 
               
                </option>
            <?php 
                } 
            ?>
            <div>
        </select>
        <br><br>
        
        <label style="color:black; font-size:25px; font-weight: bold;">AMOUNT</label>
            <input type="number" class="form-control" name="amount" required>   
        </form>
    </form>
</div> 
</div>
</div>
</div>
</div>
</div>
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
