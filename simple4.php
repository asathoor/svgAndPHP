<?php 
/* Even more elaborate svg sample 
** ==============================
**   Now we try the same thing
** and create the squares via sql.
**
**   Here are the php-headers to be
** loaded before the actual html.
*/ 
?>

<?php 
/* this class has methods for image creation */
class manipulate {
	
	public function makeSQL($sql) {
		$this->sql = $sql;
	}
	
	public function readTable($query) {
		
		// echo $query . "<br>";
		
		$mysqli = new mysqli("localhost", "root", "mojndo","wordpress"); // connect to the database
		
		if ($mysqli->connect_errno) {
    		echo "Failed to connect to MySQL: (" 
				. $mysqli->connect_errno . ") " 
				. $mysqli->connect_error; // if error messages
			}
			else {
				//echo "Yeah, we're connected to the database: " .  $mysqli->host_info . "\n";
			}
		
		// query
		//$this->sql = $query;
		$result =  $mysqli->query($query); // query executed via mysqli
		$row = $result->fetch_array(); // array
		
		
		// remember to add <table></table> before and after your loop
		while ($row = $result->fetch_assoc()) {
   			//var_dump($row);
			echo "<td>" . $this->drawSquare( 35, $row['prod_price'] * 4 , '#bb5ebc' ). "</td>";
 		}
		
		mysqli_close($mysqli); // connection closed
	}
	
	/* will draw a svg per bar */
	public function drawSquare($width, $height, $fill) {
		?>
			<svg  width="<?php echo $width; ?>" 
				 height="<?php echo $height; ?>">
				
				<rect x="0" 
					  y="0" 
					  height="<?php echo $height; ?>" 
					  width="<?php echo $width; ?>"
					  style="stroke:#ff0000; fill: <?php echo $fill; ?>"/>


			</svg>
		<?php
		
	}
	
	/* will create one svg with all info in it */
	public function drawImage(){
		// connect to the database
		// create the svg
		// loop out bars or whatever
		// end the svg
	}
}

$change = new manipulate();

// echo "<p>Server Query: " . $change->sql . "</p>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- a page for image creation on the fly -->
	<meta charset="utf-8" />
	<title>SVG sample - now with table ...</title>
	<style>
		img {
			display: block;
			margin: auto;
		}
		td {
			vertical-align: bottom;
		}
		.ny { 
			url(ny.jpg)
			background-color: black;
			color: green;
		}
		svg {
			background: url(ny.jpg);
		}
	</style>
</head>
<body>
		<h1 class="ny">Column Heights via the Database</h1>
	
		<table>
			<tr>
				<?php 
					//$sql = "select item_price from orderitems limit 6";	
					$sql = "SELECT `prod_price` FROM `products`";
					$change->readTable($sql); 
				?>
			</tr>
	
	
	
	<p>The query: <pre><?php echo $sql; ?></pre></p>
	</body>
</html>
