<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "fcm-push";


$thetoken = $_POST['token'];
$thedate = $cdate = date('Y-m-d');
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
error_log("connection made");
$sql = "INSERT INTO tokens ( token, created_date) VALUES ('$thetoken', '$thedate')";



if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    error_log("New record created successfully");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    error_log("New record FAILED TO INSERT");

}

$conn->close();
?>