Data Visualization Via SVG
==========================


## Experiment 1

Convert your SVG file name to PHP. Now you can:

* Connect to a database.
* Scale and resize with numbers from the database.

Now you can resize your vectors via the database. 

* File: hattemand.php


## Experiment 2

Use PHP to scale a simple vector shape.


### The svg

Here's the SVG code we need (made as simple as possible):

~~~~
<svg  width="35" height="59.96">
				
	<rect x="0" 
		  y="0" 
		  height="59.96" 
		  width="35"
		  style="stroke:#ff0000; fill: #bb5ebc" />
~~~~


### Draw square method

This class method will draw the and scale via the $height value taken from the database:


~~~~
/* Draw the SVG */
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

~~~~


### Loop out square via a SQL query

The *public function readTable* loops out the content:

~~~~
(... database connection stuff here ...)

echo "<table>";

while ($row = $result->fetch_assoc()) {
	echo "<td>" . $this->drawSquare( 35, $row['prod_price'] * 4 , '#bb5ebc' ). "</td>";
}

echo "</table>";

(... close connection stuff here ... )
~~~~

