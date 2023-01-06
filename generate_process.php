

<?php
session_start();

include("includes/connection.php");
$data=$_POST;
echo "<pre>";
// echo "123";
var_dump($data);
$name = $_POST['papername'];
$sub = $_POST['sub'];
$e_name = $_POST['e_name'];
// $sql= "INSERT INTO `questions` (`papername`,`sub`,`e_name`,`no`,`subno`,`question`,`mark`) VALUES ('$name','$sub','$e_name','{$_POST['no'][$i]}','{$_POST['subno'][$i]}','{$_POST['question'][$i]}','{$_POST['mark'][$i]}')";
// print_r($sql);
// $result=($db->query($sql));

$count = count($_POST['no']);

for($i=0; $i <$count; $i++){
$sql= "INSERT INTO `questions` (`papername`,`sub`,`e_name`,`no`,`subno`,`question`,`mark`) VALUES ('$name','$sub','$e_name','{$_POST['no'][$i]}','{$_POST['subno'][$i]}','{$_POST['question'][$i]}','{$_POST['mark'][$i]}')";
print_r($sql);
$result=($db->query($sql));

 if ($result) 
    {
     echo "<script>alert('Success : Question Added Successfully.')</script>";
echo "<script>window.location.href='generate_paper.php'</script>";  
    } 


}

?>