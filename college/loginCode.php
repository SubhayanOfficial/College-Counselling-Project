<?php 
    require("config.php");
    $cemailid=$_POST['cemailid'];
    $cpass=$_POST['cpass'];
    $src="SELECT * FROM college WHERE cemailid='$cemailid' AND cpass='$cpass'";
    $rs=mysqli_query($con, $src) or die(mysqli_error($con));
    if(mysqli_num_rows($rs)>0){
        $rec=mysqli_fetch_assoc($rs);
        $_SESSION['cinfo']=$rec;
        header('location:index.php');
    }else{
        header('location:login.php?err=Invalid email or password');
    }
?> 