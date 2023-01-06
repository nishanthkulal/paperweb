<?php
include('includes/connection.php');
// $id = $_GET['id'];
$sql1 = "SELECT * from questions GROUP BY `papername`";
// echo"$sql1";
$result1 = mysqli_query($db,$sql1);




// $row2 = mysqli_fetch_assoc($result1);

// //$sql = "SELECT * FROM qstn";
// $result = mysqli_query($db,"select * from qstn");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>QP list</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="styles/bootstrap.min.css">
  
</head>
<body>
<div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="#"
                        class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">QP-generator</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                        id="menu">
                        <li class="nav-item">
                            <a href="home.html" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="generate_paper.php" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline"> create qp
                                </span> </a>
                        </li>
                        <li>
                            <a href="qpaper.php" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">view qp
                                    Requests</span></a>
                        </li>
                    </ul>
                    <hr>
                </div>
            </div>
            <div class="col py-3">

<div class="container mt-3">




      <?php
        
        while($row = mysqli_fetch_assoc($result1))
        {
        ?>
           <div class="col py-3">
                <div class="row">
                    <div class="col-sm-3">
                     <!-- <div class="col-sm-6"> -->
                        <div class="card bg-dark text-white">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['papername']; ?></h5>
                                <div class="text-right">
                                <a href="qpaperdisplay.php?id=<?php echo $row['papername']; ?>" class="btn btn-primary ">click</a>
                                </div>
                            </div>
                        </div>
                    </div>

</div>
</div>
        <?php
        }
        
        
        ?>



  

</div>

</div>
    </div>
</body>
<script language="javascript">
    function printPage() {
        window.print();
    }
</script>
</html>
