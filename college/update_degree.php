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
        $cdfid=$_GET['cdfid'];
        $src="SELECT cdf.*, d.dname FROM cdegreefees cdf INNER JOIN degree d ON cdf.did=d.did WHERE cdfid='$cdfid'";
        $rs=mysqli_query($con, $src)or die(mysqli_error($con));
        $rec=mysqli_fetch_assoc($rs);
        ?>
        <?php require("topnavBar.php") ?>
        <div id="layoutSidenav">
            <?php require("sidenavBar.php")  ?>
            <div id="layoutSidenav_content">
                <main>
                    <?php
                    $dsql=mysqli_query($con, "SELECT * FROM degree ORDER BY dname") or die(mysqli_error($con));
                    ?>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Update Degree</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Update Degree</li>
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
                                        <label for="exampleInputEmail1">Select Degree</label>
                                        <select name="did" class="form-control mb-3 border-primary">
                                            <option value="<?php echo $rec['did'] ?>" selected><?php echo $rec['dname'] ?></option>
                                            <?php
                                                while($drec=mysqli_fetch_assoc($dsql)) {?>
                                                <option value="<?php echo $drec['did']; ?>"><?php echo $drec['dname'];?></option>
                                                <?php
                                                }
                                                ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Select No. of Semester</label>
                                        <select name="cdsem" class="form-control mb-3 border-primary">
                                            <option value="<?php echo $rec['cdsem']; ?>" selected><?php echo $rec['cdsem']; ?></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Enter Total Degree Fees</label>
                                        <input type="text" name="fees" value="<?php echo $rec['fees'] ?>" class="form-control mb-3 border-primary">
                                    </div>
                                    <div class="form-group">
                                    <input type="submit" class="btn btn-primary" name="ok" value="UPDATE">
                                    </div>
                                </form>
                                <?php
                                if(isset($_POST['ok'])){
                                    $colid=$_SESSION['cinfo']['colid'];
                                    $cdsem=$_POST['cdsem'];
                                    $fees=$_POST['fees'];
                                    $did=$_POST['did'];
                                    $upd="UPDATE cdegreefees SET did='$did', cdsem='$cdsem', fees='$fees' WHERE cdfid=$cdfid"; 
                                    $res=mysqli_query($con, $upd)or die(mysqli_error($con));
                                    if($res==1){
                                        ?>
                                        <div class="alert alert-success">
                                            Degree Update is successfull
                                        </div>    
                                        <?php
                                    }else{
                                        ?>
                                        <div class="alert alert-danger">
                                        Degree Update is not unsuccessfull
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
