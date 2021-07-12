<?php
  include('config.php');
  session_start();
  if ($_SESSION['first_name']=="") {
    header("location:../index.php");
  }
  else
  {

  ?>
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

<body style="background-color:;;" class="heavy-rain-gradient" >
 <?php include('navbar.php');?>
<div id="box" class="box" style="; border-radius: 10px;background-color: ;height: 570px">


<script type="text/javascript" src="jquery-3.4.1.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $( "#card" ).hide();

    setTimeout(function(){ 
      $("#card" ).slideDown(); 
      $("#icon" ).hide();
      }, 1000);

                
  });


</script>




<!-- 
<center>
  <blink>
 
  <span class="logo" style="color:#fa8231;">
    <i class="fas bg fa-laptop-code fa-10x" ></i>    
  </span>
 
  <span class="btn-floating btn-lg peach-gradient" style="">
    <a style="height: 100px;" ><i class="fas fa-bolt fa-10x"></i></a>
  </span>  
  </blink>
  <style type="text/css">
    @keyframes blink {
    0% {opacity: 50}
    49%{opacity: 75}
    50% {opacity: 0}
    }

    blink{animation: blink 2s infinite;}
  </style>


</center>
-->


<style type="text/css">
  
  .pt-3-half {
padding-top: 1.4rem;
}
</style>


<!-- Editable table -->
<!--Section0000stimonials-->
<section class="text-center">
    <!--Section heading-->
    <div class="row">
        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4">
            <!--Card-->
            <div class="card testimonial-card">

                <!--Background color-->
                <div class="card-up aqua-gradient">
                </div>

                <!--Avatar-->
                <div class="avatar mx-auto"><img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(20).jpg" class="rounded-circle img-responsive" alt="Example photo">
                </div>

                <div class="card-body">
                    <!--Name-->
                    
                    
                    
              <?php
                  include("config.php");
                  $email= $_SESSION['mail'];
                  $show="SELECT * FROM user where email='$email'";       
                  $result=mysqli_query($con,$show);
                  $count =mysqli_num_rows($result);

                  while($rows=mysqli_fetch_array($result)) 
                  {
                ?>
                  
                 <b class="text-uppercase"><?php echo $rows['first']." ".$rows['last'];?></b>
                  
                   <br>
                 
                  Email:&nbsp;&nbsp;<?php echo $rows['email'];?>
                 
                  <br>  
                  <hr>
                <?php
                 
                  }
                ?>


               
  <label class="text-uppercase text-center"><h6><b>Change Password</b></h6></label>
 
 
       <!-- Default form register -->
<form class="text-center border border-light p-5"  method="post" action="change_pass.php" autocomplete="none" autopost="none" >
<br>
    

    <div class="form-row mb-4" style="margin-top: -40px;">
        <div class="col ">
          <div class="input-group">
              
              <input name="current" type="password"  class="form-control" required="" placeholder="Current Password">
              
          </div>
        </div>
       
    </div>    
    
    <div class="form-row mb-4 text-center">
      
        <div class="col-md-2">
          
           <div class="input-group">
              
              <input name="password" type="password"  class="form-control" required="" placeholder="New Password">
              
            </div>
        </div>
    </div>
       
      <button name="submit" class="btn btn-info my-4 btn-block" type="submit">Change</button>

    <!-- Default form register -->
            
  </div>            

</form>

                </div>
            </div>
            <!--Card-->
        </div>
        <!--Grid column-->
    </div>
</section>
<!--Section: Testimonials-->




 
   
  
</div>
<!-- Editable table -->  



</body>


</html>
 <?php
      
}
?>


