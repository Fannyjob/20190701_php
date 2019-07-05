<?php

//$ch = curl_init("http://www.bradchao.com/apptest/posttest1.php");
$ch = curl_init("http://www.bradchao.com/apptest/brad65.php");

$dataString = "name=peter&age=28";
curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"POST");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);

$ret = curl_exec($ch);
curl_close($ch);

$onj = json_decode($ret);

echo $product->id . ":" . $product->pname . ":" . $product->price;