
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>blackspot</title>
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

<body class="card-body  rounded-bottom" style="background:linear-gradient(to bottom, #5f27cd 0%, #e84393 180%);" >
<br><br>  
<div >

  <!--Navbar-->
  
   <center>
     <img id="img" class="z-depth-5" src="logo.png" style="width:210px;height: 210px;border-radius: 120px;border:4px solid white;">
   </center>
</div>  
<br><br><br><br>
<a href="login.php" id="btn1" class="btn  btn-block btn-rounded btn-pink text-white text-center p-3"><i class="fas fa-user fa-3x text-white prefix" style="float:;"></i><h3><b style="font-weight: bolder;">Login</b></h3></a>

<a href="signup.php" id="btn2" class="btn  btn-block btn-rounded info-color text-white text-center p-3"><i class="fas fa-edit fa-3x text-white prefix" style="float:;"></i><h3><b style="font-weight: bolder;">Signup</b></h3></a>
 
 


<script type="text/javascript" src="jquery-3.4.1.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
   
    $( "#btn1" ).hide();
    $( "#btn2" ).hide();
    $( "#img" ).hide();

    setTimeout(function(){ 
      $("#img" ).show(); 
      $('#img').addClass('animated flipInX ');
     $("#btn1" ).show(); 
      $('#btn1').addClass('animated slideInDown ');
      $("#btn2" ).show(); 
      $('#btn2').addClass('animated slideInUp ');
     

      }, 500);
    
  });
</script>
<br>
</body>
</html>


