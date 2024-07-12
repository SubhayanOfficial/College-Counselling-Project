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
        <title>apply student Details</title>
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
                        <h1 class="mt-4">Apply Student Details</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">manage_student</li>
                        </ol>
                        <section class="container">
                        <?php
                        $colid=$_SESSION['cinfo']['colid'];
                        $src="SELECT cdf.*, s.*, d.dname FROM applystudent cdf INNER JOIN studetails s ON cdf.sid=s.sid INNER JOIN degree d ON cdf.did=d.did WHERE cdf.colid='$colid'";
                        $rs=mysqli_query($con, $src)or die(mysqli_error($con));
                        // $rec=mysqli_fetch_assoc($rs);
                        if(mysqli_num_rows($rs)>0){
                            ?>
                        <table class="table table-bordered">
                            <thead class="bg-dark text-white">
                                <th>Student Name</th>
                                <th>Aadhhar No.</th>
                                <th>Entrance Exam</th>
                                <th>Rank</th>
                                <th>Apply Degree</th>
                                <th>Apply Date</th>
                                <th>Status</th>
                            </thead>
                            <tbody>
                            <?php
                                while($rec=mysqli_fetch_assoc($rs)){
                            ?>
                                <tr>
                                    <td><?php echo $rec['name'] ?></td>
                                    <td><?php echo $rec['aadhaar']?></td>
                                    <td><?php echo $rec['eexam']?></td>
                                    <td><?php echo $rec['rank']?></td>
                                    <td><?php echo $rec['dname']?></td>
                                    <td><?php echo $rec['ap_date']?></td>
                                    <td><?php echo $rec['status']?></td>
                                </td>
                                </tr>
                                <?php
                                    }
                                    ?>
                            </tbody>
                        </table>
                        <?php
            }else{
                echo "No facilities details found";
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
        <script src="js/jquery.js"></script>
    </body>
</html>
