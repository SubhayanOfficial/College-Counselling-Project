<?php
require ("config.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login Institute Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-secondary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4"><i class="fa-solid fa-building-columns"></i>&nbsp;Institute Login</h3></div>
                                    <div class="card-body">
                                        <form  name="admin-log" id="admin-log" method="post" action="loginCode.php">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="cemailid" type="email" placeholder="name@example.com" name="cemailid" />
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <span class="text-danger" id="invalid-cemailid">&nbsp;</span>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="cpass" type="password" placeholder="Password" name="cpass"/>
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <span class="text-danger" id="invalid-cpass">&nbsp;</span>
                                            <div class="d-flex align-items-center justify-content-center mt-4 mb-0">
                                                <input type="submit" name="ok" value="Login" class="btn btn-primary">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                    <?php
                                    if(isset($_GET['err'])){
                                        ?>
                                        <div class="alert alert-danger">
                                        <?php echo $_GET['err']; ?>                                        
                                        </div>
                                        <?php
                                    }
                                    ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-2 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Counselling World</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js'></script>
        <script src="js/scripts.js"></script>
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

        $("#admin-log").validate({
            rules:{
                cemailid:{
                  required:true,
              },
              cpass:{
                  required:true,
              },
            },
            messages:{
              cemailid:{
                  required:'Please Enter Your Email-ID',
              },
              cpass:{
                  required:'Please Enter Your Password',
              },
            }
        });
    });
</script>
    </body>
</html>
