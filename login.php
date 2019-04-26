<?php 
     include 'config.php';

     if((isset($_POST['hsc_roll'])) && (isset($_POST['hsc_reg'])) && (isset($_POST['ad_roll']))){
          
          $hscRoll = $_POST['hsc_roll'];
          $hscReg = $_POST['hsc_reg'];
          $adRoll = $_POST['ad_roll'];

           $query = "SELECT hsc_roll,hsc_reg,ad_roll FROM students WHERE hsc_roll=$hscRoll AND  hsc_reg = $hscReg AND ad_roll = $adRoll ";
           //var_dump($query);die();


           $result = mysqli_query($conn,$query);
           //var_dump($result);die();
           $row = mysqli_num_rows($result);
           //var_dump($row);die();

           if($row == 1){
                 header("Location: choice-response.php");
               }
               else{
                // echo "<script type=\"text/javascript\">window.alert('Invalid user');</script>";
                echo "<script type='text/javascript'>alert('Invalid user'); window.location='login.php';</script>";

                 // echo "Invalid User";
               }
             }

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Login Page</title>
    <link href="static/style.css" type="text/css" rel="stylesheet">
  </head>
  <body>
    <div class="nav-bar">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="notice.php">Notice</a></li>
        <li><a href="faq.php">FAQ</a></li>
        <li><a href="http://nstu.edu.bd/">NSTU Website</a></li>
        <li><a href="login.php">Enrollment Login</a></li>
        <li><a href="adminLogin.php">Admin Login</a></li>
        
      </ul>
    </div>
    <div class="login-page">
      <div class="form">
        <form class="login-form" method="post" action="">
          <input type="number" name="hsc_roll" placeholder="HSC Roll"/>
          <input type="number" name="hsc_reg" placeholder="HSC Reg"/>
          <input type="number" name="ad_roll" placeholder="NSTU Admission Test Roll"/>
          <button type="submit">login</button>
        </form>
      </div>
    </div>
  </body>
</html>
