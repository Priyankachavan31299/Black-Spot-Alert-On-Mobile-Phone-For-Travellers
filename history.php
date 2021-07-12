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
  <title>View</title>
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

<script type="text/javascript" src="jquery-3.4.1.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
   
    $( "#table" ).hide();
    //$( "#logo" ).hide();

    setTimeout(function(){ 
      $("#table" ).show(); 
      $('#table').addClass('animated slideUp ');

      }, 500);
    
  });
</script>  

<body style="background-color:" class="heavy-rain-gradient">
<?php include('navbar.php');?>

<div class="lighten-4" style=" border-radius: 10px;background-color: grey;">




<!-- Editable table -->
<div class="card" style="">
  <h4 class="card-header text-center font-weight-bold text-uppercase py-4 pink" style="color: white;">History</h4>
  <div class="card-body grey lighten-3">
    <div id="table" class="" style="height:400px;overflow:auto;">
     
      
     <div class="container">
      <style type="text/css">
       
      table{
        border-radius: 10px;
      }  
      tbody {
          display:block;
          height:320px;
          overflow:auto;
      }
      thead, tbody tr {
          display:table;
          width:100%;
          table-layout:fixed;
      }
      thead {
          
      }

      </style>
              <?php
                  include("config.php");
                  $email=$_SESSION['mail'];
                  //$conn=mysqli_connect("localhost","root","","parking");
                  $show="SELECT * FROM user_history where email='$email'";       
                  $result=mysqli_query($con,$show);
                  $count =mysqli_num_rows($result);

                  while($rows=mysqli_fetch_array($result)) 
                  {
                ?>
        <table class="table text-center table-rounded table-hover table-bordred" style="border:1px solid #45aaf2 ;border-radius: 10px;width: 100%;border-radius: 10px;">
            <thead style="background-color: #45aaf2;color: white;">
                <tr>
                    
                    <th> Travelling Report  </th>
                   
                </tr>
                
            </thead>
            <tbody style="background-color: white;">
                <tr class="text-center">
                  <td rowspan="2"><b> Date <br>Time</b></th>
                  <td><?php echo $rows['udate'];?></td>
                  
                </tr>
                <tr class="text-center">
                  <td rowspan="2"><b>Source </b></th>
                  <td>SSBT COET , Jalgaon</td>
                  
                </tr>
                <tr class="text-center">
                  <td rowspan="2"><b>Destination </b></th>
                  <td><?php echo $rows['dest'];?></td>
                  
                </tr>
             

            </tbody>
        </table>
        <?php
                 
          }
        ?>
        <hr>
        <br><br>
      </div>    
      

    </div><br>
   <br><br>
  </div>
</div>
<!-- Editable table -->  



</div>


</div>
</body>
</html>
<?php 
}
?>