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

<body style="background:linear-gradient(to bottom, #5f27cd 0%, #e84393 180%);" >
<?php include("navbar.php");?>
<br><br> <br><br> 
<div class="card-body" style="margin-left: -20px;">
<a href="select.php" id="btn1" class="btn  btn-block btn-rounded btn-pink text-white text-center" style="height: 100px;" ><br><i class="fas fa-car fa-3x text-white prefix" style="float:left;"></i><h3><b style="font-weight: bolder;">START</b></h3></a>
<br>
<a href="history.php" id="btn2" class="btn  btn-block btn-rounded info-color text-white text-center " style="height: 100px;" ><br><i class="fas fa-list fa-3x text-white prefix" style="float:left;"></i><h3><b style="font-weight: bolder;">HISTORY</b></h3></a>
<br>
<a href="account.php" id="btn3" class="btn  btn-block btn-rounded text-white text-center " style="height: 100px;background-color: #0be881;" ><br><i class="fas fa-user fa-3x text-white prefix" style="float:left;"></i><h3><b style="font-weight: bolder;">ACCOUNT</b></h3></a>
</div>  
 


<script type="text/javascript" src="jquery-3.4.1.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
   
    $( "#btn1" ).hide();
    $( "#btn2" ).hide();
    $( "#btn3" ).hide();
    $( "#nav" ).hide();
    //$( "#img" ).hide();

    setTimeout(function(){ 
      $("#nav" ).show(); 
      $('#nav').addClass('animated zoomIn  faster');
    }, 100);

    setTimeout(function(){ 
      $("#btn1" ).show(); 
      $('#btn1').addClass('animated rotateInDownLeft  faster');
    }, 500);

    setTimeout(function(){ 
      $("#btn2" ).show(); 
      $('#btn2').addClass('animated rotateInDownLeft  faster');
    }, 1000);

    setTimeout(function(){ 
      $("#btn3" ).show(); 
      $('#btn3').addClass('animated rotateInDownLeft  faster');
    }, 1500); 
    
  });
</script>
<br><br><br><br>
</body>
</html>

<?php
}
?>


