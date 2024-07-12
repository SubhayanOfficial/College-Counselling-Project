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
        <title>Title of the Page</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php require("topnavBar.php") ?>
        <div id="layoutSidenav">
            <?php require("sidenavBar.php")  ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Add College Facilities</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Add College Facilities</li>
                        </ol>
                        <?php
                        $colid=$_SESSION['cinfo']['colid'];
                        $src=mysqli_query($con,"SELECT colid FROM collegefacilities WHERE colid=$colid") or die(mysqli_error($con));
                        if(mysqli_num_rows($src)>0){
                            ?>
                            <h3><div class="text-center">All facilities are already given</div></h3>
                            <?php
                        }else{
                        ?>
                        <form name="add-colf" method="post">
                        <table class="table table-bordered ">
                            <thead>
                                <tr>
                                    <th colspan="2">Add Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="2">
                                        <div class="form-group">
                                            <textarea class="form-control" rows="2" name="description"></textarea>
                                        </div>
                                    </td>
                                </tr>
                            <thead>
                                <tr>
                                    <th>Add Facilities</th>
                                    <th>Select</th>
                                </tr>
                            </thead>
                                <tr>
                                    <td>Lab</td>
                                    <td>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" value="Yes" name="lab">Yes
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" value="No" name="lab">No
                                        </label>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>AC</td>
                                    <td>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" value="Yes" name="ac">Yes
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" value="No" name="ac">No
                                        </label>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Internet</td>
                                    <td>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" value="Yes" name="internet">Yes
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" value="No"  name="internet">No
                                        </label>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>College Canteen</td>
                                    <td>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" value="Yes" name="canteen">Yes
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" value="No" name="canteen">No
                                        </label>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Antiragging Team</td>
                                    <td>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" value="Yes" name="ateam">Yes
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" value="No" name="ateam">No
                                        </label>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Library</td>
                                    <td>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" value="Yes" name="library">Yes
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" value="No" name="library">No
                                        </label>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Hostel</td>
                                    <td>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" value="Yes" name="hostel">Yes
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" value="No" name="hostel">No
                                        </label>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Approval</td>
                                    <td>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" value="NAAC" name="approval[]">NAAC
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" value="AICTE" name="approval[]">AICTE
                                        </label>
                                        <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" value="UGC" name="approval[]">UGC
                                        </label>
                                        </div>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Affiliated</td>
                                    <td>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" value="MAKAUT" name="affiliated[]">MAKAUT
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" value="CU" name="affiliated[]">CU
                                        </label>
                                    </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" name="ok" value="Add">
                        </div>
                        </form>
                            <?php
                        }
                                if(isset($_POST['ok'])){
                                    $colid=$_SESSION['cinfo']['colid'];
                                    $description=$_POST['description'];
                                    $lab=$_POST['lab'];
                                    $ac=$_POST['ac'];
                                    $internet=$_POST['internet'];
                                    $canteen=$_POST['canteen'];
                                    $ateam=$_POST['ateam'];
                                    $library=$_POST['library'];
                                    $hostel=$_POST['hostel'];
                                    $approval=implode(",",$_POST['approval']);
                                    $affiliated=implode(",",$_POST['affiliated']);
                                    $sql="INSERT INTO collegefacilities(colid,description,lab,ac,internet,canteen,ateam,library,hostel,approval,affiliated) VALUES('$colid', '$description', '$lab', '$ac', '$internet', '$canteen', '$ateam', '$library', '$hostel', '$approval', '$affiliated')";
                                    $res=mysqli_query($con, $sql)or die(mysqli_error($con)); 
                                    if($res==1){
                                        ?>
                                        <div class="alert alert-success">
                                            Add Details is successfull
                                        </div>    
                                        <?php
                                    }else{
                                        ?>
                                        <div class="alert alert-danger">
                                        Add  Details is not unsuccessfull
                                        </div>    
                                        <?php
                                    }
                                }
                            ?>
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
