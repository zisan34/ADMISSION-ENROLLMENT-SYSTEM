<?php 
  include 'config.php';

  if(isset($_POST['submit'])){

    $name = $_POST['name'];

    $fathername = $_POST['father-name'];

    $mothername = $_POST['mother-name'];

    $telephone = $_POST['telephone'];

    $email = $_POST['email'];

    $district = $_POST['district'];
    $bday = $_POST['bday'];
    $religion = $_POST['religion'];
    $nationality = $_POST['nationality'];
    $sscyear = $_POST['sscyear'];
    $hscyear = $_POST['hscyear'];
    $bloodgroup = $_POST['bloodgroup'];
    $addroll = $_POST['addroll'];
    $unit = $_POST['unit'];
    $rank = $_POST['rank'];
    $area = $_POST['area'];
    $choice1 = $_POST['choice1'];
    $choice2 = $_POST['choice2'];
    $choice3 = $_POST['choice3'];
    $choice4 = $_POST['choice4'];
    $choice5 = $_POST['choice5'];

    if ($choice1==$choice2||$choice1==$choice3||$choice1==$choice4||$choice1==$choice5||$choice2==$choice3||$choice2==$choice4||$choice2==$choice5||$choice3==$choice4||$choice3==$choice5||$choice4==$choice5) {
    	echo "<script type='text/javascript'>alert('Subject choices must be different'); window.location='login.php';</script>";
    	die();
    }

    $query_email = "SELECT `user_email` FROM info WHERE user_email='$email'";
    //var_dump($query_email);die();
    $queryresult = mysqli_query($conn,$query_email);
    $row = mysqli_num_rows($queryresult);
    //var_dump($row);die();
    if($row == 0)
	{
    $query = " INSERT INTO `info`(`name`, `father_name`, `mother_name`, `telephone`, `user_email`, `bday`, `religion`, `nationality`, `sscyear`, `hscyear`, `bloodgroup`, `addroll`, `unit`, `choice1`, `choice2`, `choice3`, `choice4`, `choice5`, `rank`, `district`, `area`) VALUES ('$name','$fathername' ,'$mothername','$telephone','$email',$bday,'$religion','$nationality','$sscyear','$hscyear','$bloodgroup',$addroll,'$unit','$choice1','$choice2','$choice3','$choice4','$choice5','$rank','$district','$area') ";

       $result = mysqli_query($conn,$query);
       // var_dump($result);die();
       if($result){ 
       	$message="Data inserted successfully";
       	echo "<script type='text/javascript'>alert('Data inserted successfully'); window.location='login.php';</script>";
        // header("Location: index.php");
      }

      else{

       	$message="Data already exists";
       	echo "<script type='text/javascript'>alert('Data already exists'); window.location='login.php';</script>";


      }

    }
    else{
       	echo "<script type='text/javascript'>alert('Invalid Data'); window.location='login.php';</script>";

	 }
  }

 ?>
 <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Admission Enrollment System</title>
    <link href="static/style.css" type="text/css" rel="stylesheet">
</head>
  <body>
  <div id="wrapper">
    <div class="nav-bar">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="notice.php">Notice</a></li>
          <li><a href="faq.php">FAQ</a></li>
          <li><a href="http://nstu.edu.bd/">NSTU Website</a></li>
          <li><a href="login.php">Enrollment Login</a></li>
        </ul>
    <div class="content-header">
      <h1>Student Enrollment System</h1>
      <h2> Noakhali Science and Technolgy University </h2>
    </div>

    <div class="admission-form">
    <form method="post" action="">

      <h3 class="section-header">Student Information</h3>
        <h3 class="section-header">Personal Information</h3>
         <fieldset>
           <div class="form-row">
             <label for="name">Name:</label>
             <input type="text" id="name" name="name" maxlength="255" placeholder="Enter your name" required><br />
           </div>

           <div class="form-row">
             <label for="father-name">Father's Name:</label>
             <input type="text" id="father-name" name="father-name"  maxlength="255" placeholder="Enter your father's name" required><br />
           </div>

           <div class="form-row">
             <label for="mother-name">Mother's Name:</label>
             <input type="text" id="mother-name" name="mother-name"  maxlength="255" placeholder="Enter your mother's name" required><br />
           </div>

           <div class="form-row">
             <label for="telephone">Telephone:</label>
             <input type="tel" id="telephone" name="telephone"  required><br />
           </div>

           <div class="form-row">
             <label for="user-email">Email:</label>
             <input type="email" id="user-email" name="email"  placeholder="Enter your mail address" required><br />
           </div>

          <div class="form-row">
             <label class="col-md-4 control-label col-xs-12" for="Permanent Address">Permanent Address:</label>
             <div class="col-md-2  col-xs-4">
             <input id="Permanent Address" name="district" type="text" placeholder="District" class="form-control input-md " required>
           </div>

           <div class="col-md-2 col-xs-4">
             <input id="Permanent Address" name="area" type="text" placeholder="Area" class="form-control input-md " required>
           </div>
          </div>

           <div class="form-row">
             <label for="bday">Birthdate:</label>
             <input type="date" id="bday" name="bday" required><br />
           </div>

           <div class="form-row">
             <label for="religion">Religion:</label>
             <input type="text" id="religion" name="religion"  required><br />
           </div>

           <div class="form-row">
             <label for="nationality">Nationality:</label>
             <input type="text" id="nationality" name="nationality"  required><br />
           </div>

           <div class="form-row">
             <label for="sscyear">SSC Passing Year:</label>
             <select name="sscyear">
               <option value="2014">2014</option>
               <option value="2015">2015</option>
             </select><br />
           </div>

          <div class="form-row">
           <label for="hscyear">HSC Passing Year:</label>
           <select name="hscyear">
             <option value="2016">2016</option>
             <option value="2017">2017</option>
           </select><br />
         </div>

         <div class="form-row">
           <label for="blood-group">Blood Group</label>
           <select name="bloodgroup">
              <option value="A+">A Positive</option>
              <option value="A-">A Negative</option>
              <option value="B+">B Positive</option>
              <option value="B-">B Negative</option>
              <option value="AB+">AB Positive</option>
              <option value="AB-">AB Negative</option>
              <option value="O+">O Positive</option>
              <option value="O-">O Negative</option>
              <option value="Unknown">Unknown</option>
           </select>
         </div>
       </fieldset>

       <fieldset>
         <h3 class="section-header">Academic Information</h3>

         <div class="form-row">
           <label for="addroll">Admission Test Roll</label>
           <input id="addroll" name="addroll"   required><br />
         </div>
         <div class="form-row">
           <label for="unit">Admission Unit</label>
           <select id="unit" name="unit"   required>
           	<option>A</option>
           </select>
         </div>
         <div class="form-row">
           <label for="rank">Admission Result Position</label>
           <input id="rank" name="rank"   required><br />
         </div>
       </fieldset>

       <fieldset>
          <h3 class="section-header">Choice List</h3>

          <div class="form-row">
            <label for="choice1">Choice 1:</label>
            <select name="choice1">
              <option value="cste">CSTE</option>
              <option value="eee">EEE</option>
              <option value="ice">ICE</option>
              <option value="se">SE</option>
              <option value="math">A. Math</option>
            </select><br />
          </div>

          <div class="form-row">
            <label for="choice2">Choice 2:</label>
            <select name="choice2">
              <option value="cste">CSTE</option>
              <option value="eee">EEE</option>
              <option value="ice">ICE</option>
              <option value="se">SE</option>
              <option value="math">A. Math</option>
            </select><br />
          </div>

          <div class="form-row">
            <label for="choice3">Choice 3:</label>
            <select name="choice3">
              <option value="cste">CSTE</option>
              <option value="eee">EEE</option>
              <option value="ice">ICE</option>
              <option value="se">SE</option>
              <option value="math">A. Math</option>
            </select> <br />
          </div>

          <div class="form-row">
            <label for="choice4">Choice 4:</label>
            <select name="choice4">
              <option value="cste">CSTE</option>
              <option value="eee">EEE</option>
              <option value="ice">ICE</option>
              <option value="se">SE</option>
              <option value="math">A. Math</option>
            </select>
          </div>

          <div class="form-row">
            <label for="choice5">Choice 5:</label>
            <select name="choice5">
              <option value="cste">CSTE</option>
              <option value="eee">EEE</option>
              <option value="ice">ICE</option>
              <option value="se">SE</option>
              <option value="math">A. Math</option>
            </select>
          </div>
       </fieldset>
      <h4>Terms and Conditions</h4>
      <!-- <div class="input-group">
        <label for="terms"><input type="checkbox" name="terms" id="terms" checked required>I accept the terms and conditions for signing up to this admission system, and hereby confirm I have read the privacy policy.</label>
      </div> -->
      <div class="form-group form-check">
          <label class="form-check-label" for="terms"></label>
          <input class="form-check-input" type="checkbox" name="terms" id="terms" checked required> I accept the terms and conditions for signing up to this admission system, and hereby confirm I have read the privacy policy.
        </div>
      <button type="submit" name="submit"> Submit Now </button>
    </form>
    </div>
  </div>
</div>
</body>
</html>