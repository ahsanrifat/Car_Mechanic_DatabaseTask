<?php
    session_start();
                
    include 'db-connect.php';

    echo "Database Connected Successfully";
                
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
    	

    	$mechanic=$mysqli->real_escape_string($_POST['mehanic']);

        echo "$mechanic";

    	$date=$mysqli->real_escape_string($_POST['date']);

        echo "$date";

    	$time=$mysqli->real_escape_string($_POST['time']);

        echo "$time";


       $engine= $_SESSION['add'];


    	//checking if that mechanic if free in that time slot
        if($mechanic!="null"&&$date!="null"&&$time!='null'){

    	$check="select * from client where mechanic_name='".$mehanic."' and apointment_date='".$date."' and appontment_time='".$time."'";

    	$check_result=mysqli_query($mysqli,$check) or die($mysqli->error);

    	if($check_result->num_rows==1){

    		$_SESSION['error']="Mechanic Busy";
               
                 header("Location: admin-edit-page.php");
    	}


    	$insert="update `client` 
        set `mechanic_name`='$mechanic',`apointment_date`='$date', `appontment_time`='$time' 
        where `car_engine_num`='$engine'";
    

    //$userinfo=mysqli_query($mysqli,$insert) or die($mysqli->error);

    if($mysqli->query($insert)){
                
               $_SESSION["success"]="Updated Successfully.";
               header("Location: admin-edit-page.php"); 
               
            }
             else{
                
                $_SESSION['error']="Error!";
               
                 header("Location: admin-edit-page.php");
                 }
            }
            else{
                $_SESSION['error']="Select All The Field";
               
                 header("Location: admin-edit-page.php");
            }             
		}
?>    