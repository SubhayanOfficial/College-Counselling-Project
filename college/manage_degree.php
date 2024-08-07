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
                        <h1 class="mt-4">Manage Degree</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Manage Degree</li>
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
    $colid=$_SESSION['cinfo']['colid'];
    $src="SELECT cdf.*, d.dname FROM cdegreefees cdf INNER JOIN degree d ON cdf.did=d.did WHERE cdf.colid=$colid";
    $rs=mysqli_query($con, $src)or die(mysqli_error($con));
    if(mysqli_num_rows($rs)>0){
        ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Course Name</th>
                    <th>Total No. of Semester</th>
                    <th>Total Fees</th>
                    <th> Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
            while($rec=mysqli_fetch_assoc($rs)){
                ?>
                <tr>
                    <td><?php echo $rec['dname'] ?></td>
                    <td><?php echo $rec['cdsem'] ?></td>
                    <td><?php echo $rec['fees'] ?></td>
                    <td>
                        <a href="update_degree.php?cdfid=<?php echo $rec['cdfid']?>"><i class="fa-regular fa-pen-to-square"></i></a>&nbsp;&nbsp;
                        <a href="delete_degree.php?cdfid=<?php echo $rec['cdfid']?>"><i class="fa-solid fa-trash text-danger"></i></a>
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
        echo "No Degree details found";
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
