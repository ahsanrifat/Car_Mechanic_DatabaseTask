<?php
    session_start();
                
    include 'db-connect.php';

    echo "Database Connected Successfully";
                
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
    	$customer_name=$mysqli->real_escape_string($_POST['customer_name']);

    	$phone_num=$mysqli->real_escape_string($_POST['phone_num']);

    	$address=$mysqli->real_escape_string($_POST['address']);

    	$car_license=$mysqli->real_escape_string($_POST['car_license']);

    	$car_engine_num=$mysqli->real_escape_string($_POST['car_engine_num']);

    	$mehanic=$mysqli->real_escape_string($_POST['mehanic']);

    	$date=$mysqli->real_escape_string($_POST['date']);

    	$time=$mysqli->real_escape_string($_POST['time']);


    	//checking if that mechanic if free in that time slot


    	$check="select * from client where mechanic_name='".$mehanic."' and apointment_date='".$date."' and appontment_time='".$time."'";

    	$check_result=mysqli_query($mysqli,$check) or die($mysqli->error);

    	if($check_result->num_rows==1){

    		$_SESSION['error']="Mechanic Busy";
               
                 header("Location: register.php");
    	}


    	$insert="INSERT INTO `client` VALUES ('".$customer_name."','".$phone_num."','".$address."','".$car_license."','".$car_engine_num."','".$mehanic."','".$date."','".$time."')";
    }

    //$userinfo=mysqli_query($mysqli,$insert) or die($mysqli->error);

    if($mysqli->query($insert)){
                
               $_SESSION["success"]="Placed An Appointment Successfully.";
               header("Location: index.php"); 
               
            }
             else{
                
                $_SESSION['error']="Appoitment Could Not Place, Try Again!";
               
                 header("Location: register.php");
            }                
		
?>    