<?php 
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'technicalpashupati'; 

// Try to connect, but handle gracefully if database is not available
$connection = false;
$connectionobj = false;

try {
    $connection = @mysqli_connect($server, $username, $password, $database);
    $connectionobj = new mysqli($server, $username, $password, $database);
} catch (Exception $e) {
    // Database not available, will use fallback content
}
?>