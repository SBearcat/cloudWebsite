<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "websitepdb";
$dbport = "3306";

if(!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname, $dbport))
{
    die("failed to connect!");
}