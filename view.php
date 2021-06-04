<!DOCTYPE html>
<html>
<head>
	<title>views</title>
	<style>
		body{
			background-image: url('ig1.jfif');
			background-repeat: no-repeat;
			background-size: cover;
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
				background-color: #A00000 ;
			}
	</style>
</head>
<body>
		<div class="navbar">
<a href="http://localhost/bankdetails/homepage.html">Home</a>
<a href="http://localhost/bankdetails/customerdetails.php">customer details</a>
<a href="http://localhost/bankdetails/viewdetails.php">viewyourdetails</a>
<a href="http://localhost/bankdetails/moneytransfer.php">TransferMoney</a>
<a href="http://localhost/bankdetails/view.php" class="bg1">Transaction history</a><br>
</div>
<h1 style="font-size: 45px; font-weight: 40px;font-family: italic;text-align: center; color:#C00000">Transaction history</h1>
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
	$sql="select * from transaction";
	$query=mysqli_query($con,$sql);
	if(!$query)
	{
		die("ERROR:Could not Connect.".mysqli_connect_error());
	}
	echo  " <br> <table>
	<tr>
	<br><th>SenderName</th>
<th>SenderAccountNo</th>
<th>RecieverName</th>
<th>RecieverAccountNo</th>
<th>Amount</th>
</tr>";
while ($row=mysqli_fetch_array($query)) {
	
	echo "<tr>
	<td>".$row['SenderName']."</td>
	<td>".$row['SenderAccountNo']."</td>
	<td>".$row['RecieverName']."</td>
	<td>".$row['RecieverAccountNo']."</td>
	<td>".$row['Amount']."</td>
	</tr>";
}

	mysqli_close($con)
	?>

	

</body>
</html>