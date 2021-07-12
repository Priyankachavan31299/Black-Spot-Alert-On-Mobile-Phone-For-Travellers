<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body style="">
    <script src="jquery-3.4.1.min.js"></script>
    <script src="sweetalert2.all.min.js"></script>

    

<?php
$con=mysqli_connect("localhost","root","","patient") or die(mysql_error()) ;
       
     
    if (isset($_POST['submit'])) {

      $first=$_POST["first"];
      $last=$_POST["last"];
      $email=$_POST["email"];
      $password=$_POST["password"];  
    
      $sql=("INSERT INTO user (first,last,email,password) VALUES ('".$first."','".$last."','".$email."','".$password."')");
      
      if (mysqli_query($con,$sql)) {

        ?>
        <script src="sweetalert2.all.min.js"></script>
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
        <div class="btn btn danger">Email used</div>        
      <?php
      }
    }   
?>

</body>
</html>
