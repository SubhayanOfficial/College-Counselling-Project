<?php 
    require("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"><link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'>
<title>Contact-us</title>
<style>
    body {
	background: #e8e8e8;
}
.form-area {
	padding-top: 7%;
}
.row.single-form {
	box-shadow: 0 2px 20px -5px rgba(0,0,0,0.5);
}
.left {
	background: blueviolet;
	padding: 200px 98px;
}
.left h2 {
	font-family: poppins;
	color: #fff;
	font-weight: 700;
	font-size: 48px;
}
.left h2 span {
	font-weight: 100;
}
.single-form{
    background: #fff;
}
.right {
	padding: 70px 100px;
	position: relative;
}
.right i {
	position: absolute;
	font-size: 80px;
	left: -27px;
	top: 40%;
	color: #fff;
}
.form-control {
	border: 2px solid #000;
}
.right button {
	border: none;
	border-radius: 0;
	background: #252525;
	width: 180px;
	color: #fff;
	padding: 15px 0;
	display: inline-block;
	font-size: 16px;
	margin-top: 20px;
	cursor: pointer;
}
.right button:hover{
    background-color: #252525;
}


/*responsive*/

@media (min-width:768px) and (max-width:991px){
    .right i {
	top: -52px;
	transform: rotate(90deg);
	left: 50%;
}
}

@media (max-width:767px){
    .left {
  padding: 90px 15px;
  text-align: center;
}
.left h2 {
  font-size: 25px;
}
.right {
  padding: 25px;
}
.right i {
  top: -52px;
  transform: rotate(90deg);
  left: 46%;
}
    .right button {
	width: 150px;
	padding: 12px 0;
}   
}
</style>
</head>
<body>
<?php
require("navbar.php")
?>
<div class="container">
<div class="card mt-5">
  <div class="card-header row">
    <p class="text-warning h1 ml-4">HELPLINE</p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <h4 class="text-info">@CounsellingWorld</h4>
  </div>
  <div class="card-body">
    <h5 class="card-title text-success mb-5">Contact Us If You have any trouble to access our website!</h5>
    <p class="card-text text-muted h3 mb-4">Call Us:&nbsp;(10.00 am to 6.00 pm)&nbsp; <i class="fa fa-phone"></i>&nbsp;&nbsp;<a href="tel:9876543210">9876543210</a> </p>
    <p class="card-text text-muted h3">Email Us: &nbsp;&nbsp;<i class="fas fa-envelope-square"></i>&nbsp;&nbsp;<a href="mailto:cworld@gmail.com">cworld@gmail.com</a> </p>
  </div>
  <div class="card-footer text-muted text-center">
   <marquee behavior="alternate" scrollamount="10" direction="right"><h4> Feel Free to Contact Us!! </h4></marquee>
  </div>
</div>
</div>
    <div class="form-area mb-4">
        <div class="container">
            <div class="row single-form g-0">
                <div class="col-sm-12 col-lg-6">
                    <div class="left">
                        <h2><span>Share Your</span> <br>Feedback</h2>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="right">
                       <i class="fa fa-caret-left"></i>
                        <form method="post">
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Your Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Message</label>
                              <textarea type="password" class="form-control" id="exampleInputPassword1" name="message"></textarea >
                          </div>
                          <input type="submit" class="btn btn-info ml-5 btn-outline-dark text-white btn-lg col-8 mt-4" value="Send" name="ok">
                        </form>
                        <?php
                        if(isset($_POST['ok'])){
                            $name=$_POST['name'];
                            $email=$_POST['email'];
                            $message=$_POST['message'];
                            $feeddate=date('d-M-Y');
                            $sql="INSERT INTO feedback(name,email,message,feeddate) VALUES ('$name', '$email', '$message', '$feeddate')";
                            $res=mysqli_query($con, $sql)or die(mysqli_error($con));
                            if($res==1){
                                ?>
                                <div class="alert alert-success">
                                    Our Team will Fix Your Issue Very Shortly.
                                </div>    
                                <?php
                            }else{
                                ?>
                                <div class="alert alert-danger">
                                    Unsuccessfull Attempt! Try to Fill the Form Very Carefully.
                                </div>    
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
require("footer.php")
?>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script> -->
<script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js'></script>
</body>
</html>