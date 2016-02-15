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
$sql = "SELECT * FROM `products` limit 0," . $limit;

	$mysqli = new mysqli("localhost", "root", "mojndo","forta"); // connect to the database
	
	if ($mysqli->connect_errno) {
 		echo "Failed to connect to MySQL: (" 
			. $mysqli->connect_errno . ") " 
			. $mysqli->connect_error; // if error messages
		}
		else {
			// echo "Yeah, we're connected to the database: " .  $mysqli->host_info . "\n";
		}

/* the server query */
$result =  $mysqli->query($sql);

/* loop out the content */
/*
while ($row = $result->fetch_assoc()) {
			echo $row['prod_price'] . "\n";
 		}
*/	
?>

<!-- the svg -->
	<!-- use php to loop out squares below -->

<?php
/*
Below: how to draw svg graphics via PHP
*/

	
$x = 0; // set the x position		
	
	function drawBar($height, $x) {		
		echo '<rect width="35" height="'
		. $height
		. '" x="' . $x . '" '		 
		.'style="fill:rgb(0,45,255);stroke-width:3;stroke:rgb(0,0,0)" />';
	}
	//drawBar(500);

/*loop it out */
$result =  $mysqli->query($sql);

/* svg header */
echo '<svg width="400" height="700">';

/*  loop out bars */
while ($row = $result->fetch_assoc()) {
			drawBar( ($row['prod_price'] * 20), $x );
			$x = $x + 50;
 		}

echo "</svg>";

/* 
POSITION
========

The y-position of a rectangle starts at top left.
How would you position the bars along the y = 400 line?
(Asuming that the svg has the height 400)
 
STYLE
=====

Style the result via CSS and / or JavaScript. 

1. Give each bar a different color.
2. Style background images.
3. Experiment with alternative fill e.g. images in the bars. 

VALIDATE YOUR CODE
==================

The code is a rough. Edit your code according to the HTML standard e.g. so that you can display utf8 characters.
The data from your database is in utf-8.


A CREATIVE CHALLENGE
====================

Try something similar to what we've tried above. Use another table, get some numerical data and visualize
via bars, circles, areas or similar. 

*/
?>

</body>
</html>