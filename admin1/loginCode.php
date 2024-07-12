<?php 
    require("config.php");
    $aemail_id=$_POST['aemail_id'];
    $apass=$_POST['apass'];
    $src="SELECT * FROM admin WHERE aemail_id='$aemail_id' AND apass='$apass'";
    $rs=mysqli_query($con, $src) or die(mysqli_error($con));
    if(mysqli_num_rows($rs)>0){
        $rec=mysqli_fetch_assoc($rs);
        $_SESSION['ainfo']=$rec;
        header('location:index.php');
    }else{
        header('location:login.php?err=Invalid email or password');
    }
?> 