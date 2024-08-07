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
        <title>View Sloved Feedbacks</title>
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
                        <h1 class="mt-4">View Solved Feedbacks</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">View Solved Feedbacks</li>
                        </ol>
                        <?php
                            $src="SELECT * FROM feedback";
                            $rs=mysqli_query($con, $src)or die(mysqli_error($con));
                            if(mysqli_num_rows($rs)>0){
                        ?>
        <table class="table table-bordered">
            <thead class="text-center bg-secondary h5 text-white">
                <tr>
                    <th>User Name</th>
                    <th>Email-ID</th>
                    <th>Message</th>
                    <th>Feedback Date</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
            <?php
            while($rec=mysqli_fetch_assoc($rs)){
                ?>
                <tr>
                    <td><?php echo $rec['name'] ?></td>
                    <td><?php echo $rec['email'] ?></td>
                    <td><?php echo $rec['message'] ?></td>
                    <td><?php echo $rec['feeddate'] ?></td>
                    <td><?php echo $rec['status'] ?></td>
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
        <script src="js/jquery.js"></script>
        <script>
            function agree(fedid){
                $.ajax({
                    method: 'GET',
                    url:'feedagree.php',
                    data:{
                        fedid:fedid
                    },
                    success:function(res){
                        alert(res);
                        location.reload(true);
                    }
                })
            }
            function dontagree(fedid){
                $.ajax({
                    method: 'GET',
                    url:'feeddontagree.php',
                    data:{
                        fedid:fedid
                    },
                    success:function(res){
                        alert(res);
                        location.reload(true);
                    }
                })
            }
        </script>
    </body>
</html>
