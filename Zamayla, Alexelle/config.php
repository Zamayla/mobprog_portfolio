<?php
/**
 * using mysqli_connect for database connection
 */

$databaseHost = 'localhost';
$databaseName = 'Xelle';
$databaseUsername = 'root';
$databasePassword = '';
$port = '3306';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName, $port);

?>