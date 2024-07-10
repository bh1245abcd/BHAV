<?php
session_start(); // Start the session

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $index = $_POST['index'];
    $value = $_POST['value'];
    $_SESSION[$index] = $value;

    // Redirect back to the main page
    header('Location: main_table.php'); // Replace 'main_table.php' with the actual name of your main table page
    exit;
}
?>
