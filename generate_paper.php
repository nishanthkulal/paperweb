<?php
//Database connection file
session_start();
include("includes/connection.php");
 

?>

<?php


error_reporting(0);

   $sql = "SELECT * FROM `type`";
    $all_types = mysqli_query($db,$sql);

          $sql = "SELECT * FROM `meterials`";
    $all_meterials = mysqli_query($db,$sql);


    ?>

<html>
	<head>
<link rel="stylesheet" href="styles/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
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
                                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">view qp</span></a>
                        </li>
                    </ul>
                    <hr>
                </div>
            </div>
	<div class="container">
<!-- 	<h2 align="center">Dynamically Add or Remove input fields in PHP with JQuery</h2><br />
 -->	<div class="form-group">
<form name="add_name" id="add_name" method="post" action="generate_process.php">
	<h2>Add Questions</h2></br>
<div class="table-responsive">
	  
                <input type="hidden" name="id" value="<?php echo($_SESSION["id"]); ?>">
				<input type="text" name="papername" placeholder="Qpaper" class="form-control name_list" width="50%"/>
				<br>

<select name="e_name" class="form-control name_list">
	<option>First Internal Assessment Test</option>
	<option>Second Internal Assessment Test</option>
	<option>Third Internal Assessment Test</option>
</select>
<br>
<select name="sub" class="form-control name_list">
	<option>MANAGEMENT AND ENTEREPRENURSHIP FOR IT INDUSTRY (18CS51)</option>
	<option>COMPUTERNETWORKS AND SECRITY (18CS52)</option>
	<option>DATABASE MANAGEMENT SYSTEM (18CS53)</option>
	<option>AUTOMATA THEORY AND COMPUTABILITY (18CS54)</option>
	<option>APPLICATION DEVELOPMENT USING PYTHON (18CS55)</option>
	<option>UNIX PROGRAMMING (18CS56)</option>
</select>
<br>
<!-- <input type="date" name="date" class="form-control name_list"> -->
				

<table class="table table-bordered" id="dynamic_field">





<td >
<input type="text" name="no[]" placeholder="Question No" class="form-control name_list" />
</td>
<td >
	<input type="text" name="subno[]" placeholder="subno" class="form-control name_list" />
</td>	
<td class="col-6">


<!-- 	<input type="text" name="question[]" placeholder="Enter Question" class="form-control name_list" />
 --><textarea name="question[]" placeholder="Enter Question" class="form-control name_list"></textarea>
</td>
<td >	
<input type="text" name="mark[]" placeholder="Mark" class="form-control name_list" />
</td>	

<td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
</tr>

</table>

<input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
</div>
				</form>
			</div>
		</div>
		</div>
    </div>
	</body>
<script>
$(document).ready(function(){
	var i=1;
	$('#add').click(function(){
	i++;
	$('#dynamic_field').append('<tr id="row'+i+'"><td ><input type="text" name="no[]" placeholder="Question No" class="form-control name_list" /> <td ><input type="text" name="subno[]" placeholder="subno" class="form-control name_list" /></td> </td><td><textarea name="question[]" placeholder="Enter Question" class="form-control name_list"></textarea></td><td >	<input type="text" name="mark[]" placeholder="Mark" class="form-control name_list" /></td>	<td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">Remove</button></td></tr>');
	});
	
$(document).on('click', '.btn_remove', function(){
var button_id = $(this).attr("id"); 
$('#row'+button_id+'').remove();
	});
});
</script>
</html>