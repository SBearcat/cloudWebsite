<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "jan2023";
$dbname = "websitepdb";
$dbport = "3307";

if(!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname, $dbport))
{
    die("failed to connect!");
}