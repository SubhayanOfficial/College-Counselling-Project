<?php 
    require("config.php");
    $did=$_GET['did'];
    $del="DELETE FROM degree WHERE did=$did";
    $res=mysqli_query($con, $del)or die (mysqli_error($con));
    if($res==1){
        header('location:manage_degree.php?msg=Delete Successfull');
        // echo "Delete Successfull.";
    }else{
        header('location:manage_degree.php?msg=Delete Unsuccessfull');
        // echo "Delete Unsuccessfull.";
    }
?>