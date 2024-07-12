<?php
    require("config.php")
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
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Add Degree</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Add Degree</li>
                        </ol> 
                        <form name="add-degree" id="add-degree" method="post">
                        <div class="form-group container-fluid col-10">
                            <label class="text-dark h4">Enter Degree Name</label>
                            <input type="text" class="form-control" id="dname" name="dname" placeholder="Enter Degree">
                            <span class="text-danger " id="invalid-dname">&nbsp;</span>
                            <input type="submit" class="btn btn-primary col-12" value="Add Degree" name="ok">
                        </div>
                    </form>
                    <?php
                        if(isset($_POST['ok'])){
                            $dname=$_POST['dname'];
                            $sql="INSERT INTO degree(dname) VALUES('$dname')";
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
                dname:{
                  required:true,
              },
            },
            messages:{
              dname:{
                  required:'Please enter degree',
              },
            }
        });
    });
</script>
    </body>
</html>
