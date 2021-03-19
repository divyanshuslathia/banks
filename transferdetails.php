<html>
	<head>
		<title>GRIP</title>
		<link rel="stylesheet" href="style2.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
	</head>

	<body style="background-color: #009D7E;">
	<div class="topnav">
  
  <div class="topnav-right">
  	<a class="active" href="index.php">HOME</a>
  <a class="active" href="transferdetails.php">TRANSACTION HISTORY</a>
  <a class="active" href="viewusers.php">USERS</a>
   <a class="active" href="about.php">ABOUT US</a>


  </div>
</div>
</div>  <br><br><br><br><br>
<table class="viewusers">
	<center><h1>Transaction History</h1></center>
	<tr>
		<th>Sender</th>
		<th>Reciever</th>
		<th>Amount</th>
	</tr>
	<?php
	$conn = mysqli_connect("localhost", "root", "", "bank");
	if($conn-> connect_error){
		die("connection failed:". $conn-> connect_error);
	}

	$sql = "SELECT * FROM transfers";
	$result = $conn-> query($sql);

	if($result-> num_rows > 0){

		while ( $row = $result -> fetch_assoc()) {
			echo "<tr><td>". $row["from_user"] ."</td><td>".  $row["to_user"] ."</td><td>" .  $row["Credit"] ."</td></tr>";
		}
		echo "</table>";

	}
	else {
		echo "no result";
	}
    $conn-> close();
	?>
</table>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<b><p>
Contact: 9922012345,
Email: divyanshu@gmail.com<br>
© Divyanshu
</p>	</b>
</body>
</html>