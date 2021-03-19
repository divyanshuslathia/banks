<html>
<head>
	<title>GRIP</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style2.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">

	</style>
</head>
<body>
	<body style="background-color:silver;">
	<div class="topnav">
  <div class="topnav-right">
  	<a class="active" href="index.php">HOME </a>
  <a class="active" href="transferdetails.php">TRANSACTION HISTORY</a>
  <a class="active" href="viewusers.php">USERS</a>
  <a class="active" href="about.php">ABOUT US</a>
</div>
</div>
</div><br>
<br>  
<table class="viewusers">
	<center><h1>Customer Details</h1></center>
	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Amount</th>
		
	</tr>
	<?php
	$conn = mysqli_connect("localhost", "root", "", "bank");
	if($conn-> connect_error){
		die("connection failed:". $conn-> connect_error);
	}

	$sql = "SELECT name, email, credit FROM bank";
	$result = $conn-> query($sql);

	if($result-> num_rows > 0){

		while ( $row = $result -> fetch_assoc()) {
			echo "<tr><td>". $row["name"] ."</td><td>".  $row["email"] ."</td><td>" .  $row["credit"] ."</td></tr>";
		}
		echo "</table>";

	}
	else {
		echo "no result";
	}
    $conn-> close();
	?>
</table>
<br><br><br><br><br><br><br>
<b><p>
Contact: 9922012345,
Email: divyanshu@gmail.com<br>
© Divyanshu
</p>	</b>
</body>
</html>