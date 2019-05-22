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
    <body>
    	<?php include 'navbar.html'?>
    	<?php
            session_start();
            echo '<div class="message">';
            if(isset($_SESSION["success"])){
                
                //you can use this p tag for designing also
                
                echo ('<p id="flashMessage">'.$_SESSION["success"]."</p>\n");
                unset($_SESSION["success"]);
            }
            if(isset($_SESSION["error"])){
                echo ('<p id="flashMessage">'.$_SESSION["error"]."</p>\n");
                unset($_SESSION["error"]);
            }
        ?>
    	<div id="body-container">
    		<div id="place-an-appointment">
    			<center>
    				<span>
    					<b><a href="register.php"style="color: #9E0000;text-decoration: none; font-size: 30px;">Place An Appointment Now</a></b>
    				</span>
    			</center>
    			</div>
    	</div>
    	<?php include 'footer.html'?>
    </body>
</html>
