<?php
$servername = "AssignmentCloud";
$port       = "5432";
$username   = "bflaxnkauvhklq";
$password   = "b417e5c227f0e5c0a640ae0bd5f04036b35d4c89bb92a898e9953c912448790c";
$dbname     = "d4uqjsiosndu60";

// Create connection
$conn = new mysqli($servername . ":". $port, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>
<?php
    $myPDO = new PDO('pgsql:host=ec2-107-21-120-104.compute-1.amazonaws.com;dbname=d4uqjsiosndu60', 'bflaxnkauvhklq', 'b417e5c227f0e5c0a640ae0bd5f04036b35d4c89bb92a898e9953c912448790c');
?>
<?php
    $result = $myPDO->query("SELECT lastname FROM staffmanagement");
?>