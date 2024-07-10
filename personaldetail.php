<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

   <!--topcoloum-->
  <div class="d-flex bg-dark container mt-2 px-0">
    <a href="mainform.php" class="text-light text-decoration-none col-3">
        <div class="firstbox"><p class="pt-2 text-center">Admission details</p></div>
    </a>
    <a href="personaldetail.php" class=" bg-success text-light text-decoration-none col-3">
        <div class="secondbox"><p class="pt-2 text-center">Personal details</p></div>
    </a>
    <a href="contact.php" class="text-light text-decoration-none col-3">
        <div class="thirdbox"><p class="pt-2 text-center">Contact details</p></div>
    </a>
    <a href="latfrom.php" class="text-light text-decoration-none col-3">
        <div class="fourthbox"><p class="pt-2 text-center">Document details</p></div>
    </a>
  </div>

<!--1stcoloum-->
<div class="1stbox" style="paddng-left:105px">

    <h4 style="padding-left:105px;margin-top:10px">Personal Details</h4>

    <form action="personaldetailhandler.php" method="POST">
 
        <div class="d-flex">

            <div class="1stbox me-5" style="padding-left:105px">
             <!--firstname-->
             <div class="mb-3">
             <label for="firstnameinput" class="form-label">firstname</label>
             <input type="text" class="form-control" id="firstnameinput" name="firstnameinput" style="width:640px" required>
             </div>
             <!--lastname-->
             <div class="mb-3">
             <label for="lastnameinput" class="form-label">latname</label>
             <input type="text" class="form-control" id="lastnameinput" name="lastnameinput" style="width:640px" required>
             </div>
             <!--Gender-->
             <div class="mb-3">
             <label for="Genderinput" class="form-label">Gender</label>
             <input type="text" class="form-control" id="Genderinput" name="Genderinput" style="width:640px" required>
             </div>
             <!--Wieght-->
             <div class="mb-3">
             <label for="Wieghtinput" class="form-label">Wieght</label>
             <input type="text" class="form-control" id="Weightinput" name="Weightinput" style="width:640px" required>
             </div>
             <!--EyeSiegth-->
             <div class="mb-3">
             <label for="EyeSieghtinput" class="form-label">EyeSieght</label>
             <input type="text" class="form-control" id="EyeSieghtinput" name="EyeSieghtinput" style="width:640px" required>
             </div>
             <!--NPSchool-->
             <div class="mb-3">
             <label for="NPSchoolinput" class="form-label">Name Of Previouss School</label>
             <input type="text" class="form-control" id="NPSchoolinput" name="NPSchoolinput" style="width:640px" required>
             </div>
             <!--Proficeincy-->
             <div class="mb-3">
             <label for="Proficiency" class="form-label">Proficiency In Games/co-curricular/outstanding Achievements</label>
             <input type="text" class="form-control" id="Proficiencyinput" name="Proficiencyinput" style="width:640px" required>
             </div>
             <!--Medium-->
             <div class="mb-3">
             <label for="Proficiency" class="form-label">Medium Of Instruction In Previous School(english/hindi)</label>
             <input type="text" class="form-control" id="mediuminput" name="mediuminput" style="width:640px" required>
             </div>
             <!--Mothertongue-->
             <div class="mb-3">
             <label for="Proficiency" class="form-label">Mother Tongue</label>
             <input type="text" class="form-control" id="mtinput" name="mtinput" style="width:640px" required>
             </div>
             <!--Caste-->
             <div class="mb-3">
             <label for="Cast" class="form-label">Caste Input</label>
             <input type="text" class="form-control" id="castinput" name="castinput" style="width:640px" required>
             </div>
            </div>

            <div class="2ndbox">
             <!--Middlename-->
             <div class="mb-3">
             <label for="middlenameinput" class="form-label">Middlename</label>
             <input type="text" class="form-control" id="middlenameinput" name="middlenameinput"  style="width:640px" required>
             </div>
             <!--Dob-->
             <div class="mb-3">
             <label for="dobinput" class="form-label">DOB</label>
             <input type="text" class="form-control" id="dobinput" name="dobinput"  style="width:640px" required>
             </div>
             <!--BloodGoup-->
             <div class="mb-3">
             <label for="BloodGroupinput" class="form-label">Blood Group</label>
             <input type="text" class="form-control" id="BloodGroupinput" name="BloodGroupinput"  style="width:640px" required>
             </div> 
             <!--Hieght-->
             <div class="mb-3">
             <label for="Hieghtinput" class="form-label">Hieght</label>
             <input type="text" class="form-control" id="Hieghtinput" name="Hieghtinput"  style="width:640px" required>
             </div>
             <!--Student Disability-->
             <div class="mb-3">
             <label for="Disabilityinput" class="form-label">Student Disability</label>
             <input type="text" class="form-control" id="Disabilityinput" name="Disabilityinput"  style="width:640px" required>
             </div>
             <!--ClassLastSchool-->
             <div class="mb-3">
             <label for="Lastschoolinput" class="form-label">ClassLastSchool</label>
             <input type="text" class="form-control" id="Lastschoolinput" name="Lastschoolinput"  style="width:640px" required>
             </div>
             <!--MarksObtainedLastExam-->
             <div class="mb-3">
             <label for="markssinput" class="form-label">Marks Obtained In The Last Examination In The Previous School</label>
             <input type="text" class="form-control" id="marksinput" name="marksinput"  style="width:640px" required>
             </div>
             <!--Nationality-->
             <label for="Nationality" class="form-label">Nationality</label><br>
             <select name="nationality" id="nationality" class="form-control mb-3" style="widthL640px" required>
                <option value="">--Select Nationality--</option>
                <option value="afghan">Afghan</option>
                <option value="albanian">Albanian</option>
                <option value="argentine">Argentine</option>
                <option value="australian">Australian</option>
                <option value="brazilian">Brazilian</option>
                <option value="canadian">Canadian</option>
                <option value="chinese">Chinese</option>
                <option value="danish">Danish</option>
                <option value="egyptian">Egyptian</option>
                <option value="french">French</option>
                <option value="german">German</option>
                <option value="indian">Indian</option>
                <option value="italian">Italian</option>
                <option value="japanese">Japanese</option>
                <option value="mexican">Mexican</option>
                <option value="nigerian">Nigerian</option>
                <option value="russian">Russian</option>
                <option value="spanish">Spanish</option>
                <option value="swedish">Swedish</option>
                <option value="thai">Thai</option>
                <option value="turkish">Turkish</option>
                <option value="american">American</option>
                <option value="british">British</option>
            </select>
              <!--Religon-->
              <div class="mb-3">
              <label for="religoninput" class="form-label">Religon</label>
              <select name="religon" id="religon" class="form-control" style="width:640px" required>
                <option value="">--Select Religon--</option>
                <option value="afghan">Christan</option>
                <option value="albanian">Hindu</option>
                <option value="argentine">Jain</option>
                <option value="australian">Muslim</option>
                <option value="australian">Sikh</option>
              </select>
              </div>
              <!--Category-->
              <div class="mb-3">
              <label for="Categoryinput" class="form-label">Category</label>
              <select name="category" id="category" class="form-control" style="widthL640px" required>
                <option value="">--Select Category--</option>
                <option value="gen">GEN</option>
                <option value="obc">OBC</option>
                <option value="st & sc">ST & SC</option>
              </select>
              </div>
            </div>

        </div>
        
        <!--2nd box-->
        <h4 style="padding-left:105px;margin-top:10px">Parent Details</h4>
   
        <div class="d-flex">

            <div class="3rdbox me-5" style="padding-left:105px">
             <!--fathername-->
             <div class="mb-3">
             <label for="fatherninput" class="form-label">father's name</label>
             <input type="text" class="form-control" id="fatherninput" name="fatherninput"  style="width:640px" required>
             </div>
             <!--fatherqualification-->
             <div class="mb-3">
             <label for="fatherqinput" class="form-label">father's qualification</label>
             <input type="text" class="form-control" id="fatherqinput" name="fatherqinput"  style="width:640px" required>
             </div>
             <!--fatherocupation-->
             <div class="mb-3">
             <label for="fatheroinput" class="form-label">father's occupation</label>
             <input type="text" class="form-control" id="fatheroinput" name="fatheroinput"  style="width:640px" required>
             </div>
             <!--fatehrdesignation-->
             <div class="mb-3">
             <label for="fatherdinput" class="form-label">father's designation</label>
             <input type="text" class="form-control" id="fatherdinput" name="fatherdinput"  style="width:640px" required>
             </div>
             <!--fatehrocupationadress-->
             <div class="mb-3">
             <label for="fatheroaddresinput" class="form-label">father's occupation addres</label>
             <input type="text" class="form-control" id="fatheroaddresinput" name="fatheroaddresinput"  style="width:640px" required>
             </div>
             <!--fatherincome-->
             <div class="mb-3">
             <label for="fatheriinput" class="form-label">father's income</label>
             <input type="text" class="form-control" id="fatheriinput" name="fatheriinput"  style="width:640px" required>
             </div>
            </div>

            <div class="4thbox ">
             <!--mothername-->
             <div class="mb-3">
             <label for="motherninput" class="form-label">mother's name</label>
             <input type="text" class="form-control" id="motherninput" name="motherninput"  style="width:640px" required>
             </div>
             <!--motherqualification-->
             <div class="mb-3">
             <label for="motherqinput" class="form-label">mother's qualification</label>
             <input type="text" class="form-control" id="motherqinput" name="motherqinput"  style="width:640px" required>
             </div>
             <!--motherocupation-->
             <div class="mb-3">
             <label for="motheroinput" class="form-label">mother's occupation</label>
             <input type="text" class="form-control" id="motheroinput" name="motheroinput"  style="width:640px" required>
             </div>
             <!--motehrdesignation-->
             <div class="mb-3">
             <label for="motherdinput" class="form-label">mother's designation</label>
             <input type="text" class="form-control" id="motherdinput" name="motherdinput"  style="width:640px" required>
             </div>
             <!--motehrocupationadress-->
             <div class="mb-3">
             <label for="motheroaddresinput" class="form-label">mother's occupation addres</label>
             <input type="text" class="form-control" id="motheroaddresinput" name="motheroaddresinput"  style="width:640px" required>
             </div>
             <!--motherincome-->
             <div class="mb-3">
             <label for="motheriinput" class="form-label">mother's income</label>
             <input type="text" class="form-control" id="motheriinput" name="motheriinput"  style="width:640px" required>
             </div>
            </div>

        </div>

        
        <!--3rd box-->
        <h4 style="padding-left:105px;margin-top:10px">Give the name of your brother and or sister studing in this school</h4>
   
        <div class="d-flex">

            <div class="5thbox me-5" style="padding-left:105px">
             <!--fathername-->
             <div class="mb-3">
             <label for="FSNinput" class="form-label">First Sibling Name</label>
             <input type="text" class="form-control" id="FSNinput" name="FSNinput"  style="width:640px" required>
             </div>
             <!--fatherqualification-->
             <div class="mb-3">
             <label for="SSNinput" class="form-label">Scond Sibling Name</label>
             <input type="text" class="form-control" id="SSNinput" name="SSNinput"  style="width:640px" required>
             </div>
            </div>

            <div class="6thbox">
             <!--mothername-->
             <div class="mb-3">
             <label for="FSCinput" class="form-label">First Sibling Class</label>
             <input type="text" class="form-control" id="FSCinput" name="FSCinput"  style="width:640px" required>
             </div>
             <!--motherqualification-->
             <div class="mb-3">
             <label for="SSCinput" class="form-label">Second Sibling Class</label>
             <input type="text" class="form-control" id="SSCinput" name="SSCinput"  style="width:640px" required>
             </div>
            </div>

        </div>

        <input type="submit" value="click here" style="margin-left:105px">

   </form>

</div>

  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>


