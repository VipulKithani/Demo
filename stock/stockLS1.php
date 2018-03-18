<?php
	$servername="LocalHost";
	$username="root";
	$password="";
	$dbname="stock";
	
	$conn=new mysqli($servername,$username,$password,$dbname);
	if($conn->connect_error)
	{
		die("connection failed".$conn->connect_error);
	}
	else 
		echo "<center>connected database successfully </center>";
	if(isset($_POST['signup']))
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$contact=$_POST['contact'];
		
		$sql="insert into signup values ('$name','$password','$email','$contact')";
		if ($conn->query($sql) === TRUE) {
				echo "<center>You have successfully registered.</center>";
			} 	
			else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
	}
?>
<html>
	<head>
		<title>Stock Management</title>
	<style>
		.header{
				padding:10px;
				margin :0px;
				text-align:center;
				height:15%;
				width:98%;
				background: linear-gradient(to bottom right, tomato, orange);
				text-shadow:white;
				border:5px solid gray;
			}
		.table{
			margin:50px 300px 0px 500px;
				position:center;
				height:300px;
				border:5px solid gray;
				padding:10px;
				
		}
		input[type=text], select {
				
				padding: 12px 20px;
				margin: 8px 0;
				display: inline-block;
				border: 1px solid #ccc;
				border-radius: 4px;
				box-sizing: border-box;
			}
		input[type=password], select {
			
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}
		input[type=submit] {
			width:100%;
			background-color: orange;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			}


	</style>
	</head>
	<body >
		<div class="header">
			<h1>Stock Management System</h1>
		</div>
		<div>
			<form  action="#" method="post">
				<table class="table">
					<tr>
					<th>Name:</th>
					<td><input type="text" name="name" placeholder="Enter your Name " required></td>
					</tr>
					<tr>
					<th>Password:</th>
					<td><input type="password" name="password" placeholder="Enter your password " required></td>
					</tr>
					<tr>
					<th>Email-Id:</th>
					<td><input type="text" name="email" placeholder="Enter your Email-Id " required></td>
					</tr>
					<th>Contact:</th>
					<td><input type="text" name="contact" placeholder="Enter your Contact " required></td>
					</tr>
					<tr>
					
					<td><input type="submit" name="signup" value="Sign-Up"></td>
					</tr>
					<tr>
					<th></th>
					<td>Already have an account?<br><a href="stocklog.php">Login</a></td>
					</tr>
				</table>
				
			</form>
			
		</div>
	</body>
</html>