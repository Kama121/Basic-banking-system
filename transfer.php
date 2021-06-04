<!DOCTYPE html>
<html>
<head>
	<title>tranfer</title>
	<style>
		body{
			background-image: url('transaction.jfif');
			background-repeat: no-repeat;
			background-size: 200%;
	</style>
</head>
<body>
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
	if(isset($_POST['Transfer']))
			{
			$u1=$_POST['sname'];
			$u2=$_POST['rname'];
			$amt=$_POST['amnt'];


			if($u1!="" && $u2!="" && $amt!="")
			{
			
				$query1= "UPDATE  customer_details SET Amount= Amount+ '$amt' WHERE Name = '$u2' ";
				$data1= mysqli_query($con, $query1);
				$query2= "UPDATE customer_details SET Amount= Amount  - '$amt' WHERE Name = '$u1' ";
				$data2= mysqli_query($con, $query2);
			
	 $sname =  $_REQUEST['sname'];
	  $sacntno =  $_REQUEST['sacntno'];
	   $rname=  $_REQUEST['rname'];
	    $racntno =  $_REQUEST['racntno'];
	     $amnt =  $_REQUEST['amnt'];
	     $sql = "INSERT INTO transaction (SenderName,SenderAccountNo,RecieverName,	RecieverAccountNo,Amount) VALUES ('$sname', '$sacntno', '$rname','$racntno','$amnt')";
	     if (mysqli_query($con,$sql)) {
	     	echo '<script>alert("Transaction Successfull")</script>';
	     	
	     }
	     else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
}
}

	   mysqli_close($con);
	?>
<h1 style="font-size: 45px; font-weight: 40px;font-family: italic;text-align: center; color:#C00000">YOUR TRANSACTION WAS SUCCESSFULL</h1>
<h1 style="font-size: 45px; font-weight: 40px;font-family: italic;text-align: center; color:#C00000">KEEP VISTING</h1>
</body>
</html>