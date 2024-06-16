<?php
include_once "classes/converter.php";

header("Content-Type: application/json"); // set the header to json
$code = $_GET["code"] ?? "BTC"; // get the value of code from the query string
$converter = new CryptoConverter($code);
$rateInUsd = $converter->convert(1);
echo "{\"rate\": $rateInUsd}"; // return the rate in json format