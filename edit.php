<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Form</title>
    <style>
        form {
            width: 100%;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            box-sizing: border-box;
        }
        input[type="submit"] {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

<h1>Input Form</h1>
<form method="post" action="save.php">
    <label for="usernaminputdata">Username:</label>
    <input type="text" id="usernaminputdata" name="usernaminputdata" value="<?php echo $_SESSION['usernaminputdata'];?>">

    <label for="naminputdata">Name:</label>
    <input type="text" id="naminputdata" name="naminputdata" value="<?php echo $_SESSION['naminputdata']; ?>">

    <label for="branchesdata">Branch:</label>
    <input type="text" id="branchesdata" name="branchesdata" value="<?php echo $_SESSION['branchesdata']; ;?>">

    <label for="Parentcoursedata">Parent Course:</label>
    <input type="text" id="Parentcoursedata" name="Parentcoursedata" value="<?php echo $_SESSION['Parentcoursedata'] ;?>">

    <label for="emailinputdata">Email:</label>
    <input type="email" id="emailinputdata" name="emailinputdata" value="<?php echo $_SESSION['emailinputdata'] ;?>">

    <label for="phoneinputdata">Phone:</label>
    <input type="text" id="phoneinputdata" name="phoneinputdata" value="<?php echo $_SESSION['phoneinputdata'] ;?>">

    <label for="AYdata">Academic Year:</label>
    <input type="text" id="AYdata" name="AYdata" value="<?php echo $_SESSION['AYdata'];?>">

    <label for="highestqualificationdata">Highest Qualification:</label>
    <input type="text" id="highestqualificationdata" name="highestqualificationdata" value="<?php $_SESSION['highestqualificationdata'] ;?>">

    <label for="Percenagedata">Percentage:</label>
    <input type="text" id="Percenagedata" name="Percenagedata" value="<?php echo $_SESSION['Percenagedata']; ?>">

    <label for="YPdata">Year Passed:</label>
    <input type="text" id="YPdata" name="YPdata" value="<?php echo $_SESSION['YPdata']; ?>">

    <label for="PINdata">Previous Name:</label>
    <input type="text" id="PINdata" name="PINdata" value="<?php echo $_SESSION['PINdata']; ?>">

    <label for="IAdata">Institutional Address:</label>
    <input type="text" id="IAdata" name="IAdata" value="<?php  echo $_SESSION['IAdata']; ?>">

    <!--2ndtable data-->
    <label for="firstnameinputdata">First Name:</label>
    <input type="text" id="firstnameinputdata" name="firstnameinputdata" value="<?php echo $_SESSION['firstnameinputdata']; ?>">

    <label for="lastnameinputdata">Last Name:</label>
    <input type="text" id="lastnameinputdata" name="lastnameinputdata" value="<?php echo $_SESSION['lastnameinputdata']; ?>">

    <label for="genderinputdata">Gender:</label>
    <input type="text" id="genderinputdata" name="genderinputdata" value="<?php echo $_SESSION['genderinputdata']; ?>">

    <label for="weightinputdata">Weight:</label>
    <input type="text" id="weightinputdata" name="weightinputdata" value="<?php echo $_SESSION['weightinputdata']; ?><">

    <label for="EyeSightinputdata">Eye Sight:</label>
    <input type="text" id="EyeSightinputdata" name="EyeSightinputdata" value="<?php echo $_SESSION['EyeSightinputdata']; ?>">

    <label for="NPSchoolinputdata">NP School:</label>
    <input type="text" id="NPSchoolinputdata" name="NPSchoolinputdata" value="<?php echo $_SESSION['NPSchoolinputdata']; ?>">

    <label for="Proficiencydata">Proficiency:</label>
    <input type="text" id="Proficiencydata" name="Proficiencydata" value="<?php echo $_SESSION['Proficiencydata']; ?>">

    <label for="mediumdata">Medium:</label>
    <input type="text" id="mediumdata" name="mediumdata" value="<?php echo $_SESSION['mediumdata']; ?>">

    <label for="mothertonguedata">Mother Tongue:</label>
    <input type="text" id="mothertonguedata" name="mothertonguedata" value="<?php echo $_SESSION['mothertonguedata']; ?>">

    <label for="castdata">Caste:</label>
    <input type="text" id="castdata" name="castdata" value="<?php echo $_SESSION['castdata']; ?>">

    <label for="middlenameinputdata">Middle Name:</label>
    <input type="text" id="middlenameinputdata" name="middlenameinputdata" value=" <?php echo $_SESSION['middlenameinputdata']; ?>">

    <label for="dobinputdata">Date of Birth:</label>
    <input type="text" id="dobinputdata" name="dobinputdata" value="<?php echo $_SESSION['dobinputdata']; ?>">

    <label for="Bloodgroupinputdata">Blood Group:</label>
    <input type="text" id="Bloodgroupinputdata" name="Bloodgroupinputdata" value="<?php echo $_SESSION['Bloodgroupinputdata']; ?>">

    <label for="Heightinputdata">Height:</label>
    <input type="text" id="Heightinputdata" name="Heightinputdata" value="<?php echo $_SESSION['Heightinputdata']; ?>">

    <label for="Disabilityinputdata">Disability:</label>
    <input type="text" id="Disabilityinputdata" name="Disabilityinputdata" value="<?php echo $_SESSION['Disabilityinputdata']; ?>">

    <label for="LastSchoolinputdata">Last School:</label>
    <input type="text" id="LastSchoolinputdata" name="LastSchoolinputdata" value="<?php echo $_SESSION['LastSchoolinputdata']; ?>">

    <label for="marksinputdata">Marks:</label>
    <input type="text" id="marksinputdata" name="marksinputdata" value="<?php echo $_SESSION['marksinputdata']; ?>">

    <label for="nationalitydata">Nationality:</label>
    <input type="text" id="nationalitydata" name="nationalitydata" value="<?php echo $_SESSION['nationalitydata']; ?>">

    <label for="religiondata">Religion:</label>
    <input type="text" id="religiondata" name="religiondata" value="<?php echo $_SESSION['religiondata']; ?>">

    <label for="categorydata">Category:</label>
    <input type="text" id="categorydata" name="categorydata" value="<?php echo $_SESSION['categorydata']; ?></">

    <label for="fatherninputdata">Father's Name:</label>
    <input type="text" id="fatherninputdata" name="fatherninputdata" value="<?php echo $_SESSION['fatherninputdata']; ?>">

    <label for="fathernqinputdata">Father's Qualification:</label>
    <input type="text" id="fathernqinputdata" name="fathernqinputdata" value="<?php echo $_SESSION['fathernqinputdata']; ?><">

    <label for="fatheroinputdata">Father's Occupation:</label>
    <input type="text" id="fatheroinputdata" name="fatheroinputdata" value="<?php echo $_SESSION['fatheroinputdata']; ?><">

    <label for="fatherdinputdata">Father's Designation:</label>
    <input type="text" id="fatherdinputdata" name="fatherdinputdata" value="<?php echo $_SESSION['fatherdinputdata']; ?>">

    <label for="fatheroaddresinputdata">Father's Office Address:</label>
    <input type="text" id="fatheroaddresinputdata" name="fatheroaddresinputdata" value="<?php echo $_SESSION['fatheroaddresinputdata']; ?>">

    <label for="fatherdiinputdata">Father's Income:</label>
    <input type="text" id="fatherdiinputdata" name="fatherdiinputdata" value="<?php echo $_SESSION['fatherdiinputdata']; ?>">

    <label for="motherninputdata">Mother's Name:</label>
    <input type="text" id="motherninputdata" name="motherninputdata" value="<?php echo $_SESSION['motherninputdata']; ?>">

    <label for="mothernqinputdata">Mother's Qualification:</label>
    <input type="text" id="mothernqinputdata" name="mothernqinputdata" value="<?php echo $_SESSION['mothernqinputdata']; ?>">

    <label for="motheroinputdata">Mother's Occupation:</label>
    <input type="text" id="motheroinputdata" name="motheroinputdata" value="<?php echo $_SESSION['motheroinputdata']; ?>">

    <label for="motherdinputdata">Mother's Designation:</label>
    <input type="text" id="motherdinputdata" name="motherdinputdata" value="<?php echo $_SESSION['motherdinputdata']; ?>">

    <label for="motherdiinputdata">Mother's Income:</label>
    <input type="text" id="motherdiinputdata" name="motherdiinputdata" value="<?php echo $_SESSION['motherdiinputdata']; ?>">

    <label for="FSNinputdata">First Sibling Name:</label>
    <input type="text" id="FSNinputdata" name="FSNinputdata" value="<?php echo $_SESSION['FSNinputdata']; ?>">

    <label for="SSNinputdata">Second Sibling Name:</label>
    <input type="text" id="SSNinputdata" name="SSNinputdata" value="<?php echo $_SESSION['SSNinputdata']; ?><">

    <label for="FSCinputdata">First Sibling Class:</label>
    <input type="text" id="FSCinputdata" name="FSCinputdata" value="<?php echo $_SESSION['FSCinputdata']; ?>">

    <label for="SSCinputdata">Second Sibling Class:</label>
    <input type="text" id="SSCinputdata" name="SSCinputdata" value="<?php echo $_SESSION['SSCinputdata']; ?>">

    <!--3rd form details-->
    <label for="Gnamedata">Guardian Name:</label>
    <input type="text" id="Gnamedata" name="Gnamedata" value="<?php echo $_SESSION['Gnamedata']; ?>">

    <label for="RWGinputdata">Relationship with Guardian:</label>
    <input type="text" id="RWGinputdata" name="RWGinputdata" value="<?php echo $_SESSION['RWGinputdata']; ?>">

    <label for="PHAinputdata">Permanent Home Address:</label>
    <input type="text" id="PHAinputdata" name="PHAinputdata" value="<?php echo $_SESSION['PHAinputdata']; ?>">

    <label for="Cityinputdata">City:</label>
    <input type="text" id="Cityinputdata" name="Cityinputdata" value="<?php echo $_SESSION['Cityinputdata']; ?>">

    <label for="Stateinputdata">Country:</label>
    <input type="text" id="Stateinputdata" name="Stateinputdata" value="<?php echo $_SESSION['Countryinputdata']; ?>">

    <label for="moniledata">mobile</label>
    <input type="text" id="mobiledata" name="mobiledata" value="<?php echo $_SESSION['Mobileinputdata']; ?>">

    <label for="Gphone">Gphone</label>
    <input type="text" name="Gphone" id="Gphone" value="<?php echo $_SESSION['GPhonedata']; ?>">
    
    <label for="Gemail">Gemail</label>
    <input type="text" name="Gemail" id="Gemail" value="<?php echo $_SESSION['GEmaildata']; ?>">

    <label for="Gpadress">Gpadress</label>
    <input type="text" name="Gpadress" id="Gpadress" value="<?php echo $_SESSION['PermanentHAinputdata']; ?>">

    <label for="Gstate">Gstate</label>
    <input type="text" name="Gstate" id="Gstate" value="<?php echo $_SESSION['GSinputdata']; ?>">

    <label for="Gzipcode">Gzipcode</label>
    <input type="text" name="Gzipcode" id="Gzipcode" value="<?php echo $_SESSION['Guardianzipcodeinputdata']; ?>">

    <label for="Ghomephone">Ghomephone</label>
    <input type="text" name="Ghomephone" id="Ghomephone" value="<?php echo $_SESSION['HPhoneinputdata']; ?>">

    <!--4th form details-->
    <label for="ref1">ref1</label>
    <input type="text" name="ref1" id="ref1" value="<?php echo $_SESSION['ref1data']; ?>">

    <label for="img1">img1</label>
    <input type="text" name="img1" id="img1" value="<?php echo $_SESSION['img1data']; ?>">

    <label for="board">board</label>
    <input type="text" name="board" id="board" value="<?php echo $_SESSION['boarddata']; ?>">

    <label for="school">school</label>
    <input type="text" name="school" id="school" value="<?php echo $_SESSION['schooldata']; ?>">

    <label for="rollno">rollno</label>
    <input type="text" name="rollno" id="rollno" value="<?php echo $_SESSION['roolnodata']; ?>">

    <label for="year">year</label>
    <input type="text" name="year" id="year" value="<?php echo $_SESSION['Yearsdata']; ?>">

    <label for="mo">mo</label>
    <input type="text" name="mo" id="mo" value="<?php echo $_SESSION['modata']; ?>">

    <label for="mm">mm</label>
    <input type="text" name="mm" id="mm" value="<?php echo $_SESSION['mmdata']; ?>">

    <label for="percenatge">percenatge</label>
    <input type="text" name="percenatge" id="percenatge" value="<?php echo $_SESSION['percentdata']; ?>">

    <label for="ref2">ref2</label>
    <input type="text" name="ref2" id="ref2" value="<?php echo $_SESSION['ref2data']; ?>">

    <label for="img2">img2</label>
    <input type="text" name="img2" id="img2" value="<?php echo $_SESSION['img2data']; ?>">

    <label for="ref3">ref3</label>
    <input type="text" name="ref3" id="ref3" value="<?php echo $_SESSION['ref3data']; ?>">

    <label for="img3">img3</label>
    <input type="text" name="img3" id="img3" value="<?php echo $_SESSION['img3data']; ?>">

    <label for="ref4">ref4</label>
    <input type="text" name="ref4" id="ref4" value="<?php echo $_SESSION['ref4data']; ?>">

    <label for="img4">img4</label>
    <input type="text" name="img4" id="img4" value="<?php echo $_SESSION['img4data']; ?>">

    <label for="ref5">ref5</label>
    <input type="text" name="ref5" id="ref5" value="<?php echo $_SESSION['ref5data']; ?>">

    <label for="img5">img5</label>
    <input type="text" name="img5" id="img5" value="<?php echo $_SESSION['img5data']; ?>">

    <label for="ref6">ref6</label>
    <input type="text" name="ref6" id="ref6" value="<?php echo $_SESSION['ref6data']; ?>">

    <label for="img6">img6</label>
    <input type="text" name="img6" id="img6" value="<?php echo $_SESSION['img6data']; ?>">

    <label for="ref7">ref7</label>
    <input type="text" name="ref7" id="ref7" value="<?php echo $_SESSION['ref7data']; ?>">

    <label for="img7">img7</label>
    <input type="text" name="img7" id="img7" value="<?php echo $_SESSION['img7data']; ?>">

    <label for="ref8">ref8</label>
    <input type="text" name="ref8" id="ref8" value="<?php echo $_SESSION['ref8data']; ?>">

    <label for="img8">img8</label>
    <input type="text" name="img8" id="img8" value="<?php echo $_SESSION['img8data']; ?>">

    <input type="submit" value="Submit">
</form>
<!-- JavaScript to handle redirection -->
<script>
    function redirectToEdit() {
        window.location.href = 'showdata.php';
    }
    </script>
</body>
</html>
