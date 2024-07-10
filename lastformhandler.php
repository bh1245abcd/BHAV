<?php
// error_reporting(0);
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Store form data in session variables 
    //1row variables
    $_SESSION['ref1data'] = $_POST['ref1'];
    $_SESSION['img1data'] = $_POST['img1'];
    $_SESSION['boarddata'] = $_POST['board'];
    $_SESSION['schooldata'] = $_POST['school'];
    $_SESSION['roolnodata'] = $_POST['rollno'];
    $_SESSION['Yearsdata'] = $_POST['Year'];
    $_SESSION['modata'] = $_POST['mo'];
    $_SESSION['mmdata'] = $_POST['mm'];
    $_SESSION['percentdata'] = $_POST['percent'];
 
    $_SESSION['ref2data'] = $_POST['ref2'];
    $_SESSION['img2data'] = $_POST['img2'];

    $_SESSION['ref3data'] = $_POST['ref3'];
    $_SESSION['img3data'] = $_POST['img3'];

    $_SESSION['ref4data'] = $_POST['ref4'];
    $_SESSION['img4data'] = $_POST['img4'];
    
    $_SESSION['ref5data'] = $_POST['ref5'];
    $_SESSION['img5data'] = $_POST['img5'];
    
    $_SESSION['ref6data'] = $_POST['ref6'];
    $_SESSION['img6data'] = $_POST['img6'];

    $_SESSION['ref7data'] = $_POST['ref7'];
    $_SESSION['img7data'] = $_POST['img7'];

    $_SESSION['ref8data'] = $_POST['ref8'];
    $_SESSION['img8data'] = $_POST['img8'];
    
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

    // Prepare and bind parameters
    $stmt = $conn->prepare("INSERT INTO lastformdetail(ref1,img1,board,school,rollno,year,mo,mm,percent,rf2,img2,rf3,img3,rf4,img4,rf5,img5,
    ref6,img6,ref7,img7,ref8,img8) 
    VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

    if (!$stmt) {
        die("Error preparing statement: " . $conn->error);
    }

    $stmt->bind_param("sssssssssssssssssssssss",
                 $_SESSION['ref1data'],
                 $_SESSION['img1data'],
                 $_SESSION['boarddata'],
                 $_SESSION['schooldata'], 
                 $_SESSION['roolnodata'],
                 $_SESSION['Yearsdata'],
                 $_SESSION['modata'],
                 $_SESSION['mmdata'],
                 $_SESSION['percentdata'],
                 $_SESSION['ref2data'],
                 $_SESSION['img2data'],
                 $_SESSION['ref3data'],
                 $_SESSION['img3data'],
                 $_SESSION['ref4data'],
                 $_SESSION['img4data'],
                 $_SESSION['ref5data'],
                 $_SESSION['img5data'],
                 $_SESSION['ref6data'],
                 $_SESSION['img6data'],
                 $_SESSION['ref7data'],
                 $_SESSION['img7data'],
                 $_SESSION['ref8data'],
                 $_SESSION['img8data']);
    
    // Execute the statement
    if ($stmt->execute()) {
        echo "New record created successfully<br>";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();

    header("Location: showdata.php");
    // exit();
} else {
    echo "Invalid request method.";
}
?>
