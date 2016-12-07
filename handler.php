<html>
	<head>
	<title>Form</title>
	</head>

	<body>

	<?php

	//$strSQL = "INSERT INTO contactdetails(FirstName) values('" . $_POST["FirstName"] . "')";

	$strSQL = "INSERT INTO contactdetails(";
	$strSQL = $strSQL . "FirstName) ";

	$strSQL = $strSQL. "VALUES("
	$strSQL = $strSQL . "'$_POST["FirstName"]')";

	mysql_query($strSQL) or die(mysql_error());
	
	mysql_close();

	echo "<h1>Hello " . $_POST["FirstName"] . "</h1>";

	?>

	<!-- <?php
//	 $rs = mysql_query($strSQL);
//	 while ($row = mysql_fetch_array($rs)) {
//   $strName = $row['FirstName'] . " " . $row['LastName'];

	}

	?> -->

	</body>
</html>

