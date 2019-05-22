<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home Page</title>
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="setTheDate()">
    	<?php include 'navbar.html'?>
    	<div id="form_data">
         
            <form action="register-database.php" method="POST" enctype="multipart/form-data">
                Enter Your Name:<br>
                <input type="text" name="customer_name" required><br>
                Phone Number:<br>
                <input type="text" name="phone_num" required><br> 
                Address:<br>
                <input type="text" name="address" required><br>
                License Num:<br>
                <input type="text" name="car_license" required><br>
                Engine Num:<br>
                <input type="text" name="car_engine_num" required><br>
                Mechanic Name:<br>
                <select name="mehanic">
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
                    <option value="8.00-11.00">8.00-11.00</option>
                    <option value="11.00-2.00">11.00-2.00</option>
                    <option value="2.00-5.00">2.00-5.00</option>
                    <option value="5.00-8.00">5.00-8.00</option>    
                </select><br><br>
                <input id="register-button" type="submit" value="register" name="register" />  
            </form>
        </div>
    	<?php include 'footer.html'?>
        <script src="assets/js/script.js" type="text/javascript"></script>
    </body>
</html>
