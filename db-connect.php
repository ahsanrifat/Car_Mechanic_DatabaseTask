<?php
//echo 'suru korlam';
$mysqli= new mysqli("localhost", "root", "", "mechanic-appointment") or die();
//echo"DB Connected".'<br>';
if($mysqli->connect_errno){
    echo 'connection error withdatabase';
    die();
}
?>