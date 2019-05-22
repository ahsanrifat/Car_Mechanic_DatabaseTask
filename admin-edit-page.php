<?php 
     
    session_start();
    
    include 'db-connect.php';
    
    if(isset($_SESSION['add'])){
        $id=$_SESSION['add'];
    }else{
    $id = $_REQUEST["id"];
}
    $_SESSION['add']=$id;
    

?>

<html>
    <head>
        <title>
        Edit Appointment 
        </title>
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    
    <body onload="setTheDate()">
       <?php include 'navbar.html'?> 
          <?php
            //session_start();
            if(isset($_SESSION["success"])){
                echo ('<p style="color: green">'.$_SESSION["success"]."</p>\n");
                unset($_SESSION["success"]);
            }
            if(isset($_SESSION["error"])){
                echo ('<p style="color: blue">'.$_SESSION["error"]."</p>\n");
                unset($_SESSION["error"]);
            }
            $getAddQuery = "select *  from client where car_engine_num='$id'";
    
            $resultTitles=mysqli_query($mysqli,$getAddQuery)or die($mysqli->error);
              
            $numRows= mysqli_num_rows($resultTitles);
              
            if($numRows!=0){ 
                 
             while($numRows>0){
                 
                 
                 while($row=mysqli_fetch_assoc($resultTitles)){


                    $a=1;
                     echo '<div class="add-show" style=" background-color: #FFD0D0;">';
                     echo '<h4>Edit The Appointment</h4><br>'; 
                     echo '<b>'."Customer Name : ".'</b>'.$row['customer_name'].'<br>';
                     echo '<b>'."Phone : ".'</b>'.$row['phone_num'].'<br>';
                     echo '<b>'."Car License : ".'</b>'.$row['car_license'].'<br>';
                     echo '<b>'."Engine Num : ".'</b>'.$row['car_engine_num'].'<br>';
                     echo '<b>'."Mechanic  : ".'</b>'.$row['mechanic_name'].'<br>';
                     echo '<b>'."Date : ".'</b>'.$row['apointment_date'].'<br>';
                     echo '<b>'."Time : ".'</b>'.$row['appontment_time'].'<br>';
                    
                     echo '<h4>Edit Time and Mechanic</h4>';


                     
                }
                 
                 $numRows=$numRows-1;
              }
              
             }
        ?>

        <div class="addForm">
            
            <form action="admin-edit-bd.php" method="POST" enctype="multipart/form-data">
                
             Mechanic Name:<br>
                <select name="mehanic">
                    <option value="null">Select</option>
                    <option value="Abdullah Fahim">Abdullah Fahim</option>
                    <option value="Sarruk Roy">Sarruk Roy</option>
                    <option value="Injamam Islam">Injamam Islam</option>
                    <option value="Aegon John">Aegon John</option>    
                </select><br>
                Date:<br>
                <div id="select-date">
                </div>
                Time:<br>
                <select name="time">
                    <option value="null">select</option>
                    <option value="8.00-11.00">8.00-11.00</option>
                    <option value="11.00-2.00">11.00-2.00</option>
                    <option value="2.00-5.00">2.00-5.00</option>
                    <option value="5.00-8.00">5.00-8.00</option>    
                </select><br><br>
                <input type="hidden" name="car_engine_num" value="gfdngondfog"><br>
                <input id="register-button" type="submit" value="register" name="register" />

            </form> 
        </div>
        <?php include 'footer.html'?>
        <script src="assets/js/script.js" type="text/javascript"></script>
    </body>
</html>

