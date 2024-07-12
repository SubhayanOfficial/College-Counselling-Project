<?php
    require("config.php")
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description"/>
        <meta name="author"/>
        <title>Add College</title>
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
                        <h1 class="mt-4">College Registration</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">College Registration</li>
                        </ol>                        
                        <form id="addcollege" name="addcollege" method="post">
                        <div class="form-group container-fluid col-10">
                            <label class="h4">College Name</label>
                            <input type="text" class="form-control" name="cname" id="cname" placeholder="Enter College Name">
                        <span class="text-danger" id="invalid-cname">&nbsp;</span><br>
                            <label class="h4">Address</label>
                            <input type="text" class="form-control" name="cadd" id="cadd" placeholder="Enter College Address">
                        <span class="text-danger" id="invalid-cadd">&nbsp;</span><br>
                            <label class="h4">City</label>
                            <input type="text" class="form-control" name="ccity" id="ccity" placeholder="Enter College City">
                        <span class="text-danger" id="invalid-ccity">&nbsp;</span><br>
                            <label class="h4">District</label>
                            <input type="text" class="form-control" name="cdist" id="cdist" placeholder="Enter College District">
                        <span class="text-danger" id="invalid-cdist">&nbsp;</span><br>
                            <label class="h4">PIN Code</label>
                            <input type="text" class="form-control" name="cpin" id="cpin" placeholder="Enter College PIN">
                        <span class="text-danger" id="invalid-cpin">&nbsp;</span><br>
                            <label class="h4">Phone No.</label>
                            <input type="text" class="form-control" name="cphone" id="cphone" placeholder="Enter College Phone Number">
                        <span class="text-danger" id="invalid-cphone">&nbsp;</span><br>
                            <label class="h4">Email address</label>
                            <input type="email" class="form-control" name="cemailid" id="cemailid" placeholder="Enter email">
                        <span class="text-danger" id="invalid-cemailid">&nbsp;</span><br>
                            <label class="h4">Password</label>
                            <input type="password" class="form-control" name="cpass" id="cpass" placeholder="Password">
                        <span class="text-danger" id="invalid-cpass">&nbsp;</span><br>
                            <label class="h4">College Website</label>
                            <input type="text" class="form-control" name="cwsite" id="cwsite" placeholder="Enter College Website">
                            <span class="text-danger" id="invalid-cwsite">&nbsp;</span><br><br>
                        </div>
                        
                        <div class="form-group container-fluid col-10">
                        <input type="submit" value="Submit" name="ok" class="btn btn-primary col-12">
                        </div>
                    </form>
                    <?php
                        if(isset($_POST['ok'])){
                            $cname=$_POST['cname'];
                            $cadd=$_POST['cadd'];
                            $ccity=$_POST['ccity'];
                            $cdist=$_POST['cdist'];
                            $cpin=$_POST['cpin'];
                            $cphone=$_POST['cphone'];
                            $cemailid=$_POST['cemailid'];
                            $cpass=$_POST['cpass'];
                            $cwsite=$_POST['cwsite'];
                            $sql="INSERT INTO college(cname,cadd,ccity,cdist,cpin,cphone,cemailid,cpass,cwsite) VALUES('$cname','$cadd','$ccity','$cdist','$cpin','$cphone','$cemailid','$cpass','$cwsite')";
                            $res=mysqli_query($con, $sql)or die(mysqli_error($con));
                            // to be continued 
                            if($res==1){
                                ?>
                                <div class="alert alert-success">
                                    College registration is successfull.
                                </div>    
                                <?php
                            }else{
                                ?>
                                <div class="alert alert-danger">
                                College registration is not unsuccessfull
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
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script> -->
        <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
        <script src="js/jquery.validate.js"></script>
        <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js'></script>
        <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js'></script>
        <script src="js/scripts.js"></script>
        <!-- <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
         -->
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

                $("#addcollege").validate({
                    rules:{
                        cname:{
                        required:true,
                    },
                        cadd:{
                        required:true,
                    },
                        ccity:{
                        required:true,
                    },
                        cdist:{
                        required:true,
                    },
                        cpin:{
                        required:true,
                    },
                        cphone:{
                        required:true,
                    },
                        cemailid:{
                        required:true,
                    },
                        cpass:{
                        required:true,
                    },
                        cwsite:{
                        required:true,
                    },
                    },
                    messages:{
                    cname:{
                        required:'Please enter college',
                    },
                    cadd:{
                        required:'Please enter address',
                    },
                    ccity:{
                        required:'Please enter city',
                    },
                    cdist:{
                        required:'Please enter city',
                    },
                    cpin:{
                        required:'Please enter pin',
                    },
                    cphone:{
                        required:'Please enter phone',
                    },
                    cemailid:{
                        required:'Please enter email',
                    },
                    cpass:{
                        required:'Please enter password',
                    },
                    cwsite:{
                        required:'Please enter college website',
                    },
                    }
                });
            });
                        
        </script>
    </body>
</html>
