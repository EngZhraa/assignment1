<?php
   $f = fopen('./data/products.txt','r') or die("Failed to open file");

   while(!feof($f))
   {
       $line = fgets($f);
       $products = explode('=', $line);
       print $products[0] . "<BR>";
   }
   fclose($f);




 
?>