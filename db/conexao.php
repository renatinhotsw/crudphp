<?php


$con = mysqli_connect("127.0.0.1", "root", "", "ajaxdb");

if (!$con) {
	
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

//echo "Conectado com sucesso!." . PHP_EOL;
//echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

mysqli_close($con);
?>

