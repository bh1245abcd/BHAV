<?php
// Database connection parameters
$servername = "localhost";  // Replace with your server name
$username = "root";     // Replace with your MySQL username
$password = "";     // Replace with your MySQL password
$dbname = "bhavya";  // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //FIRST TABLE RECORDS
    $usernaminputdata = $_POST['usernaminputdata'];
    $naminputdata = $_POST['naminputdata'];
    $branchesdata = $_POST['branchesdata'];
    $Parentcoursedata = $_POST['Parentcoursedata'];
    $emailinputdata = $_POST['emailinputdata'];
    $phoneinputdata = $_POST['phoneinputdata'];
    $AYdata = $_POST['AYdata'];
    $highestqualificationdata = $_POST['highestqualificationdata'];
    $Percenagedata = $_POST['Percenagedata'];
    $YPdata = $_POST['YPdata'];
    $PINdata = $_POST['PINdata'];
    $IAdata = $_POST['IAdata'];
    //SECOND TABLE RECORDS
    $firstnameinputdata = $_POST['firstnameinputdata'];
    $lastnameinputdata = $_POST['lastnameinputdata'];
    $genderinputdata = $_POST['genderinputdata'];
    $weightinputdata = $_POST['weightinputdata'];
    $EyeSightinputdata = $_POST['EyeSightinputdata'];
    $NPSchoolinputdata = $_POST['NPSchoolinputdata'];
    $Proficiencydata = $_POST['Proficiencydata'];
    $mediumdata = $_POST['mediumdata'];
    $mothertonguedata = $_POST['mothertonguedata'];
    $castdata = $_POST['castdata'];
    $middlenameinputdata = $_POST['middlenameinputdata'];
    $dobinputdata = $_POST['dobinputdata'];
    $Bloodgroupinputdata = $_POST['Bloodgroupinputdata'];
    $Heightinputdata = $_POST['Heightinputdata'];
    $Disabilityinputdata = $_POST['Disabilityinputdata'];
    $LastSchoolinputdata = $_POST['LastSchoolinputdata'];
    $marksinputdata = $_POST['marksinputdata'];
    $nationalitydata = $_POST['nationalitydata'];
    $religiondata = $_POST['religiondata'];
    $categorydata = $_POST['categorydata'];
    $fatherninputdata = $_POST['fatherninputdata'];
    $fathernqinputdata = $_POST['fathernqinputdata'];
    $fatheroinputdata = $_POST['fatheroinputdata'];
    $fatherdinputdata = $_POST['fatherdinputdata'];
    $fatheroaddresinputdata = $_POST['fatheroaddresinputdata'];
    $fatherdiinputdata = $_POST['fatherdiinputdata'];
    $motherninputdata = $_POST['motherninputdata'];
    $mothernqinputdata = $_POST['mothernqinputdata'];
    $motheroinputdata = $_POST['motheroinputdata'];
    $motherdinputdata = $_POST['motherdinputdata'];
    $motherdiinputdata = $_POST['motherdiinputdata'];
    $FSNinputdata = $_POST['FSNinputdata'];
    $SSNinputdata = $_POST['SSNinputdata'];
    $FSCinputdata = $_POST['FSCinputdata'];
    $SSCinputdata = $_POST['SSCinputdata'];
    //fields for 3rd table
    $Gnamedata = $_POST['Gnamedata'];
    $RWGinputdata = $_POST['RWGinputdata'];
    $PHAinputdata = $_POST['PHAinputdata'];
    $Cityinputdata = $_POST['Cityinputdata'];
    $Stateinputdata = $_POST['Stateinputdata'];
    $mobiledata = $_POST['mobiledata'];
    $GPhonedata = $_POST['Gphone'];
    $GEmaildata = $_POST['Gemail'];
    $PermanentHAinputdata = $_POST['Gpadress'];
    $GSinputdata = $_POST['Gstate'];
    $Guardianzipcodeinputdata = $_POST['Gzipcode'];
    $HPhoneinputdata = $_POST['Ghomephone'];
    //fields for 4th table
    $ref1data = $_POST['ref1'];
    $img1data = $_POST['img1'];
    $boarddata = $_POST['board'];
    $schooldata = $_POST['school'];
    $roolnodata = $_POST['rollno'];
    $Yearsdata = $_POST['year'];
    $modata = $_POST['mo'];
    $mmdata = $_POST['mm'];
    $percentdata = $_POST['percenatge'];
    $ref2data = $_POST['ref2'];
    $img2data = $_POST['img2'];
    $ref3data = $_POST['ref3'];
    $img3data = $_POST['img3'];
    $ref4data = $_POST['ref4'];
    $img4data = $_POST['img4'];
    $ref5data = $_POST['ref5'];
    $img5data = $_POST['img5'];
    $ref6data = $_POST['ref6'];
    $img6data = $_POST['img6'];
    $ref7data = $_POST['ref7'];
    $img7data = $_POST['img7'];
    $ref8data = $_POST['ref8'];
    $img8data = $_POST['img8'];
    // Repeat for all fields...

    // Example: Insert into MySQL database
    $sql = "INSERT INTO finaldetails (usernaminputdata,	naminputdata,branchesdata,Parentcoursedata,emailinputdata,phoneinputdata,AYdata,highestqualificationdata,Percenagedata,YPdata,PINdata,IAdata, 
                                         firstnameinputdata,lastnameinputdata,genderinputdata,weightinputdata,EyeSightinputdata,NPSchoolinputdata,Proficiencydata,mediumdata,mothertonguedata,castdata,middlenameinputdata,dobinputdata,Bloodgroupinputdata,Heightinputdata	, 
                                         Disabilityinputdata,LastSchoolinputdata,marksinputdata,nationalitydata,religiondata,categorydata,fatherninputdata,	fathernqinputdata,fatheroinputdata,fatherdinputdata,fatheroaddresinputdata, 
                                         fatherdiinputdata,motherninputdata,mothernqinputdata,motheroinputdata,motherdinputdata,motherdiinputdata,FSNinputdata,SSNinputdata,FSCinputdata, 
                                         SSCinputdata,Gnamedata,RWGinputdata,PHAinputdata,Cityinputdata,Stateinputdata,mobiledata,Gphone,Gemail,Gpadress, 
                                         Gstate,Gzipcode,Ghomephone,ref1,img1,board,school,rollno,year,mo,mm,percenatge,ref2, img2, 
                                         ref3, img3, ref4, img4, ref5, img5, ref6, img6, ref7, img7, ref8, img8)
            VALUES ('$usernaminputdata', '$naminputdata', '$branchesdata', '$Parentcoursedata', '$emailinputdata', '$phoneinputdata', '$AYdata', '$highestqualificationdata', '$Percenagedata', '$YPdata', 
                    '$PINdata', '$IAdata', '$firstnameinputdata', '$lastnameinputdata', '$genderinputdata', '$weightinputdata', '$EyeSightinputdata', '$NPSchoolinputdata', '$Proficiencydata', 
                    '$mediumdata', '$mothertonguedata', '$castdata', '$middlenameinputdata', '$dobinputdata', '$Bloodgroupinputdata', '$Heightinputdata', '$Disabilityinputdata', '$LastSchoolinputdata', 
                    '$marksinputdata', '$nationalitydata', '$religiondata', '$categorydata', '$fatherninputdata', '$fathernqinputdata', '$fatheroinputdata', '$fatherdinputdata', '$fatheroaddresinputdata', 
                    '$fatherdiinputdata', '$motherninputdata', '$mothernqinputdata', '$motheroinputdata', '$motherdinputdata', '$motherdiinputdata', '$FSNinputdata', '$SSNinputdata', '$FSCinputdata', 
                    '$SSCinputdata', '$Gnamedata', '$RWGinputdata', '$PHAinputdata', '$Cityinputdata', '$Stateinputdata', '$mobiledata', '$GPhonedata', '$GEmaildata', '$PermanentHAinputdata', '$GSinputdata', 
                    '$Guardianzipcodeinputdata', '$HPhoneinputdata', '$ref1data', '$img1data', '$boarddata', '$schooldata', '$roolnodata', '$Yearsdata', '$modata','$mmdata', '$percentdata', '$ref2data', '$img2data', 
                    '$ref3data', '$img3data', '$ref4data', '$img4data', '$ref5data', '$img5data', '$ref6data', '$img6data', '$ref7data', '$img7data', '$ref8data', '$img8data')";

    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    // Close connection
    $conn->close();
}
?>
