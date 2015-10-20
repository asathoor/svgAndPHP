<?php 
/* More elaborate svg sample 
** =========================
** 
**   In this case the class will create colored squares
** in a basic html5 table. 
*/ 
?>

<?php 
/* this class has methods for image creation */
class manipulate {
	
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

/* $change->drawSquare('35','333', 'violet'); */
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
	</style>
</head>
<body>
		<table>
			<tr>
				<td><?php $change->drawSquare('35','444', 'red'); ?></td>
				<td><?php $change->drawSquare('35','222', 'pink'); ?></td>
				<td><?php $change->drawSquare('35','321', 'orange'); ?></td>
			</tr>
			<tr>
				<th>One</th>
				<th>Two</th>
				<th>Three</th>
			</tr>
		</table>	
	</body>
</html>