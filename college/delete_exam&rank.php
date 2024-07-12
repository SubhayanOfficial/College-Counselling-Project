<?php 
    require("config.php");
    $rankid=$_GET['rankid'];
    $del="DELETE FROM rank WHERE rankid=$rankid";
    $res=mysqli_query($con, $del)or die (mysqli_error($con));
    if($res==1){
        header('location:manage_exam&rank.php?msg=Delete Successfull');
        // echo "Delete Successfull.";
    }else{
        header('location:manage_exam&rank.php?msg=Delete Unsuccessfull');
        // echo "Delete Unsuccessfull.";
    }
?>