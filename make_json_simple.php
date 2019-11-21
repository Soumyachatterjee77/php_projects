<?php
$json = file_get_contents("product.json");
$array=json_decode($json,true);
echo '<pre>'.print_r($array,true);
?>