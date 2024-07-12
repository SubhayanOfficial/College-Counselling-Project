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
        <title>Manage College</title>
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
                        <h1 class="mt-4">Manage Registred College Data</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Manage Registred College Data</li>
                        </ol>
                        <div class="alert-success">
                        <?php
                            if(isset($_GET['msg'])){
                                echo $_GET['msg'];
                            }
                            ?>
                        </div>
                        <section class="container">
    <?php
    $src="SELECT * FROM college";
    $rs=mysqli_query($con, $src)or die(mysqli_error($con));
    if(mysqli_num_rows($rs)>0){
        ?>
        <table class="table table-bordered">
            <thead class="text-center bg-dark h5 text-white">
                <tr>
                    <th>College Name</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>District</th>
                    <th>PIN</th>
                    <th>Phone No.</th>
                    <th>Email_ID</th>
                    <th>PassWord</th>
                    <th>Website</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
            while($rec=mysqli_fetch_assoc($rs)){
                ?>
                <tr>
                    <td class="text-dark h5"><?php echo $rec['cname'] ?></td>
                    <td><?php echo $rec['cadd'] ?></td>
                    <td><?php echo $rec['ccity'] ?></td>
                    <td><?php echo $rec['cdist'] ?></td>
                    <td><?php echo $rec['cpin'] ?></td>
                    <td><?php echo $rec['cphone'] ?></td>
                    <td><?php echo $rec['cemailid'] ?></td>
                    <td><?php echo $rec['cpass'] ?></td>
                    <td><?php echo $rec['cwsite'] ?></td>
                    <td>
                        <a href="Update_college.php?colid=<?php echo $rec['colid']?>"><i class="fa-regular fa-pen-to-square"></i></a>&nbsp;&nbsp;
                        <a href="delete_college.php?colid=<?php echo $rec['colid']?>"><i class="fa-solid fa-trash text-danger"></i></a>
                    </td> 
                </tr>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
        <?php
    }else{
        echo "No College details found";
    }
    ?>
</section>
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
