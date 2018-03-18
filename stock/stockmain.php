
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
margin:10px 0px 0px 900px;
border:5px solid black;
background:light gray;
height:380px;

}
.left{
margin:-390px 480px 0px 0px;
border:5px solid black;
background:light gray;
height:380px;

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
				<li><a href="#removeitem">Remove Item</a></li>
				<li><a href="#displayitem">Display Items</a></li>
				<li><a href="#calstock" >Calculate Stock </a></li>
				<li  style="padding-left:500px"><a href="logout.php">Logout</a></li>





			</ul>
		</div>
		<div class="right">
		
			About
			<?php
    session_start(); // needs to be before anything else on page to use $_SESSION
    // this page outputs the textarea1 from the session IF it exists
     // set var to avoid errors
    if(isset($_SESSION['name'])){
        $name = $_SESSION['name'];
		echo "Welcome".$name;
    }
?>

		</div>
		<div class="left">
		<img class="mySlides" src="http://btcit.org/images/btcit_stock_managment/jhfhf.jpg" style="width:100%;height:380px" >
		<img class="mySlides" src="https://mediagurucdn.azureedge.net/wp-content/uploads/2013/06/ekonomika_byznys1.jpg?v=1" style="width:100%;height:380px">
		<img class="mySlides" src="https://www.brsoftech.com/br-stock-management/images/kiscontact_se1.jpg" style="width:100%;height:380px">
		<script>
			var myIndex = 0;
			carousel();

			function carousel() {
			var i;
			var x = document.getElementsByClassName("mySlides");
			for (i = 0; i < x.length; i++) {
			x[i].style.display = "none";  
			}
			myIndex++;
			if (myIndex > x.length) {myIndex = 1}    
			x[myIndex-1].style.display = "block";  
			setTimeout(carousel, 3000); // Change image every 3 seconds
			}
		</script>
			
		</div>
		
	</body>
</html>