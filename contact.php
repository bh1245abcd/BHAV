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
      <a href="personaldetail.php" class="text-light text-decoration-none col-3">
        <div class="secondbox"><p class="pt-2 text-center">Personal details</p></div>
      </a>
      <a href="contact.php" class="text-light bg-success text-decoration-none col-3">
        <div class="thirdbox"><p class="pt-2 text-center">Contact details</p></div>
      </a>
      <a href="latfrom.php" class="text-light text-decoration-none col-3">
        <div class="fourthbox"><p class="pt-2 text-center">Document details</p></div>
     </a>

     </div>


     <h4 style="padding-left:105px;margin-top:10px">Contact Details</h4>
   
     <form action="contacthandler.php" method="POST">

     <div class="d-flex">

       <div class="me-5" style="padding-left:105px">

        <!--Gname-->
        <div class="mb-3">
        <label for="Gname" class="form-label">GuardianName</label>
        <input type="text" class="form-control" id="Gname" name="Gname"  style="width:640px" required>
        </div>
        <!--RWGinpuT-->
        <div class="mb-3">
        <label for="RWGinput" class="form-label">Relationship With Guardian</label>
        <input type="text" class="form-control" id="RWGinput" name="RWGinput"  style="width:640px" required>
        </div>
        <!--PHAinput-->
        <div class="mb-3">
        <label for="PHAinput" class="form-label">Present Home Address</label>
        <textarea name="PHAinput" id="PHAinput" class="form-control" style="width:640px" required></textarea>
        </div>
        <!--City-->
        <div class="mb-3">
        <label for="Cityinput" class="form-label">City</label>
        <input type="text" class="form-control" id="Cityinput" name="Cityinput"  style="width:640px" required>
        </div>
        <!--Country-->
        <div class="mb-3">
        <label for="Countryinput" class="form-label">Country</label>
        <select name="Countryinput" id="Countryinput" class="form-select" style="width:640px" required>
          <option value="chinese">Chinese</option>
          <option value="danish">Danish</option>
          <option value="egyptian">Egyptian</option>
          <option value="french">French</option>
          <option value="german">German</option>
          <option value="indian">Indian</option>
          <option value="italian">Italian</option>
          <option value="japanese">Japanese</option>
          <option value="mexican">Mexican</option>
        </select>
        </div>
        <!--Mobile-->
        <div class="mb-3">
        <label for="Mobileinput" class="form-label">Mobile</label>
        <input type="tel" class="form-control" id="Mobileinput" name="Mobileinput"  style="width:640px" required>
        </div>
       </div>

       <div>

        <!--GuarianPhone-->
        <div class="mb-3">
        <label for="GPhone" class="form-label">GuardianPhone</label>
        <input type="tel" class="form-control" id="GPhone" name="GPhone"  style="width:640px" required>
        </div>
        <!--GuardianEmail-->
        <div class="mb-3">
        <label for="GEmail" class="form-label">GuardianEmail</label>
        <input type="email" class="form-control" id="GEmail" name="GEmail"  style="width:640px" required>
        </div>
        <!--PermananentHAinput-->
        <div class="mb-3">
        <label for="PermanentHAinput" class="form-label">Permanent Home Address</label>
        <textarea name="PermanentHAinput" id="PermanentHAinput" class="form-control" style="width:640px" required></textarea>
        </div>
        <!--GuardianState-->
        <div class="mb-3">
        <label for="GSinput" class="form-label">GuardianState</label>
        <input type="text" class="form-control" id="GSinput" name="GSinput"  style="width:640px" required>
        </div>
        <!--Guardianzipcode-->
        <div class="mb-3">
        <label for="Guardianzipcodeinput" class="form-label">ZIP Code</label>
        <input type="text" class="form-control" id="Guardianzipcodeinput" name="Guardianzipcodeinput"  style="width:640px" required>
        </div>
        <!--Phone-->
        <div class="mb-3">
        <label for="HPhoneinput" class="form-label">Home Phone</label>
        <input type="tel" class="form-control" id="HPhoneinput" name="HPhoneinput"  style="width:640px" required>
        </div>
       </div>
       
     </div>

     <div class="text-center" style="padding-left:105px;margin-top:10px;">
       <input type="submit" class="btn btn-primary" value="Submit">
     </div>

    </form>
  
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>

