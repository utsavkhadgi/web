<?php 
	include ('connection.php');

	$name=$_POST['username'];
	$pass=$_POST['password'];
	$sql="INSERT INTO userinfo(Username,Password) VALUES('$name','$pass')";


	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$address=$_POST['address'];
	$phone=$_POST['pnumber'];
	$sql="INSERT INTO details(Fname,Lname,Address,Phone) VALUES('$fname','$lname','$address',$phone)";

	$res=mysqli_query($conn,$sql);

	if ($res) {
		echo "success";
	}else{
		echo "error";
	}

 ?>