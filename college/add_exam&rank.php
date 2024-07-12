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
        <title>Exam & Rank</title>
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
                    <!-- <?php
                    $dsql=mysqli_query($con, "SELECT * FROM degree ORDER BY dname") or die(mysqli_error($con));
                    ?> -->
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Add Exam And Rank</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Add Exam And Rank</li>
                        </ol>
                        </div>
                        <div class="container-fluid px-4">
                            <div class="col-6">
                                <form name="Rank" id="Rank" method="post">
                                    <div class="form-group">
                                        <label class="">Enter Entrance Exam</label>
                                        <input type="text" name="eexam" id="eexam" class="form-control mb-3 border-primary">
                                    </div>
                                    <span class="text-danger" id="invalid-eexam">&nbsp;</span>
                                    <div class="form-group">
                                        <label class="">Enter RankUpto</label>
                                        <input type="text" name="rankupto" id="rankupto" class="form-control mb-3 border-primary">
                                    </div>
                                    <span class="text-danger" id="invalid-rankupto">&nbsp;</span>
                                    <div class="form-group">
                                    <input type="submit" class="btn btn-primary" name="ok" value="Add">
                                    </div>
                                </form>
                                <?php
                                if(isset($_POST['ok'])){
                                    $colid=$_SESSION['cinfo']['colid'];
                                    $eexam=$_POST['eexam'];
                                    $rankupto=$_POST['rankupto'];
                                    // echo $colid;
                                    $sql="INSERT INTO rank (colid, eexam, rankupto) VALUES('$colid', '$eexam','$rankupto')";
                                    $res=mysqli_query($con, $sql)or die(mysqli_error($con));
                                    // to be continued 
                                    if($res==1){
                                        ?>
                                        <div class="alert alert-success">
                                            Rank add is successfull
                                        </div>    
                                        <?php
                                    }else{
                                        ?>
                                        <div class="alert alert-danger">
                                        Rank add is not unsuccessfull
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

        $("#Rank").validate({
            rules:{
              eexam:{
                  required:true,
              },
              rankupto:{
                  required:true,
              },
            },
            messages:{
              eexam:{
                  required:'Please select E. Eaxm',
              },
              rankupto:{
                  required:'Please Enter rank Upto',
              },
            }
        });
    });
</script>
    </body>
</html>
