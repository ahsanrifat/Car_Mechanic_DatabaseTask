<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
  <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
  <?php include 'navbar.html'?>
	<?php 
     
    session_start();
    include 'db-connect.php';
    
     if(isset($_SESSION["success"])){
                echo ('<p style="color: green">'.$_SESSION["success"]."</p>\n");
                unset($_SESSION["success"]);
            }
            if(isset($_SESSION["error"])){
                echo ('<p style="color: blue">'.$_SESSION["error"]."</p>\n");
                unset($_SESSION["error"]);
            }

    
    $getAddQuery = "select *  from client";
    
    $resultTitles=mysqli_query($mysqli,$getAddQuery)or die($mysqli->error);
              
    $numRows= mysqli_num_rows($resultTitles);
              
            if($numRows!=0){ 
                 
             while($numRows>0){
                 
                 
                 while($row=mysqli_fetch_assoc($resultTitles)){


                    $a=1;
                     echo '<div class="add-show" style=" background-color: #FFD0D0;">';
                     echo '<h4>Registered Appointment</h4><br>'; 
                     echo '<b>'."Customer Name : ".'</b>'.$row['customer_name'].'<br>';
                     //echo '<b>'."Phone : ".'</b>'.$row['phone_num'].'<br>';
                     //echo '<b>'."Car License : ".'</b>'.$row['car_license'].'<br>';
                     //echo '<b>'."Engine Num : ".'</b>'.$row['car_engine_num'].'<br>';
                     echo '<b>'."Mechanic  : ".'</b>'.$row['mechanic_name'].'<br>';
                     echo '<b>'."Date : ".'</b>'.$row['apointment_date'].'<br>';
                     echo '<b>'."Time : ".'</b>'.$row['appontment_time'].'<br>';
                    
                     echo '<h4>Edit Time and Mechanic</h4>';


                     
                    { ?>
                      <div class="pqr">
                      <a type="button" style="color: #9E0000;text-decoration: none; font-size: 25px;" class="line" href="admin-edit-page.php?id=<?php echo $row["car_engine_num"];?>"> show</a>
                      </div>
                      <br>
                      <?php }
                       echo "<hr>";
       
                }
                 
                 $numRows=$numRows-1;
              }
              
             }
	
?>
<?php include 'footer.html'?>
</body>
</html>

 	