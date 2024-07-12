<?php 
    require("config.php");
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CW-Home</title>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"><link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="stupage.php"><i class="fas fa-street-view"></i>&nbsp;Counselling World</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
<main role="main">
<div class="card bg-dark text-white">
  <img src="img/banner.jpg" class="card-img img-fluid" alt="Stony Beach"/>
  <div class="card-img-overlay" style="background-color: rgba(0, 0, 0, 0.1)">
    <p class="card-text mt-5 display-4 font-italic">
      Find Colleges,<br>
      Favaurite Courses, <br>
      That are best for You!
    </p>
    <div class="">
    <p><a class="btn btn-warning btn-lg" href="colsearch.php" role="button">Browse Colleges &raquo;</a></p>
    </div>
  </div>
</div>

<div class="px-4 py-5 my-5 text-center">
  <img class="d-block mx-auto mb-4 rounded-circle" src="img/counselling.jpg" alt="" width="122" height="95">
  <h1 class="display-5 fw-bold">Over 230 Students
                            from 50 Courses</h1>
  <div class="col-lg-6 mx-auto">
    <p class="lead mb-4"> This website helps the student to identify their strenghts, needs, chances and interests and match it to the top universities norms where they hold maximum chances of admission</p>
    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
      <a href="profile.php"><button type="button" class="btn btn-info btn-lg px-4 gap-3">View More</button></a>
    </div>
  </div>
</div>
<div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-20">
                    <img src="img/trend.png" alt="trend"><h3>Top Courses This Year</h3><br>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <ul class="row ">
                        <li class="mr-3 btn btn-outline-info">B.Tech</li>
                        <li class="mr-3 btn btn-outline-info">BCA</li>
                        <li class="mr-3 btn btn-outline-info">BBA</li>
                        <li class="mr-3 btn btn-outline-info">MBA</li>
                        <li class="mr-3 btn btn-outline-info">MCA</li>
                        <li class="mr-3 btn btn-outline-info">M.TECH</li>
                        <li class="mr-3 btn btn-outline-info">BE</li>
                        <li class="mr-3 btn btn-outline-info">B.Sc</li>
                        <li class="mr-3 btn btn-outline-info">ECE</li>
                        <li class="mr-3 btn btn-outline-info">CSE</li>
                        <li class="mr-3 btn btn-outline-info">LLB</li>
                        <li class="mr-3 btn btn-outline-info">ME</li>
                        <li class="mr-3 btn btn-outline-info">EEE</li>
                        <li class="mr-3 btn btn-outline-info">ML & AL</li>
                    </ul>
                </div>
            </div> 
    </div>
    <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center"><br><br><br>
                        <img src="img/trend.png" alt="trend"><h3>Trending Exams This Year</h3> <br>
                    </div>
                </div>
            </div>
            <div class="card ">
                <div class="card-body">
                    <ul class="row ">
                        <li class="mr-3 btn btn-outline-danger">CET</li>
                        <li class="mr-3 btn btn-outline-danger">KCET</li>
                        <li class="mr-3 btn btn-outline-danger">MET</li>
                        <li class="mr-3 btn btn-outline-danger">MHTCET</li>
                        <li class="mr-3 btn btn-outline-danger">KIITEE</li>
                        <li class="mr-3 btn btn-outline-danger">JEE Main</li>
                        <li class="mr-3 btn btn-outline-danger">BITSAT</li>
                        <li class="mr-3 btn btn-outline-danger">WBJEE</li>
                        <li class="mr-3 btn btn-outline-danger">KEAM</li>
                        <li class="mr-3 btn btn-outline-danger">OJEE</li>
                        <li class="mr-3 btn btn-outline-danger">PGECET</li>
                        <li class="mr-3 btn btn-outline-danger">IPUCET</li>
                    </ul>
                </div>
            </div> 
    </div>
    <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center"><br><br><br>
                        <img src="img/trend.png" alt="trend"><h3>Top Colleges This Year</h3> <br>
                    </div>
                </div>
            </div>
            <div class="card ">
                <div class="card-body">
                    <ul class="row ">
                        <li class="mr-3 mb-3 btn btn-outline-success">IIT KHARAGPUR</li>
                        <li class="mr-3 mb-3 btn btn-outline-success">IIT BOMBAY</li>
                        <li class="mr-3 mb-3 btn btn-outline-success">BITS PILANI</li>
                        <li class="mr-3 mb-3 btn btn-outline-success">IIM</li>
                        <li class="mr-3 mb-3 btn btn-outline-success">FIIB DELHI</li>
                        <li class="mr-3 mb-3 btn btn-outline-success">MAHE-Karnataka</li>
                        <li class="mr-3 mb-3 btn btn-outline-success">PGIMER</li>
                        <li class="mr-3 mb-3 btn btn-outline-success">IITH-HYDERABAD</li>
                        <li class="mr-3 mb-3 btn btn-outline-success">IIMC-KOLKATA</li>
                        <li class="mr-3 mb-3 btn btn-outline-success">CEG-CHENNAI</li>
                        <li class="mr-3 mb-3 btn btn-outline-success">BHU -VARANASI</li>
                        <li class="mr-3 mb-3 btn btn-outline-success">ISM-DHANBAD</li>
                        <li class="mr-3 mb-3 btn btn-outline-success">JIS GROUP</li>
                        <li class="mr-3 mb-3 btn btn-outline-success">SVIMS</li>
                    </ul>
                </div>
            </div> 
    </div>
<div class="container">
<div class="row">
    <div class="col-xl-12">
      <div class="section_title text-center mb-100">
        <h3 class="mb-3 mt-4 display-4">WHY US ?</h3>
        <p class="text-primary h3 mb-5 mt-4">--- How our website helps to find a unobstructed career path ---
        </p>
      </div>
    </div>
  </div>
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-4">
      <div class="card bg-info text-white">
      <h2 class="card-header">Keep On Track</h2>
      <p class="card-body">GREAT college counselors serve as guides, coaches, cheerleaders and strategists, helping high school students organize the two-phase process of searching for and applying to college. </p>
      </div>
    </div>
    <div class="col-md-4">
    <div class="card  bg-info text-white">
      <h2 class="card-header">College Corner</h2>
      <p class="card-body">We provide a separate college portal or webpage that helps colleges to insert their details by their own like courses, fees, facilities etc. So no fake details are shown to user. </p>
      </div>
    </div>
    <div class="col-md-4">
    <div class="card  bg-info text-white">
      <h2 class="card-header">High Chances of Employment</h2>
      <p class="card-body">A college degree can help you finally land that dream job you've always wanted. So you need to choose best college according to your preference.</p>
    </div>
    </div>
  </div>
  </div>
  <hr>
</div> <!-- /container -->
</main>
<?php
require("footer.php");
?>
<script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js'></script>


</body>
</html>