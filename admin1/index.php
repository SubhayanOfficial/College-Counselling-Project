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
                    <div class="container m-4">
                    <div class="d-flex align-items-center justify-content-center">
                    <div class="card text-center" style="width: 32rem;">
                    <img class="card-img-top" src="img/feedback.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">User Feedbacks</h5>
                        <a href="allfeedback.php" class="btn btn-primary m-3">View All feedbacks</a>
                        <a href="solvefeedback.php" class="btn btn-primary">View Solved feedbacks</a>
                    </div>
                    </div>
                    </div>
                    </div>
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
