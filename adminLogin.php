<?php 
     include 'config.php';

     if((isset($_POST['id'])) && (isset($_POST['password']))){
          
          $id = $_POST['id'];
          $password = $_POST['password'];

           $query = "SELECT ID,password FROM adminData WHERE ID='$id' AND  password = '$password' ";
           //var_dump($query);die();


           $result = mysqli_query($conn,$query);
           //var_dump($result);die();
           $row = mysqli_num_rows($result);
           //var_dump($row);die();

           if($row == 1){
                 header("Location: insertData.php");
               }
               else{
                // echo "<script type=\"text/javascript\">window.alert('Invalid user');</script>";
                echo "<script type='text/javascript'>alert('Invalid user'); window.location='index.php';</script>";

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
          <input type="text" name="id" placeholder="ID"/>
          <input type="password" name="password" placeholder="Password"/>
          <button type="submit">login</button>
        </form>
      </div>
    </div>
  </body>
</html>
