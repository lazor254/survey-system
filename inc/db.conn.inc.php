<?php
$servername = "localhost:3306";
$username = "root";
$password = "!<Html>254@";
$dbname = "login";


$conn =new mysqli($servername, $username, $password, $dbname);

if(!$conn) die("Error");