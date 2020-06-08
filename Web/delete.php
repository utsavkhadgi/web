<?php 

$sn=$_GET['sn'];
include('connection.php');
$sql="DELETE FROM details WHERE SN=$sn";
$res=mysqli_query($conn,$sql);

if($res){
	header("Location:index.php");
}else{
	echo "Error";
}


 ?>