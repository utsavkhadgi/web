<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style type="text/css">
		table,tr,td,th{
			border: 1px solid black;
			border-collapse: collapse;
			padding: 15px;
		}

		td,th{
			width: 200px;
		}

		th{
			background-color: aqua;
		}

	</style>
</head>
<body>
	<form action="insert.php" method="post">
	username:<input type="text" name="username"><br>
	password:<input type="text" name="password"> <br><br>
	<hr><br>
	
		First Name:<input type="text" name="fname"><br>
		Last Name:<input type="text" name="lname"><br>
		Address:<input type="text" name="address"><br>
		Phone:<input type="number" name="pnumber"><br>
		<input type="submit" name="save">

		<br> <hr>
		<table>
			<tr>
				<th>S.N</th>
				<th>Fname</th>
				<th>Lname</th>
				<th>Address</th>
				<th>Phone</th>
				<th>Actions</th>
			</tr>

			<?php 
				$provider="localhost";
$user="root";
$pass="";
$dbname="students";
$conn=mysqli_connect($provider,$user,$pass,$dbname);
				$sql="SELECT * FROM details";
				$res=mysqli_query($conn,$sql);

				while($ans=mysqli_fetch_assoc($res)){

						$sn=$ans['SN'];
						$fname=$ans['Fname'];
						$lname=$ans['Lname'];
						$address=$ans['Address'];
						$phn=$ans['Phone'];
					
					?>

					<tr>
						<td> <?php echo $sn ?> </td>
						<td> <?php echo $fname ?></td>
						<td> <?php echo $lname ?></td>
						<td> <?php echo $address ?></td>
						<td> <?php echo $phn ?></td>
						<td> 
							<a href="update.php?sn=<?php echo $sn; ?>">Update</a>
							<a href="delete.php?sn=<?php echo $sn; ?>">Delete</a>
						</td>
					</tr>

					<?php 
						}	
					 ?>
				
					<br><br><br> <br>

					 <tr>
					 	<th>S.N</th>
					 	<th>Username</th>
					 	<th>Password</th>
					 </tr>

					 <?php  
					include("connection.php");
						$sql="SELECT * FROM userinfo";
						$res=mysqli_query($conn,$sql);

						while($anss=mysqli_fetch_assoc($res)){

								$snn=$anss['SN'];
								$uname=$anss['Username'];
								$pass=$anss['Password'];

							?>	
							<tr>
								<td> <?php echo $snn ?> </td>
								<td> <?php echo $uname ?></td>
								<td> <?php echo $pass ?></td>
							</tr>

							<?php } ?>

							
					

		</table>

	</form>



</body>
</html>