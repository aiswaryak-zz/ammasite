
	<?php

	$servername = "localhost";
	$username = "root";
	$password = "aiswarya";
	$dbname = "ammasite-db";

	$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 



	$strSQL = "INSERT INTO customers(NAME) values('" . $_POST["FullName"] . "')"

	if ($conn->query($sql) === TRUE) {
    echo "New entry created successfully";
    echo "<h1>Hello " . $_POST["FullName"] . "</h1>";

	} 
	else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();

	?>

