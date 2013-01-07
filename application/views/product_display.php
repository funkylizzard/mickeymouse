<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>product_display</title>
<body>

This is list of products disply:



<pre> <?php  print_r ($name); ?> </pre>
<br/> <br/>

<?php
foreach ($name as $product)
echo $product['product_name']. " , "; 

//echo $data['product_name']. " , ";

 ?>
	

</body>
</html>
