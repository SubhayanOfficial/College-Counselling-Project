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
<link rel="stylesheet" href="assets/css/style.css">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"><link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'>
<link rel="stylesheet" href="style.css">

<title>Register& Login</title>
    <style>
       .top1{
        height: 10px;
       }
    .back {
      background: linear-gradient(Bisque, 55%, slateblue);
      width:100%;
      height:100%;
        }
        .card-registration .select-input.form-control[readonly]:not([disabled]) {
        font-size: 1rem;
        line-height: 2.15;
        padding-left: .75em;
        padding-right: .75em;
        }
        .cardbg{
        background: linear-gradient(LightCyan, 40%, skyblue);
        width:100%;
        height:100%;
        }
        .card-registration .select-arrow {
        top: 13px;
        }
        label.error{
            color:red;
            font-size: 22px;
            font-family: 'Times New Roman', Times, serif;
            font-style: italic;
            font-weight: 500;
        }
</style>
    </style>
</head>
<body>
<?php
require("navbar.php")
?>
<section class="vh-100">
  <div class="back">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration cardbg" style="border-radius: 45px; border:1px solid blue;">
          <div class="card-body p-4 p-md-3">
            <div class="already"><h4>Don't have an account? <a href="stureg.php" class="text-info h4">Register</a></h4></div><br>
            <h3 class="mb-2 pb-2 pb-md-0 mb-md d-flex justify-content-center">Student Login</h3>
            <form method="post" name="log-frm" id="log-frm" action="logincode.php">             
                <!-- <div class="row"> -->
                <div class="col-md-12 mb-2">
                  <div class="form-outline">
                  <label class="form-label h5">Email</label>
                    <input type="email"  class="form-control form-control-lg" id=semail name="semail"> 
                </div>
                </div>
                <div class="col-md-12 mb-2">
                  <div class="form-outline">
                  <label class="form-label h5" >Password</label>
                    <input type="password" class="form-control form-control-lg" id=spass name="spass">
                    <a href="#" class="text-danger h6">Forgot Password?</a>
                </div>
                </div>
              </div>
              <div class="mt-1 pt-3 p-md-4 d-flex justify-content-center">
                <input class="btn btn-primary btn-lg" type="submit" value="Login" name="ok"/>
              </div>
             
            </form>
            <?php
            if(isset($_GET['err'])){
                ?>
                <div class="alert alert-danger">
                <?php echo $_GET['err']; ?>
                </div>
                <?php
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
</body>
</html>
<?php
require("footer.php");
?>
<script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js'></script>
<script  src="./script.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script>
    $(document).ready(function(){
        $.validator.addMethod("lettersOnly",function (value,element){
            return this.optional(element) || /^[a-zA-Z]+$/i.test(value);
        },"Please enter letters only.");

        $.validator.addMethod("phone",function (value,element){
            return this.optional(element) || /^\d{10}$/i.test(value);
        },"10 digit mobile number only.");

        // jQuery.validator.setDefaults({
        //     errorPlacement: function(error, element) {
        //         error.appendTo('#invalid-' + element.attr('id'));
        //     }
        // });

        $("#log-frm").validate({
            rules:{
              semail:{
                  required:true,
              },
              spass:{
                  required:true,
              },
            },
            messages:{
              semail:{
                  required:'Please Enter Your Email-ID',
              },
              spass:{
                  required:'Please Enter Your Password',
              },
            }
        });
    });
</script>
</body>
</html>