<?php
$hoejde = 333; // def storrelse dvs. et tal
$groen = "#0000ff"; // det her er en 'string'
// farve
// bredde
// position ... 
?>

<!DOCTYPE html>
<html>
<head>
<title></title>
<meta name="generator" content="Bluefish">
<meta name="author" content="">
<meta name="date" content="">
<meta name="copyright" content="">
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8">
<meta http-equiv="content-style-type" content="text/css">
<meta http-equiv="expires" content="0">
</head>
<body>

<h1>Meningsmåling</h1>

<?php echo $hoejde; ?>

<svg width="640" height="480" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
 <!-- Created with SVG-edit - http://svg-edit.googlecode.com/ -->

 <g>
  <title>Layer 1</title>
  <rect id="svg_1" 
		height="<?php echo $hoejde; ?>" 
		width="54" y="91" x="61" 
		stroke-width="5" 
		stroke="<?php echo $groen; ?>" 
		fill="#FF0000"/>
 </g>
</svg>

</body>
</html>
