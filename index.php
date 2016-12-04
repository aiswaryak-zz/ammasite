<html>
<title>HELLO WORLD</title>
<BODY>
 
<?php
   
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = 'aiswarya';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   echo 'Connected successfully';
   mysql_close($conn);
?>

</BODY>
</html>