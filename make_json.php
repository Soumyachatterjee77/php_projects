<?php
$con =new MySQLi("localhost","root","","shopingcart");

$rows = array();
$sql = "SELECT * FROM `products`";
$res = $con->query($sql);
while ($row=$res->fetch_array()) {
	print "<br> $row[id], $row[name], $row[price]";
	$rows[] = [
				"ID"    => $row['id'],
				"NAME"  => $row['name'],
				"PRICE" => $row['price']
			  ];
}

$json = json_encode( array("cake"=>$rows) );
print "<hr>$json";

$handle=fopen("product.json","w");
fwrite($handle, $json);
fclose($handle); 
?>