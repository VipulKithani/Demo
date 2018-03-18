
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

ul {
	list-style-type: none;
	margin: 10px;	
	width:98%;
	padding: 10px;
	overflow: hidden;
	background-color: #333;
}
li {
	float: left;
}
		
li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
li a:hover:not(.active) {
    background-color:gray ;
}
.right{
margin:-320px 0px 0px 900px;
border:5px solid black;
background:light gray;
height:300px;

}
.left{
margin:-390px 300px 0px 0px;
border:5px solid black;
background:light gray;
height:380px;

}

	.table{
			margin:20px 100px 0px 00px;
			width:850px;
				position:center;
				height:300px;
				border:5px solid gray;
				padding:10px;
				
		}
		input[type=text], select {
				
				padding: 12px 20px;
				margin: 8px 0;
				width:100%;
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
			<ul>
				<li><a href="additem.php">Add Item</a> </li>
				<li><a href="removeitem.php">Remove Item</a></li>
				<li><a href="displayitem.php">Display Items</a></li>
				<li><a href="#calstock" >Calculate Stock </a></li>
				<li  style="padding-left:500px"><a href="logout.php">Logout</a></li>
			</ul>
		</div>
			<form  action="#" method="post">
				<table class="table">
					<tr>
					<th>Name Of Item:</th>
					<td><input type="text" name="name" placeholder="Enter Name Of Item " required></td>
					</tr>
					<tr>
					<th>Quantity Of Item:</th>
					<td><input type="text" name="quantity" placeholder="Enter Quantity Of Item " required></td>
					</tr>
					<tr>
					<th>Price Of Item:</th>
					<td><input type="text" name="price" placeholder="Enter Price Of Item " required></td>
					</tr>
					
					<td><input type="submit" name="submit" value="submit"></td>
					</tr>
				</table>
				
			</form>
		<div>
			
		</div>
		<div class="right">
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
	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$quantity=$_POST['quantity'];
		$price=$_POST['price'];
		
		
		$sql="insert into additem values ('$name','$quantity','$price')";
		if ($conn->query($sql) === TRUE) {
				echo "<center>You have successfully Addded items in database.</center>";
			} 	
			else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
	}
?>

		</div>
		
	</body>
</html>