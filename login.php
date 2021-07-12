

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Parking</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body style="background:linear-gradient(to bottom, #5f27cd 0%, #e84393 180%);" class="heavy-rain-gradient">
  

<div class="" style="height: 740px">
<br><br> <br><br>
<div  class="transperent box"  style="background-color:;height:310px;position: absolute;border-radius: 10px;width: 100%">

    <style type="text/css">
        @keyframes {

        0% {opacity: 0,}
        10%{opacity: 50}
        49%{opacity: 75}
        50% {opacity: 0}
        }

        .box{animation: box 2s;}
    </style>

<!--Card-->

  <!-- Material form register -->
  <div class="card card-form mt-2 mb-3" id="boxx">
      <h5 class="card-header info-color white-text text-center py-4">
       <strong>Sign in</strong>
     </h5>
      <!--Card content-->
      <div class="card-body rounded  darken-4">

          

          <!-- Form -->
          <form class="pb-3 px-2" method="post" action="login.php">
              <!-- E-mail -->
              <div class="md-form mt-0">
                  <i class="fa fa-envelope prefix" style="color: #b2bec3"></i>
                  <input name="email" type="email" id="materialRegisterFormEmail" class="form-control " placeholder="Email" required="">
                  
              </div>

              <!-- Password -->
              <div class="md-form">
                  <i class="fa fa-lock prefix " style="color: #b2bec3"></i>
                  <input name="password" type="password" id="materialRegisterFormPassword" class="form-control " aria-describedby="materialRegisterFormPasswordHelpBlock" placeholder="Password" required="">
                  
                  <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-white">
                     
                  </small>
              </div>
              <center><button type="submit" name="submit" class="btn info-color text-white waves-effect" style="border-radius: 30px;">Login</button></center>

          </form>
          <!-- Form -->
      </div>
  </div>
          <center>
            <a href="index.php"><button class="btn btn-pink darken-4 text-white" > < Back</button></a>
          </center>
  <!-- Material form register -->
  </div>
</div>
  <!-- Card -->
<script type="text/javascript" src="jquery-3.4.1.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
   
    $( "#boxx" ).hide();
    //$( "#logo" ).hide();

    setTimeout(function(){ 
      $("#boxx" ).show(); 
      $('#boxx').addClass('animated slideInLeft faster');

      }, 500);
    
  });
</script>  
  
 
</div>


</div>


<?php
//include('config.php');
session_start();
include("config.php");
//$con=mysqli_connect("localhost","root","","patient") or die(mysql_error()) ;
if(isset($_POST['submit'])){
    $email    = $_POST['email'];
    $password = $_POST['password'];
    $check = "SELECT * FROM user WHERE email = '$email' AND password ='$password'";
    $result = mysqli_query($con,$check);
    if(mysqli_num_rows($result)===1){
      $row = mysqli_fetch_assoc($result);
      $_SESSION['first_name'] = $row['first'];
      $_SESSION['mail'] = $email;
      header('location:home.php');
    }
   
    else{
      ?>
      <script src="sweetalert2.all.min.js"></script>
      <script >
         $(document).ready(function() {
                Swal.fire(
                      'Login Failed!',
                      'Wrong Username or Password!',
                      'error'
                    )
                
                    setTimeout(function(){}, 2000);
            });
      </script>
      <?php  
    }
  
  }
?>


</body>
</html>




