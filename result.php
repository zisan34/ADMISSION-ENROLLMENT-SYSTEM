<?php 
	include 'config.php';
            // $message="HI";
            // echo "<script type=\"text/javascript\">window.alert('$message');</script>";
	$cste =3;
	$se = 2;
	$ice = 2;
	$eee = 2;
	$amath = 3;


    $query = "SELECT addroll,name,rank,choice1,choice2,choice3,choice4,choice5 from info ORDER BY rank";

    $result = $conn->query($query);

     if($result):?>
    <link href="static/style.css" type="text/css" rel="stylesheet">
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
              
              <table class="resultTable">

                <thead>
                    <tr>
                      <th>Admission Roll</th>
                      <th>Name</th>
                      <th>Rank</th>
                      <th>Subject</th>
                    </tr>
                </thead>

                <?php  while($row = $result->fetch_assoc()):?>

                <?php

                $sub = '';

                $choice1 = $row['choice1'];
                $choice2 = $row['choice2'];
                $choice3 = $row['choice3'];
                $choice4 = $row['choice4'];
                $choice5 = $row['choice5'];

                for($i = 0;$i<5;$i++){
                	//echo 'hello';
                	$tmp = '';
                	if($i==0){
                		$tmp = $choice1;
                	}
                	else if($i==1){
                		$tmp = $choice2;
                	}
                	else if($i==2){
                		$tmp = $choice3;
                	}
                	else if($i==3){
                		$tmp = $choice4;
                	}
                	else if($i==4){
                		$tmp = $choice5;
                	}
                	// echo $tmp;

                	if($tmp == 'cste' && $cste > 0){
	                	$sub = 'CSTE';
	                	$cste--;
	                	break;
                	}

                    else if($tmp == 'se' && $se > 0){
	                	$sub = 'SE';
	                	$se--;
	                	break;
                	}
                	else if($tmp == 'ice' && $ice > 0){
	                	$sub = 'ICE';
	                	$ice--;
	                	break;
                	}

        					else if($tmp == 'eee' && $eee > 0){
        						 $sub = 'EEE';
        						 $eee--;
        						 break;
        					}

        					else if($tmp == 'math' && $amath > 0){
        						 $sub = 'AM';
        						 $amath--;
        						 break;
        					}
        					else{
        						$sub = "N/A";
        						// break;
        					}


                }
                
                ?>	
      
      <tr>
        <td><?php echo $row['addroll'] ?></td>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['rank'] ?></td>
        <td><?php echo $sub; ?></td>
      </tr>

      <?php 

      	 $tmprank = $row['rank'];

      	$query1 = "UPDATE `info` SET `allot`= '$sub' WHERE rank = $tmprank";
      	//var_dump($query1);die();
      	$result1 = mysqli_query($conn,$query1);

       ?>

      

    <?php endwhile; ?>
    </table>

    <?php else:?> 
    
    <?php   echo "No Data available";?>
    <?php endif; ?>
