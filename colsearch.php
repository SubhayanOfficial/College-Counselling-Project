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
        <form name="frm-src">
            <div class="input-group mb-3 mt-4 col-11 ml-5">
              <input type="text" class="form-control input-lg border-info" placeholder="Search with name/city" aria-label="Recipient's username" aria-describedby="basic-addon2" name="cname">
              <div class="input-group-append">
              <button class="btn btn-outline-success" name="ok" type="submit"><i class="fa fa-search"></i></button>
              </div>
            </div>
        </form>
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
        <div class="card border-success mt-3 mb-1 col-10">
          <div class="card-header text-primary font-weight-bold">
            Search Results
          </div>
          <div class="card-body">
            <h5 class="card-title"><?php echo $rec['cname']?></h5>
            <p class="card-text">To Know more about this college click on view more.</p>
            <form name="<?php echo $rec['cname']?>" action="colfaci.php" method="post">
                <input type="hidden" name="colid" value="<?php echo $rec['colid']?>">
                <input type="submit" class="btn btn-primary" value="View More">
            </form>
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
        <br>
<?php
require("footer.php");
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>