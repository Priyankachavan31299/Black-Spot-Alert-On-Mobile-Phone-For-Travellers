
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title></title>
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


<div class=" " style="height: 740px; border-radius: 10px;background-color: ;">
  <br>
<br><br><br>
<!--Card-->

  <!-- Material form register -->
  <div class="card card-form mt-2 mb-3" id="boxx">
      <h5 class="card-header info-color white-text text-center py-4">
       <strong>Register</strong>
     </h5>

      <!--Card content-->
      <div class="card-body rounded  darken-4">

          

          <!-- Form -->
          <form class="pb-3 px-2" method="post" action="signup.php">

              <!-- First name -->
              <div class="md-form">
                  <i class="far fa-user prefix " style="color: #b2bec3"></i>
                  <input type="text" name="first" placeholder="Firstname" id="materialRegisterFormFirstName" class="form-control " required="">
                  
              </div>
              <!-- Last name -->
              <div class="md-form">
                  <i class="far fa-hand-point-right prefix " style="color: #b2bec3"></i>
                  <input type="text" name="last" placeholder="Lastname" id="materialRegisterFormLastName" class="form-control " required="">
                  
              </div>

              <!-- E-mail -->
              <div class="md-form mt-0">
                  <i class="far fa-envelope prefix " style="color: #b2bec3"></i>
                  <input type="email" name="email" placeholder="E-mail" id="materialRegisterFormEmail" class="form-control " required="">
                  
              </div>

              <!-- Password -->
              <div class="md-form">
                  <i class="far fa-star prefix " style="color: #b2bec3"></i>
                  <input type="password" name="password" placeholder="Password" id="materialRegisterFormPassword" class="form-control " aria-describedby="materialRegisterFormPasswordHelpBlock" required="" maxlength="8" >
                  
                  <small id="" class="form-text text-white">
                      At least 5 characters and 1 digit
                  </small>
              </div>
              <center><button type="submit" name="submit" class="btn info-color waves-effect text-white" style="border-radius: 30px;">Signup</button></center>

          </form>
          <!-- Form -->
          
      </div>
          
  </div>
          <center>
            <a href="index.php"><button class="btn darken-4 text-white btn-pink" > < Back</button></a>
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


 <script src="sweetalert2.all.min.js"></script>

    

<?php
include("config.php");
//$con=mysqli_connect("localhost","root","","patient") or die(mysql_error()) ;
       
     
    if (isset($_POST['submit'])) {
       
      $first=$_POST["first"];
      $last=$_POST["last"];
      $email=$_POST["email"];
      $password=$_POST["password"];  
    
      $sql=("INSERT INTO user (first,last,email,password) VALUES ('".$first."','".$last."','".$email."','".$password."')");
      
      if (mysqli_query($con,$sql)) {

        ?>
        <script >
         $(document).ready(function() {
                Swal.fire(
                      'Registered!',
                      'Congratulations !',
                      'success'
                    )
                
                    setTimeout(function(){ window.location.href="login.php";}, 2000);
            });
      </script>
        
    <?php
      
    
      }
      else{
      ?>
        <script >
         $(document).ready(function() {
                Swal.fire(
                      'E-mail!',
                      'This E-mail is already in use !',
                      'error'
                    )
                
                    setTimeout(function(){ window.location.href="signup.php";}, 2000);
            });
        </script>
      <?php
      }
    }   
?>


</body>
</html>


