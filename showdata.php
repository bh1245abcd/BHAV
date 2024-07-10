<?php
session_start(); // Start the session

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Data</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h1>Form  Data</h1>

    <!-- Table for Form One Data -->
    <table>
        <tr>
            <th>Field</th>
            <th>Value</th>
        </tr>
        <tr>
            <td>Username</td>
            <td><?php echo $_SESSION['usernaminputdata']; ?></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><?php echo $_SESSION['naminputdata']; ?></td>
        </tr>
        <tr>
            <td>Branch</td>
            <td><?php echo $_SESSION['branchesdata']; ?></td>
        </tr>
        <tr>
            <td>Parent Course</td>
            <td><?php echo $_SESSION['Parentcoursedata']; ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo $_SESSION['emailinputdata']; ?></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><?php echo $_SESSION['phoneinputdata']; ?></td>
        </tr>
        <tr>
            <td>Academic Year</td>
            <td><?php echo $_SESSION['AYdata']; ?></td>
        </tr>
        <tr>
            <td>Highest Qualification</td>
            <td><?php echo $_SESSION['highestqualificationdata']; ?></td>
        </tr>
        <tr>
            <td>Percentage</td>
            <td><?php echo $_SESSION['Percenagedata']; ?></td>
        </tr>
        <tr>
            <td>Year Passed</td>
            <td><?php echo $_SESSION['YPdata']; ?></td>
        </tr>
        <tr>
            <td>Previous Name</td>
            <td><?php echo $_SESSION['PINdata']; ?></td>
        </tr>
        <tr>
            <td>Institutional Address</td>
            <td><?php echo $_SESSION['IAdata']; ?></td>
        </tr>

        <!--secondtable data-->
        <tr>
        <td>First Name</td>
        <td><?php echo $_SESSION['firstnameinputdata']; ?></td>
        </tr>
        <tr>
        <td>Last Name</td>
        <td><?php echo $_SESSION['lastnameinputdata']; ?></td>
        </tr>
        <tr>
        <td>Gender</td>
        <td><?php echo $_SESSION['genderinputdata']; ?></td>
        </tr>
        <tr>
        <td>Weight</td>
        <td><?php echo $_SESSION['weightinputdata']; ?></td>
        </tr>
        <tr>
        <td>Eye Sight</td>
        <td><?php echo $_SESSION['EyeSightinputdata']; ?></td>
        </tr>
        <tr>
        <td>NP School</td>
        <td><?php echo $_SESSION['NPSchoolinputdata']; ?></td>
        </tr>
        <tr>
        <td>Proficiency</td>
        <td><?php echo $_SESSION['Proficiencydata']; ?></td>
        </tr>
        <tr>
        <td>Medium</td>
        <td><?php echo $_SESSION['mediumdata']; ?></td>
        </tr>
        <tr>
        <td>Mother Tongue</td>
        <td><?php echo $_SESSION['mothertonguedata']; ?></td>
        </tr>
        <tr>
        <td>Caste</td>
        <td><?php echo $_SESSION['castdata']; ?></td>
        </tr>
        <tr>
        <td>Middle Name</td>
        <td><?php echo $_SESSION['middlenameinputdata']; ?></td>
        </tr>
        <tr>
        <td>Date of Birth</td>
        <td><?php echo $_SESSION['dobinputdata']; ?></td>
        </tr>
        <tr>
        <td>Blood Group</td>
        <td><?php echo $_SESSION['Bloodgroupinputdata']; ?></td>
        </tr>
        <tr>
        <td>Height</td>
        <td><?php echo $_SESSION['Heightinputdata']; ?></td>
        </tr>
        <tr>
        <td>Disability</td>
        <td><?php echo $_SESSION['Disabilityinputdata']; ?></td>
        </tr>
        <tr>
        <td>Last School</td>
        <td><?php echo $_SESSION['LastSchoolinputdata']; ?></td>
        </tr>
        <tr>
        <td>Marks</td>
        <td><?php echo $_SESSION['marksinputdata']; ?></td>
        </tr>
        <tr>
        <td>Nationality</td>
        <td><?php echo $_SESSION['nationalitydata']; ?></td>
        </tr>
        <tr>
        <td>Religion</td>
        <td><?php echo $_SESSION['religiondata']; ?></td>
        </tr>
        <tr>
        <td>Category</td>
        <td><?php echo $_SESSION['categorydata']; ?></td>
        </tr>
        <tr>
        <td>Father's Name</td>
        <td><?php echo $_SESSION['fatherninputdata']; ?></td>
        </tr>
        <tr>
        <td>Father's Qualification</td>
        <td><?php echo $_SESSION['fathernqinputdata']; ?></td>
        </tr>
        <tr>
        <td>Father's Occupation</td>
        <td><?php echo $_SESSION['fatheroinputdata']; ?></td>
        </tr>
        <tr>
        <td>Father's Designation</td>
        <td><?php echo $_SESSION['fatherdinputdata']; ?></td>
        </tr>
        <tr>
        <td>Father's Office Address</td>
        <td><?php echo $_SESSION['fatheroaddresinputdata']; ?></td>
        </tr>
        <tr>
        <td>Father's income</td>
        <td><?php echo $_SESSION['fatherdiinputdata']; ?></td>
        </tr>
        <tr>
        <td>Mother's Name</td>
        <td><?php echo $_SESSION['motherninputdata']; ?></td>
        </tr>
        <tr>
        <td>Mother's Qualification</td>
        <td><?php echo $_SESSION['mothernqinputdata']; ?></td>
        </tr>
        <tr>
        <td>Mother's Occupation</td>
        <td><?php echo $_SESSION['motheroinputdata']; ?></td>
        </tr>
        <tr>
        <td>Mother's Designation</td>
        <td><?php echo $_SESSION['motherdinputdata']; ?></td>
        </tr>
        <tr>
        <td>Mother's Income</td>
        <td><?php echo $_SESSION['motherdiinputdata']; ?></td>
        </tr>
        <tr>
        <td>First Sibling Name</td>
        <td><?php echo $_SESSION['FSNinputdata']; ?></td>
        </tr>
        <tr>
        <td>Second Sibling Name</td>
        <td><?php echo $_SESSION['SSNinputdata']; ?></td>
        </tr>
        <tr>
        <td>First Sibling Class</td>
        <td><?php echo $_SESSION['FSCinputdata']; ?></td>
        </tr>
        <tr>
        <td>Second Sibling Class</td>
        </tr>

        <!--third table-->
        <tr>
        <td>Guardian Name</td>
        <td><?php echo $_SESSION['Gnamedata']; ?></td>
        </tr>
        <tr>
        <td>Relationship with Guardian</td>
        <td><?php echo $_SESSION['RWGinputdata']; ?></td>
        </tr>
        <tr>
        <td>Permanent Home Address</td>
        <td><?php echo $_SESSION['PHAinputdata']; ?></td>
        </tr>
        <tr>
        <td>City</td>
        <td><?php echo $_SESSION['Cityinputdata']; ?></td>
        </tr>
        <tr>
        <td>Country</td>
        <td><?php echo $_SESSION['Countryinputdata']; ?></td>
        </tr>
        <tr>
        <td>Mobile</td>
        <td><?php echo $_SESSION['Mobileinputdata']; ?></td>
        </tr>
        <tr>
        <td>Guardian Phone</td>
        <td><?php echo $_SESSION['GPhonedata']; ?></td>
        </tr>
        <tr>
        <td>Guardian Email</td>
        <td><?php echo $_SESSION['GEmaildata']; ?></td>
        </tr>
        <tr>
        <td>Permanent Home Address</td>
        <td><?php echo $_SESSION['PermanentHAinputdata']; ?></td>
        </tr>
        <tr>
        <td>Guardian State</td>
        <td><?php echo $_SESSION['GSinputdata']; ?></td>
        </tr>
        <tr>
        <td>Guardian Zip Code</td>
        <td><?php echo $_SESSION['Guardianzipcodeinputdata']; ?></td>
        </tr>
        <tr>
        <td>Home Phone</td>
        <td><?php echo $_SESSION['HPhoneinputdata']; ?></td>
        </tr>

        <!--4thfromdata-->
        <tr>
            <td>Reference 1</td>
            <td><?php echo $_SESSION['ref1data']; ?></td>
        </tr>
        <tr>
            <td>Image 1</td>
            <td><?php echo $_SESSION['img1data']; ?></td>
        </tr>
        <tr>
            <td>Board</td>
            <td><?php echo $_SESSION['boarddata']; ?></td>
        </tr>
        <tr>
            <td>School</td>
            <td><?php echo $_SESSION['schooldata']; ?></td>
        </tr>
        <tr>
            <td>Roll Number</td>
            <td><?php echo $_SESSION['roolnodata']; ?></td>
        </tr>
        <tr>
            <td>Years</td>
            <td><?php echo $_SESSION['Yearsdata']; ?></td>
        </tr>
        <tr>
            <td>Mode</td>
            <td><?php echo $_SESSION['modata']; ?></td>
        </tr>
        <tr>
            <td>MM</td>
            <td><?php echo $_SESSION['mmdata']; ?></td>
        </tr>
        <tr>
            <td>Percentage</td>
            <td><?php echo $_SESSION['percentdata']; ?></td>
        </tr>
        <tr>
            <td>Reference 2</td>
            <td><?php echo $_SESSION['ref2data']; ?></td>
        </tr>
        <tr>
            <td>Image 2</td>
            <td><?php echo $_SESSION['img2data']; ?></td>
        </tr>
        <tr>
            <td>Reference 3</td>
            <td><?php echo $_SESSION['ref3data']; ?></td>
        </tr>
        <tr>
            <td>Image 3</td>
            <td><?php echo $_SESSION['img3data']; ?></td>
        </tr>
        <tr>
            <td>Reference 4</td>
            <td><?php echo $_SESSION['ref4data']; ?></td>
        </tr>
        <tr>
            <td>Image 4</td>
            <td><?php echo $_SESSION['img4data']; ?></td>
        </tr>
        <tr>
            <td>Reference 5</td>
            <td><?php echo $_SESSION['ref5data']; ?></td>
        </tr>
        <tr>
            <td>Image 5</td>
            <td><?php echo $_SESSION['img5data']; ?></td>
        </tr>
        <tr>
            <td>Reference 6</td>
            <td><?php echo $_SESSION['ref6data']; ?></td>
        </tr>
        <tr>
            <td>Image 6</td>
            <td><?php echo $_SESSION['img6data']; ?></td>
        </tr>
        <tr>
            <td>Reference 7</td>
            <td><?php echo $_SESSION['ref7data']; ?></td>
        </tr>
        <tr>
            <td>Image 7</td>
            <td><?php echo $_SESSION['img7data']; ?></td>
        </tr>
        <tr>
            <td>Reference 8</td>
            <td><?php echo $_SESSION['ref8data']; ?></td>
        </tr>
        <tr>
            <td>Image 8</td>
            <td><?php echo $_SESSION['img8data']; ?></td>
        </tr>
    </table>

    <input type="button" value="edit" onclick="redirectToEdit()">

    <!-- <input type="button" value="delete" onclick="redirectTodelete()"> -->

     <!-- JavaScript to handle redirection -->
     <script>
    function redirectToEdit() {
        window.location.href = 'edit.php';
    }
    </script>
    
     <!-- JavaScript to handle delte redirection -->
     <!-- <script>
    function redirectTodelete() {
        window.location.href = 'delete.php';
    } -->
    </script>
</body>
</html>
</body>
</html>
