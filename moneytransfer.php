<!DOCTYPE html>
<html>
<head>
	<title>transfer money</title>
	<style>
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
			
			marquee{
			font-weight: 45px;
			font-size: 50px;
			font-family: Lucida Handwriting;
		}
		body{
			background-image: url('ig2.jfif');
			background-size: cover;
			background-repeat: no-repeat;
		}
		.b2{
			margin: 120px;
			border: 16px solid black;
			height: 463px;
			margin-top: 45px;
		}
		.b2 img {
            float: left;
            margin: 5px;
            width: 700px;
            height: 450px;
        }
        form{
        	float:center;
        	        }
        label{
margin-left: 78px;
font-family: Georgia;
font-weight: 27px;
font-size: 15px;

        }
        input{
        	margin-left: 108px;
        	width: 175px;
        	margin-bottom: 25px;
        }
        .blue{
        	background-color: powderblue;
        	color: black;
        	width: 290px;

        }
   
		
			
	</style>
</head>
<body>
		<div class="navbar">
<a href="http://localhost/bankdetails/homepage.html">Home</a>
<a href="http://localhost/bankdetails/customerdetails.php">customer details</a>
<a href="http://localhost/bankdetails/viewdetails.php">viewyourdetails</a>
<a href="http://localhost/bankdetails/moneytransfer.php" class="bg1">TransferMoney</a>
<a href="http://localhost/bankdetails/view.php">Transaction history</a>
</div>
<marquee> WELCOME...HERE YOU CAN TRANSFER MONEY</marquee>
<h1 style="font-size: 45px; font-weight: 40px;font-family: italic;text-align: center; color:#C00000">MONEY TRANSFER</h1>
<div class="b2">
	<div>
		<img src="ig3.jfif">
	</div>
<form action="http://localhost/bankdetails/transfer.php" method="POST">
	<br><label for="sname"><b>NAME OF THE SENDER:</b></label><br><br>
	<input type="text" name="sname" id="sname"><br>
	<label for="sacntno"><b>SENDER ACCOUNT NO:</b></label><br><br>
	<input type="number" name="sacntno" id="sacntno"><br>
	<label for="rname"><b>NAME OF THE RECIEVER:</b></label><br><br>
	<input type="text" name="rname" id="rname"><br>
	<label for="racntno"><b> RECIEVER ACCOUNT NO:</b></label><br><br>
	<input type="number" name="racntno" id="racntno"><br>
	<label for="amnt"><b> ENTER THE AMOUNT</b></label><br><br>
	<input type="number" name="amnt" id="amnt"><br>

	<input type="submit" name="Transfer" value="Transfer" class="blue">
	
</div>
</form>

</body>
</html>