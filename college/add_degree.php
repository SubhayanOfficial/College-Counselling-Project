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
        <title>Add Degree</title>
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
                    <?php
                    $dsql=mysqli_query($con, "SELECT * FROM degree ORDER BY dname") or die(mysqli_error($con));
                    ?>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Add Degree</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Add Degree</li>
                        </ol>
                        </div>
                        <div class="container-fluid px-4">
                            <div class="col-8 ">
                                <form name="add-degree" id="add-degree" method="post">
                                    <div class="form-group">
                                        <label class="">Select Degree</label>
                                        <select name="did" id="did" class="form-control mb-3 border-primary">
                                            <option value=""selected>--Select Course--</option>
                                            <?php
                                                while($drec=mysqli_fetch_assoc($dsql)) {?>
                                                <option value="<?php echo $drec['did']; ?>"><?php echo $drec['dname'];?></option>
                                                <?php
                                                }
                                                ?>
                                        </select>
                                    </div>
                                    <span class="text-danger" id="invalid-did">&nbsp;</span>
                                    <div class="form-group">
                                        <label class="">Select No. of Semester</label>
                                        <select name="cdsem" id="cdsem" name="cdsem" class="form-control mb-3 border-primary">
                                            <option value=""selected>--Select--</option>
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
                                    <span class="text-danger" id="invalid-cdsem">&nbsp;</span>
                                    <div class="form-group">
                                        <label class="">Enter Total Degree Fees</label>
                                        <input type="text" name="fees" id="fees" class="form-control mb-3 border-primary">
                                    </div>
                                    <span class="text-danger" id="invalid-fees">&nbsp;</span>
                                    <div class="form-group d-flex justify-content-center">
                                    <input type="submit" class="btn btn-primary" name="ok" value="Add Degree">
                                    </div>
                                </form>
                                <?php
                                if(isset($_POST['ok'])){
                                    $colid=$_SESSION['cinfo']['colid'];
                                    $cdsem=$_POST['cdsem'];
                                    $fees=$_POST['fees'];
                                    $did=$_POST['did'];
                                    // echo $colid;
                                    $sql="INSERT INTO cdegreefees(colid, did, cdsem, fees) VALUES('$colid', '$did','$cdsem','$fees')";
                                    $res=mysqli_query($con, $sql)or die(mysqli_error($con));
                                    // to be continued 
                                    if($res==1){
                                        ?>
                                        <div class="alert alert-success">
                                            Degree add is successfull
                                        </div>    
                                        <?php
                                    }else{
                                        ?>
                                        <div class="alert alert-danger">
                                        Degree add is not unsuccessfull
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
        <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
        <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js'></script>
        <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js'></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        <script type="text/javascript" src="js/jquery.validate.js"></script>
<script>
    $(document).ready(function(){
        $.validator.addMethod("lettersOnly",function (value,element){
            return this.optional(element) || /^[a-zA-Z]+$/i.test(value);
        },"Please enter letters only.");

        $.validator.addMethod("phone",function (value,element){
            return this.optional(element) || /^\d{10}$/i.test(value);
        },"10 digit mobile number only.");

        jQuery.validator.setDefaults({
            errorPlacement: function(error, element) {
                error.appendTo('#invalid-' + element.attr('id'));
            }
        });

        $("#add-degree").validate({
            rules:{
                did:{
                  required:true,
              },
              cdsem:{
                  required:true,
              },
              fees:{
                  required:true,
              },
            },
            messages:{
              did:{
                  required:'Please select degree',
              },
              cdsem:{
                  required:'Please Enter no. of sem',
              },
              fees:{
                  required:'Please Enter Fees',
              },
            }
        });
    });
</script>
    </body>
</html>
