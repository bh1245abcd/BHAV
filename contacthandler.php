<?php
error_reporting(0);
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Store form data in session variables 
    //1stcol variabless
    $_SESSION['Gnamedata'] = $_POST['Gname'];
    $_SESSION['RWGinputdata'] = $_POST['RWGinput'];
    $_SESSION['PHAinputdata'] = $_POST['PHAinput'];
    $_SESSION['Cityinputdata'] = $_POST['Cityinput'];
    $_SESSION['Countryinputdata'] = $_POST['Countryinput'];
    $_SESSION['Mobileinputdata'] = $_POST['Mobileinput'];
    //2ndcol variabless
    $_SESSION['GPhonedata'] = $_POST['GPhone'];
    $_SESSION['GEmaildata'] = $_POST['GEmail'];
    $_SESSION['PermanentHAinputdata'] = $_POST['PermanentHAinput'];
    $_SESSION['GSinputdata'] = $_POST['GSinput'];
    $_SESSION['Guardianzipcodeinputdata'] = $_POST['Guardianzipcodeinput'];
    $_SESSION['HPhoneinputdata'] = $_POST['HPhoneinput'];
     
 
    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bhavya";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection error: " . $conn->connect_error);
    } else {
        echo "Connected successfully<br>";
    }

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO contactdetails (Gname, Grelation, GPadress, Gcity, Gcountry, GMobile, GPhone, Gemail, gperadresss, Gstate, Gzipcode, GHomePhone) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssssss",
                 $_SESSION['Gnamedata'], 
                 $_SESSION['RWGinputdata'], 
                 $_SESSION['PHAinputdata'],
                 $_SESSION['Cityinputdata'],
                 $_SESSION['Countryinputdata'],
                 $_SESSION['Mobileinputdata'],
                 $_SESSION['GPhonedata'], 
                 $_SESSION['GEmaildata'], 
                 $_SESSION['PermanentHAinputdata'],
                 $_SESSION['GSinputdata'],
                 $_SESSION['Guardianzipcodeinputdata'],
                 $_SESSION['HPhoneinputdata']);
    
    // Execute the statement
    if ($stmt->execute()) {
        echo "New record created successfully<br>";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();

    header("Location: latfrom.php");
    exit();
} else {
    echo "Invalid request method.";
}
?>
