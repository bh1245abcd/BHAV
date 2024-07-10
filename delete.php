<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bhavya";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connection successful<br>";
}

$sql = "SELECT usernaminputdata FROM finaldetails";
$res = mysqli_query($conn, $sql);

if ($res) {
    // Fetch the result row as an associative array
    $row = mysqli_fetch_assoc($res);

    // Store the username value
    $username = $row['usernaminputdata'];
    echo "Username: " . $username;
} else {
    echo "Error: " . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);
?>
