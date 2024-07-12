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
        <title>View Student</title>
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
                        <h1 class="mt-4">Registered Student Data</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Registered Student Data</li>
                        </ol>
                        <?php
                            $src="SELECT * FROM studetails";
                            $rs=mysqli_query($con, $src)or die(mysqli_error($con));
                            if(mysqli_num_rows($rs)>0){
                        ?>
        <table class="table table-bordered">
            <thead class="text-center bg-dark h5 text-white">
                <tr>
                    <th>Student Name</th>
                    <th>Aadhaar Number</th>
                    <th>Email-ID</th>
                    <th>PassWord</th>
                </tr>
            </thead>
            <tbody>
            <?php
            while($rec=mysqli_fetch_assoc($rs)){
                ?>
                <tr>
                    <td><?php echo $rec['name'] ?></td>
                    <td><?php echo $rec['aadhaar'] ?></td>
                    <td><?php echo $rec['semail'] ?></td>
                    <td><?php echo $rec['spass'] ?></td>
                </tr>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
        <?php
    }else{
        echo "No Student's details found";
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
