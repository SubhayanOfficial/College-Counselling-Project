<?php
    session_start();
    $con=mysqli_connect("localhost","root","");
    mysqli_select_db($con,"counselling_world") or die(mysqli_error($con));
?>