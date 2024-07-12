<?php 
    require("config.php");
    require("checkSession.php")
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CW-Home</title>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"><link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<?php
    $sid=$_SESSION['sinfo']['sid'];
    $src="SELECT * FROM studetails WHERE sid=$sid";
    $rs=mysqli_query($con, $src)or die(mysqli_error($con));
    $rec=mysqli_fetch_assoc($rs);
    ?>
<!-- partial:index.partial.html -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#"><i class="fas fa-street-view"></i>&nbsp;Counselling World</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
        
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="stupage.php"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="contactus.php"><i class="fa fa-address-book" aria-hidden="true"></i>&nbsp;Contact</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="colsearch.php"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;College Search</a>
      </li>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
        <span class="text-white h5"><i class="fa fa-user-graduate"></i> <?php echo $_SESSION['sinfo']['name'] ?></span>
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="profile.php">View Profile</a>
          <a class="dropdown-item" href="stulogout.php">logout</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
    <div class="container-xl px-4 mt-4">
    <hr class="mt-0 mb-0">
    <div class="row">
        <div class="col-xl-4">
            <!-- Profile picture card-->
            <div class="card mb-5 mb-xl-0">
                <div class="card-header"><h4 class="bg-info text-center p-2 text-white">Student Name</h4> <h4 class="text-center"><?php echo $rec['name']?></h4></div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <img class="img-account-profile rounded-circle mb-2" src="img/avatar1.jpg" width="50%" alt="">
                </div>
                <div class="card-header">Email : <?php echo $rec['semail']?></div>
                <div class="card-header">D.O.B : <?php echo $rec['dob']?></div>
                <div class="card-header">Entrance Exam : <?php echo $rec['eexam']?></div>
                <div class="card-header">Rank : <?php echo $rec['rank']?></div>
                <div class="card-header">Aadhaar No. : <?php echo $rec['aadhaar']?></div>
            </div>
        </div>
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header"><h3 class="text-white py-3 bg-dark text-center">Applied Colleges</h3></div>
                
            </div>
            <?php
            $sid=$_SESSION['sinfo']['sid'];
            $ap_src="SELECT appstd.*, d.dname, col.cname FROM applystudent appstd INNER JOIN degree d ON appstd.did=d.did INNER JOIN college col ON appstd.colid=col.colid WHERE appstd.sid=$sid";
            $apprs=mysqli_query($con, $ap_src)or die(mysqli_error($con));
            // echo "<pre>";
            // while($dd=mysqli_fetch_assoc($apprs)){
            //   print_r($dd);
            // }
            if(mysqli_num_rows($apprs)>0){
              ?>
            <table class="table table-bordered ">
                <thead class="text-center">
                  <tr>
                    <th class="bg-info text-white">College Name</th>
                    <th class="bg-info text-white">Degree</th>
                    <th class="bg-info text-white">Submit Date</th>
                    <th class="bg-info text-white">Approve/Reject</th>
                    <th class="bg-info text-white">Status</th>
                  </tr>
                </thead>
                <tbody>
                <?php
            while($ap_rec=mysqli_fetch_assoc($apprs)){
              ?>
                 <tr>                
                    <td><h6><?php echo $ap_rec['cname'] ?></h6></td>
                    <td><?php echo $ap_rec['dname'] ?></td>
                    <td><?php echo $ap_rec['ap_date'] ?></td>
                    <td><?php echo $ap_rec['up_date'] ?></td>
                    <td><?php echo $ap_rec['status'] ?></td>
                </tr>
              <?php
            }
                ?>
                </tbody>
            </table>
          <?php
            }
          ?>
        </div>
    </div>
</div>
<br>
<?php

require("footer.php")
?>
<!-- partial -->
  <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js'></script><script  src="./script.js"></script>

</body>
</html>