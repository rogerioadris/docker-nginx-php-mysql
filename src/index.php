<?php

/**
 * Rogério Adriano <rogerioadris@gmail.com>
 */

// Variables
$username = getenv('MYSQL_USER');
$password = getenv('MYSQL_PASSWORD');
$database = getenv('MYSQL_DATABASE');

// Connection
$mysqli = new mysqli('mysql', $username, $password,  $database);

echo $mysqli->connect_errno ? 'Error Connection Mysql!' : 'Connection Success!';