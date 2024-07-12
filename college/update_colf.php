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
        <title>Update College Facilities</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
    <?php
        $colid=$_SESSION['cinfo']['colid'];
        $fid=$_GET['fid'];
        $src="SELECT * FROM collegefacilities WHERE fid='$fid' AND colid=$colid";
        $rs=mysqli_query($con, $src)or die(mysqli_error($con));
        $rec=mysqli_fetch_assoc($rs);
        $langArr=explode(',', $rec['approval']);
        $langArr1=explode(',', $rec['affiliated']);
        ?>
        <?php require("topnavBar.php") ?>
        <div id="layoutSidenav">
            <?php require("sidenavBar.php")  ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Update College Facilities</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Update College Facilities</li>
                        </ol>
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
                                            <textarea class="form-control" rows="2" name="description"><?php echo $rec['description'] ?></textarea>
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
                                        <label class="form-check-label" for="lab">
                                            <input type="radio" class="form-check-input" value="Yes" name="lab"
                                            <?php
                                                if($rec['lab']=="Yes"){
                                                    echo "checked";
                                                }
                                            ?>
                                            >Yes
                                        </label>
                                    </div>
                                    <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" value="No" name="lab"
                                                <?php
                                                    if($rec['lab']=="No"){
                                                        echo "checked";
                                                    }
                                                ?>
                                                >No
                                            </label>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>AC</td>
                                    <td>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" value="Yes" name="ac"
                                            <?php
                                                    if($rec['ac']=="Yes"){
                                                        ?>
                                                        checked=checked
                                                        <?php
                                                    }
                                                ?>
                                            >Yes
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" value="No" name="ac"
                                            <?php
                                                    if($rec['ac']=="No"){
                                                        echo "checked";
                                                    }
                                                ?>
                                            >No
                                        </label>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Internet</td>
                                    <td>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" value="Yes" name="internet"
                                            <?php
                                                    if($rec['internet']=="Yes"){
                                                        echo "checked";
                                                    }
                                                ?>
                                            >Yes
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" value="No"  name="internet"
                                            <?php
                                                    if($rec['internet']=="No"){
                                                        echo "checked";
                                                    }
                                                ?>
                                            >No
                                        </label>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>College Canteen</td>
                                    <td>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" value="Yes" name="canteen"
                                            <?php
                                                    if($rec['canteen']=="Yes"){
                                                        echo "checked";
                                                    }
                                                ?>
                                            >Yes
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" value="No" name="canteen"
                                            <?php
                                                    if($rec['canteen']=="No"){
                                                        echo "checked";
                                                    }
                                                ?>
                                            >No
                                        </label>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Antiragging Team</td>
                                    <td>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" value="Yes" name="ateam"
                                            <?php
                                                    if($rec['ateam']=="Yes"){
                                                        echo "checked";
                                                    }
                                                ?>
                                            >Yes
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" value="No" name="ateam"
                                            <?php
                                                    if($rec['ateam']=="No"){
                                                        echo "checked";
                                                    }
                                                ?>
                                            >No
                                        </label>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Library</td>
                                    <td>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" value="Yes" name="library"
                                            <?php
                                                    if($rec['library']=="Yes"){
                                                        echo "checked";
                                                    }
                                                ?>
                                            >Yes
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" value="No" name="library"
                                            <?php
                                                    if($rec['library']=="No"){
                                                        echo "checked";
                                                    }
                                                ?>
                                            >No
                                        </label>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Hostel</td>
                                    <td>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" value="Yes" name="hostel"
                                            <?php
                                                    if($rec['hostel']=="Yes"){
                                                        echo "checked";
                                                    }
                                                ?>
                                            >Yes
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" value="No" name="hostel"
                                            <?php
                                                    if($rec['hostel']=="No"){
                                                        echo "checked";
                                                    }
                                                ?>
                                            >No
                                        </label>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Approval &nbsp;&nbsp;</td>
                                    <td>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" value="NAAC" name="approval[]"
                                            <?php
                                                if(in_array('NAAC', $langArr)){
                                                    echo "checked";
                                                }
                                                ?>
                                            >NAAC
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" value="AICTE" name="approval[]"
                                            <?php
                                                if(in_array('AICTE', $langArr)){
                                                    echo "checked";
                                                }
                                                ?>
                                            >AICTE
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" value="UGC" name="approval[]"
                                            <?php
                                                if(in_array('UGC', $langArr)){
                                                    echo "checked";
                                                }
                                                ?>
                                            >UGC
                                        </label>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Affiliated</td>
                                    <td>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" value="MAKAUT" name="affiliated[]"
                                            <?php
                                                if(in_array('MAKAUT', $langArr1)){
                                                    echo "checked";
                                                }
                                                ?>
                                            >MAKAUT
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" value="CU" name="affiliated[]"
                                            <?php
                                                if(in_array('CU', $langArr1)){
                                                    echo "checked";
                                                }
                                                ?>
                                            >CU
                                        </label>
                                    </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" name="ok" value="Update">
                        </div>
                        </form>
                        <?php
                                if(isset($_POST['ok'])){
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
                                    $upd="UPDATE collegefacilities SET description='$description', lab='$lab', ac='$ac', internet='$internet', canteen='$canteen', ateam='$ateam', library='$library', hostel='$hostel', approval='$approval', affiliated='$affiliated' WHERE fid=$fid"; 
                                    $res=mysqli_query($con, $upd)or die(mysqli_error($con));
                                    if($res==1){
                                        ?>
                                        <div class="alert alert-success">
                                            Update Details is successfull
                                        </div>    
                                        <?php
                                    }else{
                                        ?>
                                        <div class="alert alert-danger">
                                        Update Details is not unsuccessfull
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
