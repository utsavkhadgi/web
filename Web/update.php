<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php 
	$sn=$_GET['sn'];
	 ?>
	<form action="" method="post">

		First Name:<input type="text" name="fname"><br>
		Last Name:<input type="text" name="lname"><br>
		Address:<input type="text" name="address"><br>
		Phone:<input type="number" name="pnumber"><br>
		<input type="submit" name="Update">

		<?php 
			if ($_POST) {
			
			
			$fname=$_POST['fname'];
			$lname=$_POST['lname'];
			$add=$_POST['address'];
			$phn=$_POST['pnumber'];

			include('connection.php');
			$sql="UPDATE details set Fname='$fname',Lname='$lname',Address='$add',Phone=$phn WHERE SN=$sn";

			$res=mysqli_query($conn,$sql);

			if($res){
				header("Location:index.php");
			}else{
				echo "error";
			}

			}
		 ?>

	</form>


</body>
</html>