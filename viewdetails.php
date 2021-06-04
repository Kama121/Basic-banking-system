<!DOCTYPE html>
<html>
<head>
	<title>your details</title>
	<style>
		body{
			background-image: url('dwn1.jfif');
			background-size: cover;
			background-repeat: no-repeat;
		}
		form{
			width: 600px;
			margin: 25px;
			border: 2px solid black;
			padding: 1em;
			height: 120px;
			margin-left: 270px;
			margin-top: 50px;

		}
		ul{
			list-style-type: none;
		  padding: 0;
  margin: 0;
}

form li + li {
  margin-top: 2.5em;
}

label {
  
  
  width: 90px;
  text-align: right;
}
input {
 
  font: 1em sans-serif;

  width: 300px;
  
  border: 1px solid #999;
}

input:focus,
 {
 
  border-color: #000;
}
.bg3{
	width: 75px;
	text-align: center;
	border:  1px solid black;
	margin-left: 145px;

}
.bg2{
	width: 75px;
	border: 1px solid black;
	margin-right: 45px;
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
			h4{
				font-weight: 35px;
				font-family: italic;
				text-align: center;
				color: #ffffff;
			}
			h4:hover{
				background-color: blue;
			}
	</style>

</head>
<body>
	<div class="navbar">
<a href="http://localhost/bankdetails/homepage.html">Home</a>
<a href="http://localhost/bankdetails/customerdetails.php" >customer details</a>
<a href="http://localhost/bankdetails/viewdetails.php"class="bg1">viewyourdetails</a>
<a href="http://localhost/bankdetails/moneytransfer.php">TransferMoney</a>
<a href="http://localhost/bankdetails/view.php">Transaction history</a>
</div>

	<form action="" method="post">
		<ul>
			<li>
	<label for="name"> ENTER YOUR NAME:</label>	
		<input type="text" name="name" id="name"><br></li>
		<li>
<label for="accountno"> ENTER YOUR ACCOUNT NUMBER:</label>
	<input type="number"  name="accountno" id="accountno"><br>
	<br><input type="submit" name="submit" name="submit" class=" bg3">
	<input type="reset" name="reset" name="reset" class="bg2">

	</li>
	
</ul>

	</form>
	<?php
	if (isset($_POST['submit'])) {
		
		$host="localhost";
	$user="root";
	$password="";
	$dbname="bankdetails";
	$acnt=$_POST['accountno'];
	$con=mysqli_connect($host,$user,$password,$dbname);
	if($con==false)
	{
		die("ERROR:Could not Connect.".mysqli_connect_error());
	}
	$sql="select* from  customer_details";
	$x=mysqli_query($con,$sql);
	for(;$row=mysqli_fetch_assoc($x);)
	{
		if($row['AccountNo']==$acnt)
		{
			echo " <h4> NAME:".$row['Name']."</h4><br>";
			echo " <h4> Email-id:".$row['Email-id']."</h4><br>";
            echo " <h4> Mobilenumber:".$row['Mobilenumber']."</h4><br>";
            echo " <h4> Age:".$row['Age']."</h4><br>";
            echo " <h4> Branch:".$row['Branch']."</h4><br>";
            echo " <h4> Statename:".$row['Statename']."</h4><br>";
            echo " <h4> City:".$row['City']."</h4><br>";
            echo " <h4> Amount:".$row['Amount']."</h4><br>";
          

		}
	}
}

	?>

</body>
</html>