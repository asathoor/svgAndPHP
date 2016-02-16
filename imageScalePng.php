<html>
<head>
	<title>newSvg.php</title>	
</head>
<body>
<?php
// Next line: if you want to use only svg and display via <img src= ...
//header('Content-Type: image/svg+xml');
/* query and scale */
$limit = 4;
$sql = "SELECT * FROM `products` LIMIT 0 , 30";
$mysqli = new mysqli("localhost", "root", "mojndo","forta"); 

/*
// MAMP XAMPP etc.
	$mysqli = new mysqli("localhost", "root", "","forta"); // connect to the database
	$mysqli = new mysqli("localhost", "", "","forta"); // connect to the database
	$mysqli = new mysqli("localhost", "root", "password","forta"); // connect to the database

// WEBHOTEL UNO, ONE ...
	$mysqli = new mysqli("multimusen.dk.mysql", "multimusen_dk", "sgfsfgdgfsfgsfgsfg","multimusen_dk"); // connect to the database
*/
	
	if ($mysqli->connect_errno) {
 		echo "Failed to connect to MySQL: (" 
			. $mysqli->connect_errno . ") " 
			. $mysqli->connect_error; // if error messages
		}
		else {
			echo "Yeah, we're connected to the database: " .  $mysqli->host_info . "\n";
		}
/* the server query */
$result =  $mysqli->query($sql);
/* loop out the content */

echo "<figure>";

while ($row = $result->fetch_assoc()) {
	echo "<img src='img.png' width='" 
	. $row['prod_price'] * 2
	. "' height='*' alt='image' />\n";


			//echo "<a href='http://dr.dk'>" . $row['prod_desc'] . "</a></p>";
 		}

echo "</figure>\n\n";

?>
