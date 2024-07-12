<?php 
    require("config.php");
    $colid=$_GET['colid'];
    $del="DELETE FROM college WHERE colid=$colid";
    $res=mysqli_query($con, $del)or die (mysqli_error($con));
    if($res==1){
        header('location:manage_college.php?msg=Delete Successfull');
        // echo "Delete Successfull.";
    }else{
        header('location:manage_college.php?msg=Delete Unsuccessfull');
        // echo "Delete Unsuccessfull.";
    }
?>