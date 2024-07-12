<?php
if(empty($_SESSION['sinfo'])){
    header('location:login.php?err=Please login yourself');
}
?>