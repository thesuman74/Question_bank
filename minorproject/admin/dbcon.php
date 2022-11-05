<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "worlsd";

$con = mysqli_connect($server, $user, $password, $db);

if ($con) {
	echo "connection succesful";
}
// $server = "sql112.epizy.com";
// $user = "epiz_32139406";
// $password = "fS09848512j";
// $db = "epiz_32139406_legalpath";

// $con = mysqli_connect($server, $user, $password, $db);
