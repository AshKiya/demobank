<?php
session_start();
$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("databaseuser");
$dbpwd = getenv("databasepassword");
$dbname = getenv("databasename");

$connection = mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname);
if ($connection) {
    echo ("Connect failed");
    exit();
} else {
    echo ("Connected to the database");
}
$connection->close();
?>
