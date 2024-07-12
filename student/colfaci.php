<?php
require("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Colfaci</title>
</head>
<body>
<?php
require("navbar.php");
if(empty(isset($_POST['colid']))){
    header('location:colsearch.php');
  }
?>
    <?php
        $colid=$_POST['colid'];
        $_SESSION['colid']= $colid;
        $rsrc="SELECT * FROM rank WHERE colid=$colid";
        $rrs=mysqli_query($con, $rsrc) or die(mysqli_error($con));
        $dsrc="SELECT cd.*, d.* FROM cdegreefees cd INNER JOIN degree d ON cd.did=d.did WHERE colid=$colid";
        $drs=mysqli_query($con, $dsrc) or die(mysqli_error($con));
        $src="SELECT c.*, cf.* FROM college c INNER JOIN collegefacilities cf ON c.colid=cf.colid WHERE c.colid=$colid";
        $rs=mysqli_query($con, $src)or die(mysqli_error($con));
        if(mysqli_num_rows($rs)>0){
        ?>
        <?php
          while($rec=mysqli_fetch_assoc($rs)){
    ?>
    <div class="bradcam_area breadcam_bg overlay2 text-center">
    <h1 class="mt-2"><i class="fa fa-university"></i></h1>
        <h2 class="text-center mb-3" style="font-family:monospace;"><?php echo $rec['cname']?></h2>
        <h5><a href="<?php echo $rec['cwsite']?>" target="blank"><i class="fa fa-globe"></i> <?php echo $rec['cwsite']?></a></h5>
    </div>
    <div class="container">
        <div class="card">
                    <h5 class="text-center mt-3"><i class="fa fa-home"></i>Address : <?php echo $rec['cdist']?>,<?php echo $rec['ccity']?>, <?php echo $rec['cadd']?>, <?php echo $rec['cpin']?>, <i class="fa fa-phone"></i><a href="tel:9876543210"> <?php echo $rec['cphone']?></a></h5>
                    <hr class="bg-dark">
                    <center>
                        <div class="w-25 mt-3 text-center">
                            <h4 class="bg-light text-info"><marquee behavior="alternate"><i class="fa fa-laptop"></i>DESCRIPTION</marquee><h4>
                        </div>
                    </center>
                      <b><h5 class="text-muted"> <div class="card-body"><?php echo $rec['description']?></div> </h5></b>
                </div>
        </div>
        <!-- degreename -->
        <div class="container">
        <div class="row">
        <div class="container col-8">
        <table class="table table-striped table-condensed ">
            <thead>
            <tr>
                <th class="bg-dark text-white">Degree Name</th>
                <th class="bg-dark text-white">Number of Semester</th>
                <th class="bg-dark text-white">Degree Fees</th>
            </tr>
            </thead>
            <tbody>
                <?php
                while($drec=mysqli_fetch_assoc($drs)){
                    ?>
                    <tr>
                        <td><?php echo $drec['dname'] ?></td>
                        <td><?php echo $drec['cdsem'] ?></td>
                        <td>&#8377; <?php echo $drec['fees'] ?></td>
                </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
            </div>
        <div class="container col-4">
        <table class="table table-striped table-condensed ">
            <thead>
            <tr>
                <th class="bg-dark text-white">Rank Name</th>
                <th class="bg-dark text-white">This Year Rank</th>
            </tr>
            </thead>
            <tbody>
                <?php
                while($rrec=mysqli_fetch_assoc($rrs)){
                    ?>
                    <tr>
                        <td><?php echo $rrec['eexam'] ?></td>
                        <td><?php echo $rrec['rankupto'] ?></td>
                </tr>
                    <?php
                }
                ?>
            </tbody>

        </table>      
        </div>      
        </div>
            </div>
        <div class="container">
            <table class="table table-striped table-condensed ">
                <thead>
                    <tr>
                        <th class="bg-info text-white texr" colspan="3">Facilities Provided by '<?php echo $rec['cname']?>'</th>
                        <thclass="bg-info"></th>
                        <th class="bg-info text-white" >--Yes/No--</th>
                    </tr>
                </thead>
                <tbody>                    
                    <tr>
                        <th scope="row">1. Advance Lab for Various departmental Courses.</th>
                        <td></td>
                        <td></td>
                        <td><?php echo $rec['lab']?></td>
                    </tr>
                    <tr>
                        <th scope="row">2. Fully Air Conditioned Rooms.</th>
                        <td></td>
                        <td></td>
                        <td><?php echo $rec['ac']?></td>
                    </tr>
                    <tr>
                        <th scope="row">3. Internet and Wi-fi facility for All.</th>
                        <td></td>
                        <td></td>
                        <td><?php echo $rec['internet']?></td>
                    </tr>
                    <tr>
                        <th scope="row">4. Nutritious and Hygienic Food at our campus canteen</th>
                        <td></td>
                        <td></td>
                        <td><?php echo $rec['canteen']?></td>
                    </tr>
                    <tr>
                        <th scope="row">5. Anti Ragging Committee and Anti Ragging Squad as per the UGC guidelines.</th>
                        <td></td>
                        <td></td>
                        <td><?php echo $rec['ateam']?></td>
                    </tr>
                    <tr>
                        <th scope="row">6. Departmental Library.</th>
                        <td></td>
                        <td></td>
                        <td><?php echo $rec['library']?></td>
                    </tr>
                    <tr>
                        <th scope="row">7. Well-equipped Girls’ and Boys’ Hostels.</th>
                        <td></td>
                        <td></td>
                        <td><?php echo $rec['hostel']?></td>
                    </tr>
                    <tr>
                        <th scope="row">8. &nbsp; Approvals</th>
                        <td></td>
                        <td></td>
                        <td><?php echo $rec['approval']?></td>
                    </tr>
                    <tr>
                        <th scope="row">9. &nbsp;Affiliations</th>
                        <td></td>
                        <td></td>
                        <td><?php echo $rec['affiliated']?></td>
                    </tr>
                </tbody>
                
            </table>
        </div>
        <div class="col-12">

            <div class="col-12 d-flex justify-content-center mb-4">
            <form name="<?php echo $rec['cname']?>" action="applystudent.php" method="post">
                <input type="hidden" name="colid" value="<?php echo $rec['colid']?>">
                <input type="submit" class="btn btn-danger col-12" value="APPLY NOW">
            </form>
                <!-- <a href="applystudent.php" class="btn btn-danger col-3">APPLY NOW</a> -->
            </div>
        </div>
        <?php
            $_SESSION['colname']= $rec['cname'];
           }

        }
        ?>
<?php

require("footer.php")
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>