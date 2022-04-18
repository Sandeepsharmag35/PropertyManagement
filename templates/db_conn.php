<?php
session_start();

$sname = "localhost";
$unmae = "root";
$password = "";
$db_name = "property_management_system";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
    echo "Connection failed!";
}
