<?php
$conn = mysqli_connect("localhost", "root", "", "bank");
if($conn-> connect_error){
	die("connection failed:". $conn-> connect_error);
}
$sql = "SELECT name, email, credit FROM bank";
error_reporting(0);
$result = mysqli_query($conn,"SELECT *  FROM bank");
$resul1 = mysqli_query($conn,"SELECT *  FROM bank");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Transfer Amount</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style2.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
</head>
<body style="background-color: #1ABC9C;">
	<div class="topnav">
		<div class="topnav-right">
  <a class="active" href="index.php">HOME</a>
  <a class="active" href="transferdetails.php">TRANSACTION HISTORY</a>
  <a class="active" href="viewusers.php">USERS</a>
   <a class="active" href="about.php">ABOUT US</a>


  </div>
</div>
</div>  <br><br>
<div class ='form'> 
	<h1 align ='center'> Money Transfer  </h1>
</div> 
<div class='main'>
<form action="" method="GET" class = "form">
		<select  class= fromuser type="text"  name="u1" required value="">
		<option value ="">SELECT SENDER</option>
		<?php
                        while($tname = mysqli_fetch_array($result)) {
                            echo "<option value='" . $tname['name'] . "'>" . $tname['name'] . "</option>";
                        }
                ?>

        </select>
		<select  class =touser  type="text" name="u2" value="">
	     <option value ="">SELECT RECEIVER</option>
		<?php
                        while($tname = mysqli_fetch_array($resul1)) {
                            echo "<option value='" . $tname['name'] . "'>" . $tname['name'] . "</option>";
                        }
                ?>

        </select>
		
		<input type="text" id="amount" name="amt" placeholder="ENTER AMOUNT">
		
		<input type="submit" id= submit name="submit" value=" Transfer">
		
	</form>
</div>

	<?php
	
			if($_GET['submit'])
			{
			$u1=$_GET['u1'];
			$u2=$_GET['u2'];
			$amt=$_GET['amt'];


			if($u1!="" && $u2!="" && $amt!="")
			{
				
				$query1= "UPDATE bank  SET Credit = Credit + '$amt' WHERE Name = '$u2' ";
				$data1= mysqli_query($conn, $query1);
				$query2= "UPDATE  bank SET Credit = Credit  - '$amt' WHERE Name = '$u1' ";
				$data2= mysqli_query($conn, $query2);
				
				
				    $query1 = "INSERT INTO transfers (from_user ,to_user ,Credit) VALUES('$u1','$u2','$amt')";
                                    $res2 = mysqli_query($conn,$query1);
				
                                          if($res2){
		                           	 $user1 = "SELECT * FROM bank WHERE  Name='$u1' ";
                                                 $res=mysqli_query($conn,$user1);
                                                 $row_count=mysqli_num_rows($res);
			                      }
				
            

				     if ($data1 && $data2)
				     {
					$message="Transfered Successfully!!";
                                        echo "<script type='text/javascript'>alert('$message');
                                        </script>";
				}
				else
				{
					$message="Transaction Error has occured";
					echo "<script type='text/javascript'>alert('$message');
                                        </script>";
				}

			}

			else
			{
				$message="All Fields are mandatory";
				echo "<script type='text/javascript'>alert('$message');
                    </script>";
			}
		}
		

	?>
</div>
<br><br><br><br><br><br><br><br><br>
<b><p>
Contact: 9922012345,
Email: divyanshu@gmail.com<br>
© Divyanshu
</p>	</b>	
</body>
</html>