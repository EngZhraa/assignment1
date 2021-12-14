
<?php 
     
$delimiter = ","; 
$product   = file('./data/products.txt'); 
 
echo "<table border='1'>\n"; 
 
foreach ($product as $row) { 
	echo "\t<tr>\n"; 
 
	$cells = explode($delimiter, $row); 
 
	foreach ($cells as $cell) { 
		echo sprintf("\t\t<td>%s</td>\n", $cell); 
	} 
 
	echo "\t</tr>\n"; 
} 
 
echo "</table>\n"; 