<?php
require('config.php');
require('checkSession.php');
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
<title>applystudent</title>
<style>
       .top1{
        height: 10px;
       }
    .back {
      background: linear-gradient(Bisque, 30%, slateblue);
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
        background: linear-gradient(blue, 20%, skyblue);
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
</head>
<body>
<?php
require("navbar.php");
?>
<?php
$colid=$_SESSION['colid'];
$src="SELECT cdf.*, d.dname FROM cdegreefees cdf INNER JOIN degree d ON cdf.did=d.did WHERE cdf.colid='$colid'";
$rs=mysqli_query($con, $src)or die(mysqli_error($con));
// $rec=mysqli_fetch_assoc($rs);
?>
<section class="vh-100">
  <div class="back">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration cardbg" style="border-radius: 45px; border:1px solid blue;">
          <div class="card-body p-8 p-md-3">
          <h2 class="mb-4 pb-2 pb-md-0 mb-md d-flex justify-content-center text-white"><u><?php echo $_SESSION['colname']; ?></u></h2>
            <h3 class="mb-4 pb-2 pb-md-0 mb-md d-flex justify-content-center text-white">Choose A Degree </h3>
            <form name="app-std" method="post">
                <div class="col-md-12 mb-4">
                  <div class="form-outline">
                  <label class="form-label h5">Select Dgree</label>
                  <select name="did" class="form-control mb-3 border-primary">
                      <option value=""selected>--Select Degree--</option>
                      <?php
                          while($drec=mysqli_fetch_assoc($rs)) {?>
                          <option value="<?php echo $drec['did']; ?>"><?php echo $drec['dname'];?></option>
                          <?php
                          }
                          ?>
                  </select>
                  </div>
                </div>
              <div class="mt-1 pt-3 p-md-2 d-flex justify-content-center">
                <input class="btn btn-primary btn-lg" type="submit" value="Click to Apply" name="ok"/>
              </div>
                        </div>
            </form>
            <?php
                if(isset($_POST['ok'])){
                  
                    $sid=$_SESSION['sinfo']['sid'];
                    $did=$_POST['did'];
                    $ap_date=date("d-M-Y");
                    // echo $colid;
                    // $asrc="SELECT * FROM applystudent WHERE did='$did' AND sid='$sid' AND colid=$colid AND status='Approve'";
                    $asrc="SELECT * FROM applystudent WHERE did='$did' AND sid='$sid' AND colid=$colid";
                    $ars=mysqli_query($con, $asrc) or die(mysqli_error($con));
                    if(mysqli_num_rows($ars)>0){
                      ?>
                      <div class="alert alert-danger">
                        You are already applied.
                      </div>    
                      <?php
                    }else{
                      $sql="INSERT INTO applystudent (did, sid, colid, ap_date) VALUES ('$did', '$sid', '$colid', '$ap_date')";
                      $res=mysqli_query($con, $sql)or die(mysqli_error($con));
                      // to be continued 
                      if($res==1){
                        $to_email = $_SESSION['sinfo']['semail'];
                        
                        $subject = "Thank you for your Application";
                        $body = "Dear ".$_SESSION['sinfo']['name'].",\n\nYour application is successfully submitted in ".$_SESSION['colname'].".\n\nAdmisson department will looking forward to your application & If you are among selected students, your appliation status will get effected(Approved/Rejected).\n\nIf your status is approved, you have to visit college campass physically(Within 2 working days) along with these documents...\n\n1. Aadhaar Card\n2. 10th Admit\n3. Last Qualifying Exam Marksheet\n4. Recent Color Photograph(2 copies)\n5. Hard Copy of this confirmation mail\n6. Hard Copy of Entrance Examination Rank Card\n\nBest Wishes... \nRegards.\nCounselling World\n\n\n\nThis email is autogenerated ! Please don't reply to this email.";
                        $headers = "From: test@euphoriagenx.com";
                        
                        if (mail($to_email, $subject, $body, $headers))
                        
                        {
                            // echo "Email successfully sent to $to_email...";
                            ?>
                            <div class="alert alert-success">
                                Apply successfull
                            </div>    
                            <?php
                        }
                        
                      }else{
                          ?>
                          <div class="alert alert-danger">
                          Apply not unsuccessfull
                          </div>    
                          <?php
                      }
                    }
                }
            ?>
</div>
      </div>
    </div>
  </div>
  </div>
</section>





<?php
require("footer.php");
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>