<?php
$conn = mysqli_connect("localhost", "root", "", "shifting");

if (!$conn) {
    echo "Error: Unable to connect to DB." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() ;
    echo "Debugging error: " . mysqli_connect_error() ;
    exit;
}
?>