<!DOCTYPE html>
<html>
<head>
	<title> Customerdetails</title>
	<style>
		body{
			background-image: url('bg11.jfif');
			background-size:cover; 
			background-repeat: no-repeat;
		}
		marquee{
			font-weight: 45px;
			font-size: 50px;
			font-family: Lucida Handwriting;
		}
		table{
			text-align: center;
			border:4px solid black;
			border-collapse: collapse;
			width: 100%;
			height: 100px;
		}
		th{
			border-collapse: collapse;
			border: 4px solid black;
			font-family: Brush Script MT;
			font-weight: 35px;
			font-size: 45px;
			height: 45px;
			width: 60px

		}
		th:hover{
			background-color: blue;
		}
		td{
			border-collapse: collapse;
			border: 4px solid black;
			width: 60px;
			height: 45px;
			font-size:20px;
			font-weight:67px;
			font-family: oblique;	 
			color:	#A00000 ;

		}
		td:hover{
			background-color:#F08080;
		}
		.navbar{
			background-color: black;
			background-width:cover;
			background-size: 120px;
			width: 100%;
			min-height: 25px;
			display: inline-block;

			

		}
		.navbar a{
		  font-family: verdana;
			color: white;
			text-decoration: none;
			font-size: 25px;
padding-left: 100px;
text-align: center;

		}
		.navbar a:hover{
			background-color: grey;

							}
			.bg1 {
				background-color: 	#A00000 ;
			}
		
	</style>
</head>
<body>
	<div class="navbar">
<a href="http://localhost/bankdetails/homepage.html">Home</a>
<a href="http://localhost/bankdetails/customerdetails.php" class="bg1">customer details</a>
<a href="http://localhost/bankdetails/viewdetails.php">viewyourdetails</a>
<a href="http://localhost/bankdetails/moneytransfer.php">TransferMoney</a>
<a href="http://localhost/bankdetails/view.php">Transaction history</a>
</div>
	<marquee> WELCOME TO CUSTOMER DETAILS PAGE... HERE IS OUR LIST OF CUSTOMERS</marquee>
	<?php
	$host="localhost";
	$user="root";
	$password="";
	$dbname="bankdetails";
	$con=mysqli_connect($host,$user,$password,$dbname);
	if($con==false)
	{
		die("ERROR:Could not Connect.".mysqli_connect_error());
	}
	$sql="select * from customer_details";
	$query=mysqli_query($con,$sql);
	if(!$query)
	{
		die("ERROR:Could not Connect.".mysqli_connect_error());
	}
	echo  " <br> <table>
	<tr>
	<th>Name</th>
<th>Email-id</th>
<th>Mobilenumber</th>
<th>AccountNo</th>
<th>Age</th>
<th>Branch</th>
<th>Statename</th>
<th>City</th>
<th>Amount</th>
</tr>";
while ($row=mysqli_fetch_array($query)) {
	
	echo "<tr>
	<td>".$row['Name']."</td>
	<td>".$row['Email-id']."</td>
	<td>".$row['Mobilenumber']."</td>
	<td>".$row['AccountNo']."</td>
	<td>".$row['Age']."</td>
	<td>".$row['Branch']."</td>
	<td>".$row['Statename']."</td>
	<td>".$row['City']."</td>
	<td>".$row['Amount']."</td>
	</tr>";
}

	mysqli_close($con);
	?>


</body>
</html>