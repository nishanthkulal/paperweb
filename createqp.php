<?php
//Database connection file

include("includes/connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/bootstrap.min.css">
    <title>QP-generator</title>
</head>

<body>

    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    </head>

    <body>
        <div class="container">
            <!-- 	<h2 align="center">Dynamically Add or Remove input fields in PHP with JQuery</h2><br />
 -->
            <div class="form-group">
                <form name="add_name" id="add_name" method="post" >
                    <h2>Add Questions</h2></br>
                    <div class="table-responsive">

                        <input type="hidden" name="id" value="">
                        <table class="table table-bordered" id="dynamic_field">
                            <td>
                                <input type="text" name="qno[]" placeholder="Question No"
                                    class="form-control name_list" />
                            </td>
                            <td class="col-6"><input type="text" name="question[]" placeholder="Enter Question"
                                    class="form-control name_list" /></td>
                            <td>
                                <input type="text" name="mark[]" placeholder="Mark" class="form-control name_list" />
                            <td><button type="button" name="add" id="add" class="btn btn-success">Add</button></td>
                            </tr>

                        </table>

                        <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
                    </div>
                </form>

                <?php
if(isset($_POST['submit']))
{
    $qno = $_POST['qno'];
    $question = $_POST['question'];
    $mark = $_POST['mark'];

    $res = mysqli_query($db,"INSERT into qestions values ('$qno', '$question', '$mark')");
    if($res)
    {
        echo "Success";
    }
    else {
        echo "failed";
    }
}
?>
            </div>
        </div>
    </body>

    
    <script>
        $(document).ready(function () {
            var i = 1;
            $('#add').click(function () {
                i++;
                $('#dynamic_field').append('<tr id="row' + i + '"><td ><input type="text" name="qno[]" placeholder="Question No" class="form-control name_list" /></td><td><input type="text" name="question[]" placeholder="Enter Question" class="form-control name_list" /></td><td >	<input type="text" name="marks[]" placeholder="Enter Mark" class="form-control name_list" /></td> 	<td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">Remove</button></td></tr>');
            });

            $(document).on('click', '.btn_remove', function () {
                var button_id = $(this).attr("id");
                $('#row' + button_id + '').remove();
            });
        });
    </script>
</body>

</html>