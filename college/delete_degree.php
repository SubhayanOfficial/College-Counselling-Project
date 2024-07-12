<?php 
    require("config.php");
    $cdfid=$_GET['cdfid'];
    $del="DELETE FROM cdegreefees WHERE cdfid=$cdfid";
    $res=mysqli_query($con, $del)or die (mysqli_error($con));
    if($res==1){
        header('location:manage_course.php?msg=Delete Successfull');
        // echo "Delete Successfull.";
    }else{
        header('location:manage_course.php?msg=Delete Unsuccessfull');
        // echo "Delete Unsuccessfull.";
    }
?>