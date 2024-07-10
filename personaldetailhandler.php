<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Initialize session variables with sanitized input (sanitize these inputs!)
    $_SESSION['firstnameinputdata'] = $_POST['firstnameinput'];
    $_SESSION['lastnameinputdata'] = $_POST['lastnameinput'];
    $_SESSION['genderinputdata'] = $_POST['Genderinput'];
    $_SESSION['weightinputdata'] = $_POST['Weightinput'];
    $_SESSION['EyeSightinputdata'] = $_POST['EyeSieghtinput'];
    $_SESSION['NPSchoolinputdata'] = $_POST['NPSchoolinput'];
    $_SESSION['Proficiencydata'] = $_POST['Proficiencyinput'];
    $_SESSION['mediumdata'] = $_POST['mediuminput'];
    $_SESSION['mothertonguedata'] = $_POST['mtinput'];
    $_SESSION['castdata'] = $_POST['castinput'];
    $_SESSION['middlenameinputdata'] = $_POST['middlenameinput'];
    $_SESSION['dobinputdata'] = $_POST['dobinput'];
    $_SESSION['Bloodgroupinputdata'] = $_POST['BloodGroupinput'];
    $_SESSION['Heightinputdata'] = $_POST['Hieghtinput']; // Corrected variable name
    $_SESSION['Disabilityinputdata'] = $_POST['Disabilityinput'];
    $_SESSION['LastSchoolinputdata'] = $_POST['Lastschoolinput'];
    $_SESSION['marksinputdata'] = $_POST['marksinput'];
    $_SESSION['nationalitydata'] = $_POST['nationality'];
    $_SESSION['religiondata'] = $_POST['religon'];
    $_SESSION['categorydata'] = $_POST['category'];
    $_SESSION['fatherninputdata'] = $_POST['fatherninput'];
    $_SESSION['fathernqinputdata'] = $_POST['fatherqinput'];
    $_SESSION['fatheroinputdata'] = $_POST['fatheroinput'];
    $_SESSION['fatherdinputdata'] = $_POST['fatherdinput'];
    $_SESSION['fatheroaddresinputdata'] = $_POST['fatheroaddresinput'];
    $_SESSION['fatherdiinputdata'] = $_POST['fatheriinput'];
    $_SESSION['motherninputdata'] = $_POST['motherninput'];
    $_SESSION['mothernqinputdata'] = $_POST['motherqinput'];
    $_SESSION['motheroinputdata'] = $_POST['motheroinput'];
    $_SESSION['motherdinputdata'] = $_POST['motherdinput'];
    $_SESSION['motherdiinputdata'] = $_POST['motheriinput'];
    $_SESSION['FSNinputdata'] = $_POST['FSNinput'];
    $_SESSION['SSNinputdata'] = $_POST['SSNinput'];
    $_SESSION['FSCinputdata'] = $_POST['FSCinput'];
    $_SESSION['SSCinputdata'] = $_POST['SSCinput'];
    // ... (continue for other fields)

    // Database connection settings
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bhavya";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare the SQL statement using prepared statements
    $sql = "INSERT INTO personaldetails (first_name, last_name, gender, weight, eye_sight, previous_school, proficiency, medium, mother_tongue, 
            caste, middle_name, dob, blood_group, height, disability, last_school, marks, nationality, religion, category, 
            father_name, father_qualification, father_occupation, father_designation, father_occupational_address, father_income, 
            mother_name, mother_qualification, mother_occupation, mother_designation, mother_income, 
            first_sibling_name, second_sibling_name, first_sibling_class, second_sibling_class) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        die("Failed to prepare statement: " . $conn->error);
    }

    // Bind parameters and execute the statement
    $stmt->bind_param("sssssssssssssssssssssssssssssssssss", 
                      $_SESSION['firstnameinputdata'], 
                      $_SESSION['lastnameinputdata'], 
                      $_SESSION['genderinputdata'], 
                      $_SESSION['weightinputdata'], 
                      $_SESSION['EyeSightinputdata'], 
                      $_SESSION['NPSchoolinputdata'], 
                      $_SESSION['Proficiencydata'],
                      $_SESSION['mediumdata'],
                      $_SESSION['mothertonguedata'],
                      $_SESSION['castdata'],
                      $_SESSION['middlenameinputdata'],
                      $_SESSION['dobinputdata'],
                      $_SESSION['Bloodgroupinputdata'],
                      $_SESSION['Heightinputdata'],
                      $_SESSION['Disabilityinputdata'],
                      $_SESSION['LastSchoolinputdata'],
                      $_SESSION['marksinputdata'],
                      $_SESSION['nationalitydata'],
                      $_SESSION['religiondata'],
                      $_SESSION['categorydata'],
                      $_SESSION['fatherninputdata'],
                      $_SESSION['fathernqinputdata'],
                      $_SESSION['fatheroinputdata'],
                      $_SESSION['fatherdinputdata'],
                      $_SESSION['fatheroaddresinputdata'],
                      $_SESSION['fatherdiinputdata'],
                      $_SESSION['motherninputdata'],
                      $_SESSION['mothernqinputdata'],
                      $_SESSION['motheroinputdata'],
                      $_SESSION['motherdinputdata'],
                      $_SESSION['motherdiinputdata'],
                      $_SESSION['FSNinputdata'],
                      $_SESSION['SSNinputdata'],
                      $_SESSION['FSCinputdata'],
                      $_SESSION['SSCinputdata']);

    // Execute the statement
    if ($stmt->execute()) {
        echo "New record created successfully<br>";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();

    // Redirect after successful insertion
    header("Location:contact.php");
    // exit();
} else {
    echo "Invalid request method.";
}
?>
