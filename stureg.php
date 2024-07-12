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
<!-- <link rel="stylesheet" href="style.css"> -->
<title>Register& Login</title>

    <style type="text/css">
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
        background: linear-gradient(LightCyan, 70%, skyblue);
        width:100%;
        height:100%;
        }
        .card-registration .select-arrow {
        top: 13px;
        }
        label.error{
            color:red;
            font-size: 20px;
            font-family: 'Times New Roman', Times, serif;
            font-style: italic;
            font-weight: 500;
        }
</style>
</head>
<body>
<?php
require("navbar.php")
?>
<section class="vh-70">
  <div class="back">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration cardbg" style="border-radius: 45px; border:1px solid blue;">
          <div class="card-body p-4 p-md-3">
            <div class="already"><h4>Already have an account? <a href="stulogin.php" class="text-info h4">Log In</a></h4></div><br>
            <h3 class="mb-2 pb-2 pb-md-0 mb-md d-flex justify-content-center">Register As a Student</h3>
            <form method="post" name="reg-frm" id="reg-frm">
              <div class="row">
                <div class="col-md-6 mb-2">
                  <div class="form-outline">
                  <label class="form-label h5" for="firstName">First Name</label>
                    <input type="text" id="fname" class="form-control form-control-lg" name="fname"/> 
                    <span id="invalid-fname">&nbsp;</span>
                </div>
                </div>
                <div class="col-md-6 mb-2">
                  <div class="form-outline">
                  <label class="form-label h5" for="lastName">Last Name</label>
                    <input type="text" class="form-control form-control-lg" name="lname" id="lname"/>
                    <span id="invalid-lname">&nbsp;</span>
                </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-1 d-flex align-items-center">

                  <div class="form-outline datepicker w-100">
                  <label for="birthdayDate" class="form-label h5">D.O.B</label>
                    <input type="date" class="form-control form-control-lg" name="dob" id="dob"/>
                    <span id="invalid-dob">&nbsp;</span>
                  </div>

                </div>
                <div class="col-md-6 mb-1">

                  <h6 class="mb-2 pb-1 h5">Gender: </h6>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" value="Male" id="gender"/>
                    <label class="form-check-label h6" for="maleGender">Male</label>
                  </div>
                  
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" value="Female" id="gender"/>
                    <label class="form-check-label h6" for="femaleGender">Female</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" value="other" id="gender"/>
                    <label class="form-check-label h6" for="otherGender">Other</label>
                  </div>
                  <span id="invalid-gender">&nbsp;</span>
                </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-2">
                    <div class="form-outline">
                    <label class="form-label h5">Guardian Name</label>
                        <input type="text" class="form-control form-control-lg" name="gname" id="gname"> 
                        <span id="invalid-gname">&nbsp;</span>
                    </div>
                    </div>
                    <div class="col-md-6 mb-2">
                    <div class="form-outline">
                    <label class="form-label h5">Aadhaar No.</label>
                        <input type="number" class="form-control form-control-lg" name="aadhaar" id="aadhaar">
                        <span id="invalid-aadhaar">&nbsp;</span>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-2">
                    <label class="form-label h5 select-label">Last Qualifing Examination</label>
                  <select class="form-control mb-3" name="lexam" id="lexam">
                    <option value="1" disabled selected>Choose option</option>
                    <option value="12th" name="lexam">12th</option>
                    <option value="PG" name="lexam">PG</option>
                    <option value="UG" name="lexam">UG</option>
                  </select>
                  <span id="invalid-lexam">&nbsp;</span>
                    </div>
                    <div class="col-md-6 mb-2">
                    <div class="form-outline">
                    <label class="form-label h5">Persentage %</label>
                        <input type="number"  class="form-control form-control-lg" name="persentage" id="persentage">
                        <span id="invalid-persentage">&nbsp;</span>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-2">
                    <label class="form-label h5 select-label">Appeared Entrance Examination</label>
                  <select class="form-control mb-3" name="eexam" id="eexam">
                    <option value="1" disabled selected>Choose option</option>
                    <option value="CET" name="eexam">CET</option>
                    <option value="WBJEE" name="eexam">WBJEE</option>
                    <option value="JEE MAIN" name="eexam">JEE</option>
                    <option value="CAT" name="eexam">CAT</option>
                    <option value="JECA" name="eexam">JECA</option>
                  </select>
                  <span id="invalid-eexam">&nbsp;</span>
                    </div>
                    <div class="col-md-6 mb-2">
                    <div class="form-outline">
                    <label class="form-label h5" >Rank</label>
                        <input type="number" class="form-control form-control-lg" name="rank" id="rank">
                        <span id="invalid-rank">&nbsp;</span>
                    </div>
                    </div>
                </div>              
                <div class="row">
                <div class="col-md-6 mb-2">
                  <div class="form-outline">
                  <label class="form-label h5">Email</label>
                    <input type="email" id="email" class="form-control form-control-lg" name="semail"> <br>
                    <span id="invalid-email">&nbsp;</span>
                </div>
                </div>
                <div class="col-md-6 mb-2">
                  <div class="form-outline">
                  <label class="form-label h5" >Password</label>
                    <input type="password" class="form-control form-control-lg" name="spass" id="spass">
                    <span id="invalid-spass">&nbsp;</span>
                </div>
                </div>
              </div>
              <div class="mt-1 pt-2 d-flex justify-content-center">
                <input class="btn btn-primary btn-lg" type="submit" value="Register Now" name="ok"/>
              </div>              
            </form>
            <?php
            if(isset($_POST['ok'])){
              $fname=$_POST['fname'];
              $lname=$_POST['lname'];
              $fullname=$fname." ".$lname;
              $dob=$_POST['dob'];
              $gender=$_POST['gender'];
              $eexam=$_POST['eexam'];
              $rank=$_POST['rank'];
              $lexam=$_POST['lexam'];
              $gname=$_POST['gname'];
              $persentage=$_POST['persentage'];
              $aadhaar=$_POST['aadhaar'];
              $semail=$_POST['semail'];
              $spass=$_POST['spass'];
              $asrc="SELECT * FROM studetails WHERE semail='$semail' AND aadhaar='$aadhaar'";
                    $ars=mysqli_query($con, $asrc) or die(mysqli_error($con));
                    if(mysqli_num_rows($ars)>0){
                      ?>
                      <div class="alert alert-danger">
                        You are already Registered.
                      </div>    
                      <?php
                    }else{
              $sql="INSERT INTO studetails(name,dob,gender,eexam,rank,lexam,gname,persentage,aadhaar,semail,spass) VALUES ('$fullname','$dob','$gender','$eexam','$rank','$lexam','$gname','$persentage','$aadhaar','$semail','$spass')";
              $res=mysqli_query($con, $sql)or die(mysqli_error($con));
              // to be continued 
              if($res==1){
                $to_email = $semail;                        
                $subject = "Thank you for your Registration";
                $body = "Dear ".$fullname.",\n\nYour Registration is successfully.\n\nYour Login ID is : ".$semail."\nPassword is : ".$spass."\n\n\nBest Wishes... \nRegards.\nCounselling World\n\n\n\nThis email is autogenerated ! Please don't reply to this email.";
                $headers = "From: test@euphoriagenx.com";                        
                if (mail($to_email, $subject, $body, $headers))
                        
                        {
                ?>
                <div class="alert alert-success">
                    Registration is successfull! LOGIN NOW
                </div>    
                <?php
            }else{
                ?>
                <div class="alert alert-danger">
                    Registration is unsuccessfull
                </div>    
                <?php
            }
            }
          }
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

        $.validator.addMethod("aadhaar",function (value,element){
            return this.optional(element) || /^\d{12}$/i.test(value);
        },"12 digit mobile number only.");

        jQuery.validator.setDefaults({
            errorPlacement: function(error, element) {
                error.appendTo('#invalid-' + element.attr('id'));
            }
        });

        $("#reg-frm").validate({
            rules:{
              fname:{
                  required:true,
                  lettersOnly:true
              },
              lname:{
                  required:true,
                  lettersOnly:true
              },
              dob:{
                  required:true,
              },
              gender:{
                  required:true,
              },
              eexam:{
                  required:true,
              },
              gname:{
                  required:true,
              },
              aadhaar:{
                  required:true,
                  minlength:12,
              },
              lexam:{
                  required:true,
              },
              persentage:{
                  required:true,
              },
              rank:{
                  required:true,
              },
              semail:{
                  required:true,
              },
              spass:{
                  required:true,
                  minlength:6,
                  maxlength:16
              },

            },
            messages:{
              fname:{
                  required:'Please enter your First name',
              },
              lname:{
                  required:'Please enter your Last name',
              },
              dob:{
                  required:'Please enter your DOB',
              },
              gender:{
                  required:'Please select your gender',
              },
              eexam:{
                  required:'Please enter your Eexam',
              },
              gname:{
                  required:'Please enter your Guardian Name',
              },
              aadhaar:{
                  required:'Please enter your aadhaar no.',
                  minlength:'Please enter 12 Digit Number',
              },
              lexam:{
                  required:'Please enter your Last Q. Exam',
              },
              persentage:{
                  required:'Please enter your persentage',
              },
              rank:{
                  required:'Please enter your rank',
              },
              semail:{
                  required:'Please enter your email',
              },
              spass:{
                  required:'Please enter your password',
                  minlength:'Please enter atleast 6 character',
                  maxlength:'Please enter not more than 16 character',
              },
            }
        });
    });
</script>
</body>
</html>