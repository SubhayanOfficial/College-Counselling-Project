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
        <title>Update Degree</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php
        $rankid=$_GET['rankid'];
        $src="SELECT * FROM rank WHERE rankid='$rankid'";
        $rs=mysqli_query($con, $src)or die(mysqli_error($con));
        $rec=mysqli_fetch_assoc($rs);
        ?>
        <?php require("topnavBar.php") ?>
        <div id="layoutSidenav">
            <?php require("sidenavBar.php")  ?>
            <div id="layoutSidenav_content">
                <main>
                    <!-- <?php
                    $dsql=mysqli_query($con, "SELECT * FROM degree ORDER BY dname") or die(mysqli_error($con));
                    ?> -->
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Update Exam And Rank</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Update Exam And Rank</li>
                        </ol>
                        <!-- <div class="alert alert-success">
                        <?php
                                if(isset($_GET['msg'])){
                                    echo $_GET['msg'];
                                }
                                ?>
                        </div> -->
                        </div>
                        
                        <div class="container-fluid px-4">
                            <div class="col-6">
                                <form name="add-degree" method="post">
                                    <div class="form-group">
                                        <label class="">Enter Entrance Exam</label>
                                        <input type="text" name="eexam" value="<?php echo $rec['eexam'] ?>" class="form-control mb-3 border-primary">
                                    </div>
                                    <div class="form-group">
                                        <label class="">Enter RankUpto</label>
                                        <input type="text" name="rankupto" value="<?php echo $rec['rankupto'] ?>" class="form-control mb-3 border-primary">
                                    </div>
                                    <div class="form-group">
                                    <input type="submit" class="btn btn-primary" name="ok" value="UPDATE">
                                    </div>
                                </form>
                                <?php
                                if(isset($_POST['ok'])){
                                    $colid=$_SESSION['cinfo']['colid'];
                                    $eexam=$_POST['eexam'];
                                    $rankupto=$_POST['rankupto'];
                                    $upd="UPDATE rank SET eexam='$eexam', rankupto='$rankupto' WHERE rankid=$rankid"; 
                                    $res=mysqli_query($con, $upd)or die(mysqli_error($con));
                                    if($res==1){
                                        ?>
                                        <div class="alert alert-success">
                                            Update is successfull
                                        </div>    
                                        <?php
                                    }else{
                                        ?>
                                        <div class="alert alert-danger">
                                        Update is not unsuccessfull
                                        </div>    
                                        <?php
                                    }
                                }
                            ?>
                            </div>
                        </div>
                </main>
                <?php require("footer.php") ?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
