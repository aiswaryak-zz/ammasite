<html>

<head>
<title>My first PHP page</title>
</head>


<body>

	<?php
		$servername = "localhost";
		$username = "root";
		$password = "aiswarya";
		$dbname = "ammasite-db";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		     die("Connection failed: " . $conn->connect_error);
		} 

		$sql = "SELECT id, NAME, PHONENUMBER, EMAIL FROM customers";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		     // output data of each row
		     while($row = $result->fetch_assoc()) {
		         echo "<br> id: ". $row["id"]. " - Name: ". $row["NAME"]. " " . $row["PHONENUMBER"] . " " . $row["EMAIL"] . "<br>";
		     }
		} else {
		     echo "0 results";
		}

		$conn->close();
	?>


<!--Adding form element -->
		<form method="post" action="handler.php">
		<input type="text" name="FullName">
		<input type="submit" value = "Submit">
		</form>
<!--End form element-->



	<p><b> Print date </b></p>

	<?php   

	date_default_timezone_set('Asia/Kolkata');

	echo "<p> Today's day of the week is " . date(l) . "</p>";

	?>

	<p><b> While loop </b></p>

	<?php 
		$x = 1;
		while ($x <=4){
			echo "<p> This text will repeat " . $x . " times. </p>";	
			$x = $x + 1;
		}

	?>

	<p><b> For loop </b></p>

	<?php
		//learning how a for-loop works
		for ($x = 0; $x < 5; $x=$x+2){
			echo "<p> Variable is now " . $x . ".</p>";
		}

	?>

	<p><b> If condition </b></p>

	<?php
		if(date("m") >=3 && date("m")<=5){
			echo "<p> It's springtime!</p>";
		}
		else{
			echo "<p> It's either summer, autumn, or winter.</p>";
		}

	?>

	<p><b> Array - not working for some reason</b></p>

	<?php
		$fruitlist = "apple, pear, banana, orange, pomegranate";

		//create array
		$arrFruits = explode(",", $fruitlist);

		echo "<p>The list of fruit: </p>";
		echo "<ul>";

		for ($y=0; $y<sizeof(arrFruits); $y++){
			echo "<li>" . $arrFruits[$y] . "</li>";
		}
		echo "</ul>";

	?>


	<p><b>Functions </b></p>

	<?php 
		function AddOne($x){
			$x = $x + 1;
			echo $x;
		}

		AddOne(34);

	?>

	<p><b>Form</b></p>

	<h1>Enter your name</h1>

	<form method="post" action="handler.php">
	<input type="text" name="username">
	<input type="submit">
	</form>




</body>
</html>


