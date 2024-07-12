<?php
require('config.php');
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
<title>College Search</title>
</head>
<body>
<?php
require("navbar.php");
?>
  <!-- Background image -->
  <div class="p-5 text-center bg-image" style="
      background-image:url(img/college4.jpg);
      height: 245px;
      opacity:0.8;
      background-repeat:no-repeat;
      background-size: cover;
    ">
    
      <div class="d-flex align-items-center h-150">
        <div class="ml-4 text-white">
          <h1 class="h1 font-weight-bold bg-secondary">Search Colleges According</h1>
          </div>
        </div>
        <div>
          <div class="ml-4 text-white row"><br>
          <h1 class="h1 font-weight-bold bg-secondary">To Your Needs</h1>
        </div>
      </div>
      </div>
    

            <div class="col-12 mt-5 mb-5 d-flex justify-content-center">
            <form name="frm-src">
                <div class="row">
                    <div class="col-10">
                        <input type="text" name="cname" class="form-control border-primary" placeholder="Search with name/city">
                    </div>
                    <div class="col-2">
                        <input type="submit" name="ok" value="Search" class="btn btn-success">
                    </div>
                </div>
            </form>
        </div>
    <?php
    if(isset($_GET['ok'])){
        $cname=$_GET['cname'];
        $src="SELECT * FROM college WHERE cname LIKE '$cname%' OR ccity LIKE '$cname'";
        $rs=mysqli_query($con, $src)or die(mysqli_error($con));
        if(mysqli_num_rows($rs)>0){
        ?>
        <?php
          while($rec=mysqli_fetch_assoc($rs)){
        ?>
        <div class="d-flex justify-content-center">
        <div class="card border-success mt-5 mb-1 col-8">
          <div class="card-header text-primary font-weight-bold">
            Search Results
          </div>
          <div class="card-body">
            <h5 class="card-title"><?php echo $rec['cname']?></h5>
            <p class="card-text">To Know more about this college click on view more.</p>
            <a href="colfaci.php?colid=<?php echo $rec['colid']  ?>" class="btn btn-primary">View More</a>
          </div>
        </div>
        </div>
        <?php
           }
          }
        else{
            echo "No College found !! Search Another ->";
            }
        }
        ?>
    <!-- <div class="container mt-5 mb-1 col-8">
        <h4 class="text-success card-header">Most Frequent Searches</h4>
        <div class="card ">
            <div class="card-body">
            <h5 class="card-title">Techno Main</h5>
            <p class="card-text">To Know more about this college click on view more.</p>
            <a href="colfaci.php" class="btn btn-primary">View More</a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
            <h5 class="card-title">ABC college</h5>
            <p class="card-text">To Know more about this college click on view more.</p>
            <a href="colfaci.php" class="btn btn-primary" >View More</a>
            </div>
        </div>
    </div> -->
<?php
require("footer.php");
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>