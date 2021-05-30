<?php
/**
 * DATABASE CONNECTION
 */

 //Connection info
$host = 'localhost';
$username = 'root';
$password = 'andrehkiin1994';
$dbname = 'db-hotel';

// open Connection
$conn = new mysqli($host, $username, $password, $dbname);

// check connection
if ($conn && $conn->connect_error) {
    die("Connection failed: $conn->connect_error");
}