<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$database = "karate";

$connection = new mysqli("localhost:3307", "root", "", "karate");

if ($connection->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>