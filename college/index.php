<?php 
    require("config.php");
    require('checkSession.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard-Counselling World</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php require("topnavBar.php") ?>
        <div id="layoutSidenav">
            <?php require("sidenavBar.php") ?>
            <div id="layoutSidenav_content">
                <main>
                <?php
                $colid=$_SESSION['cinfo']['colid'];            
                $src="SELECT * FROM college WHERE colid=$colid";
                $rs=mysqli_query($con, $src)or die(mysqli_error($con));
                if(mysqli_num_rows($rs)>0){
                ?>
                <?php
                while($rec=mysqli_fetch_assoc($rs)){
                ?>
                <div class="bradcam_area breadcam_bg overlay2">
                    <h2 class="text-center"><?php echo $rec['cname']?></h2>
                </div>
                    <div class="container">
                        <div class="card">
                                <h5 class="text-center">Address : <?php echo $rec['cadd']?>,<?php echo $rec['ccity']?>, <?php echo $rec['cdist']?>,<?php echo $rec['cpin']?>, Contact No. <?php echo $rec['cphone']?></h5>

                        </div>
                        <div class="row p-3 dy-flex justify-content-center">                       
                        <div class="card text-center m-3" style="width: 16rem;">
                        <img class="card-img-top rounded-circle" src="img/pending.jpg" alt="Card image cap" height="200px">
                        <div class="card-body">
                            <h4 class="card-title">Pending Students Details</h4>
                            <a href="penstudent.php" class="btn btn-warning ">View</a>
                        </div>
                        </div> 
                        <div class="card text-center m-3" style="width: 16rem;">
                        <img class="card-img-top rounded-circle" src="img/approve.jpg" alt="Card image cap" height="200px">
                        <div class="card-body">
                            <h4 class="card-title">Approved Students Details</h4>
                            <a href="appstudent.php" class="btn btn-success ">View</a>
                        </div>
                        </div>
                        <div class="card text-center m-3" style="width: 16rem;">
                        <img class="card-img-top rounded-circle" src="img/reject.jpg" alt="Card image cap" height="200px">
                        <div class="card-body">
                            <h4 class="card-title">Rejected Students Details</h4>
                            <a href="rejstudent.php" class="btn btn-danger ">View</a>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <?php
                    }
                    }
                    ?>
                    
                </main>
                <?php require('footer.php') ?>
            </div>
            
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
