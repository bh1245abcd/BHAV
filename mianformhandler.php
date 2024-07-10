
<?php
error_reporting(0);
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Store form data in session variables
    $_SESSION['usernaminputdata'] = $_POST['usernameinput'];
    $_SESSION['naminputdata'] = $_POST['nameinput'];
    $_SESSION['branchesdata'] = $_POST['branches'];
    $_SESSION['Parentcoursedata'] = $_POST['Pc'];
    $_SESSION['emailinputdata'] = $_POST['emailinput'];
    $_SESSION['phoneinputdata'] = $_POST['Phoneinput'];
    $_SESSION['AYdata'] = $_POST['AY'];
    $_SESSION['highestqualificationdata'] = $_POST['highestqualification'];
    $_SESSION['Percenagedata'] = $_POST['Percenage'];
    $_SESSION['YPdata'] = $_POST['YP'];
    $_SESSION['PINdata'] = $_POST['PIN'];
    $_SESSION['IAdata'] = $_POST['IA'];

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
    $stmt = $conn->prepare("INSERT INTO generaldetails (username, name, branch, email, phone, academic_year, hqualification, percentage, year_passed, piname, institute_adress) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssssss", $_SESSION['usernaminputdata'], $_SESSION['naminputdata'], $_SESSION['branchesdata'], $_SESSION['emailinputdata'], $_SESSION['phoneinputdata'], $_SESSION['AYdata'], $_SESSION['highestqualificationdata'], $_SESSION['Percenagedata'], $_SESSION['YPdata'], $_SESSION['PINdata'], $_SESSION['IAdata']);

    // Execute the statement
    if ($stmt->execute()) {
        echo "New record created successfully<br>";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();

    header("Location:personaldetail.php");
    exit();
} else {
    echo "Invalid request method.";
}
?>





