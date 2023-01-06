<?php
include('includes/connection.php');
$id = $_GET['id'];
$sql1 = "SELECT * FROM questions where papername='$id' AND no='1' ";
// echo"$sql1";
$result1 = mysqli_query($db,$sql1);

// ------------------------------------------------------------------------------------------------

$sql7 = "SELECT * FROM questions where papername='$id' AND no='2'";
// echo"$sql1";
$result7 = mysqli_query($db,$sql7);

// ------------------------------------------------------------------------------------------------------

$sql3 = "SELECT * FROM questions where papername='$id' AND no='3' ";
// echo"$sql1";
$result3 = mysqli_query($db,$sql3);
// -------------------------------------------------------------------------------------------------------

$sql4 = "SELECT * FROM questions where papername='$id' AND no='4' ";
// echo"$sql1";
$result4 = mysqli_query($db,$sql4);
// -------------------------------------------------------------------------------------------------------

$sql5 = "SELECT * FROM questions where papername='$id' AND no='5' ";
// echo"$sql1";
$result5 = mysqli_query($db,$sql5);
// -------------------------------------------------------------------------------------------------------
$sql6 = "SELECT * FROM questions where papername='$id' AND no='6' ";
// echo"$sql1";
$result6 = mysqli_query($db,$sql6);
// -------------------------------------------------------------------------------------------------------



// $row2 = mysqli_fetch_assoc($result1);

// //$sql = "SELECT * FROM qstn";
// $result = mysqli_query($db,"select * from qstn");

?>
<?php
include('includes/connection.php');
$id = $_GET['id'];
$sql2 = "SELECT * FROM questions where papername='$id'";
// echo"$sql1";
$result2 = mysqli_query($db,$sql2);

$row2 = mysqli_fetch_assoc($result2);

// //$sql = "SELECT * FROM qstn";
// $result = mysqli_query($db,"select * from qstn");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="styles/bootstrap.min.css">
  <style>
.tdz{
  font-size: 1.20em;
}
.bdr{
  
}

  </style>
  
</head>
<body >
  <div class="bdr">

<div class="container mt-3">
                  <div class="myDiv text-center" >
                  <!-- &nbsp;    &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;    &nbsp;    &nbsp;    &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;    &nbsp;   &nbsp;   &nbsp;  -->
                    <img class="center" src="ajlogo.png" alt="image" width="950px" height="95px" >
              </div>
            <div class="text-center "><h5>DEPARTMENT OF COMPUTER SCIENCE AND ENGINEERING</h5></div>
            <div class="text-center "><h5>V SEMESTER B.E.DEGREE</h5></div>
            <div class="text-center"><h5><?php echo $row2['e_name']; ?></h5></div>

              <div class="text-center"><h5><?php echo $row2['sub']; ?></h5></div>
              <hr>
              <div class="text-center">Note : Answer any three full questions, selecting at least ONE question from each part </div> <br>
  <h5 class="text-center">PART A</h5>
  <table class="table table-bordered">
  
  <thead>
      <tr> 
      <?php
        
        while($row = mysqli_fetch_assoc($result1))
        {
        ?>
          <td class="text-center tdz"> 1</td> 

         <td class=" tdz" ><?php echo $row['subno']; ?></td>
        <td class=" tdz" ><?php echo $row['question']; ?></td>
       <td class="text-center tdz"><?php echo $row['mark']; ?> M</td>
       <tr></tr>


        <?php
        }
        
        
        ?>
</tr>

    </tbody>
    
  </table>
  <!-- ------------------------------------------------------------------------------------------------ -->

  <h5 class="text-center">OR</h5>
  <table class="table table-bordered">
  
  <thead>
      <tr> 
      <?php
        
        while($row = mysqli_fetch_assoc($result7))
        {
        ?>
          <td class="text-center tdz">2</td> 

          <td class=" tdz" ><?php echo $row['subno']; ?></td>
        <td class=" tdz" ><?php echo $row['question']; ?></td>
       <td class="text-center tdz"><?php echo $row['mark']; ?> M</td>
       <tr></tr>

        <?php
        }
        
        
        ?>
</tr>

    </tbody>
    
  </table>
  <!-- ----------------------------------------------------------------------------------------------- -->

  <h5 class="text-center">PART B</h5>
  <table class="table table-bordered">
  
  <thead>
      <tr> 
      <?php
        
        while($row = mysqli_fetch_assoc($result3))
        {
        ?>
          <td class="text-center tdz"> 3</td> 

         <td class=" tdz" ><?php echo $row['subno']; ?></td>
        <td class=" tdz" ><?php echo $row['question']; ?></td>
       <td class="text-center tdz"><?php echo $row['mark']; ?> M</td>
       <tr></tr>


        <?php
        }
        
        
        ?>
</tr>

    </tbody>
    
  </table>
   <!-- ------------------------------------------------------------------------------------------------ -->

   <h5 class="text-center">OR</h5>
  <table class="table table-bordered">
  
  <thead>
      <tr> 
      <?php
        
        while($row = mysqli_fetch_assoc($result4))
        {
        ?>
          <td class="text-center tdz"> 4</td> 

         <td class=" tdz"   ><?php echo $row['subno']; ?></td>
        <td class=" tdz" ><?php echo $row['question']; ?></td>
       <td class="text-center tdz"><?php echo $row['mark']; ?> M</td>
       <tr></tr>


        <?php
        }
        
        
        ?>
</tr>

    </tbody>
    
  </table>
   <!-- ------------------------------------------------------------------------------------------------ -->

   <h5 class="text-center">PART C</h5>
  <table class="table table-bordered">
  
  <thead>
      <tr> 
      <?php
        
        while($row = mysqli_fetch_assoc($result5))
        {
        ?>
          <td class="text-center tdz">5</td> 

         <td class=" tdz"  ><?php echo $row['subno']; ?></td>
        <td class=" tdz" ><?php echo $row['question']; ?></td>
       <td class="text-center tdz"><?php echo $row['mark']; ?> M</td>
       <tr></tr>


        <?php
        }
        
        
        ?>
</tr>

    </tbody>
    
  </table>
   <!-- ------------------------------------------------------------------------------------------------ -->
   <h5 class="text-center">OR</h5>
  <table class="table table-bordered">
  
  <thead>
      <tr> 
      <?php
        
        while($row = mysqli_fetch_assoc($result6))
        {
        ?>
          <td class="text-center tdz">6</td> 

         <td class=" tdz"  ><?php echo $row['subno']; ?></td>
        <td class=" tdz" ><?php echo $row['question']; ?></td>
       <td class="text-center tdz"><?php echo $row['mark']; ?> M</td>
       <tr></tr>


        <?php
        }
        
        
        ?>
</tr>

    </tbody>
    
  </table>
   <!-- ------------------------------------------------------------------------------------------------ -->


   </div>
  
  <input type="button" class="btn btn-primary" value="Print" onclick="printPage();"></input>

</div>


</body>
<script language="javascript">
    function printPage() {
        window.print();
    }
</script>
</html>
