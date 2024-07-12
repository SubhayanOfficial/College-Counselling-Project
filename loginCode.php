<?php 
    require("config.php");
    $semail=$_POST['semail'];
    $spass=$_POST['spass'];
    $src="SELECT * FROM studetails WHERE semail='$semail' AND spass='$spass'";
    $rs=mysqli_query($con, $src) or die(mysqli_error($con));
    if(mysqli_num_rows($rs)>0){
        $rec=mysqli_fetch_assoc($rs);
        $_SESSION['sinfo']=$rec;
        header('location:./student/stupage.php');
    }else{
        header('location:login.php?err=Invalid email or password');
    }
?> 