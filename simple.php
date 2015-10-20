<?php /* very bacic svg sample */ ?>

<?php 

class manipulate {

	public function setSize($size) {
		$this->size=$size;
		echo $size;
	}

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
}

$change = new manipulate();

/*
$change->drawSquare('35','333', 'violet');
$change->drawSquare('35','111', 'pink');
$change->drawSquare('35','444', 'red');
*/
?>

<h1> Data visualisation via HTML tags </h1>

<table>
	<tr>
		<th>One</th>
		<th>Two</th>
		<th>Three</th>
	</tr>
</table>


