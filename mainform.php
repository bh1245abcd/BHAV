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

  <div class="d-flex bg-dark container mt-2 px-0">
    <a href="mainform.php" class="bg-success text-light text-decoration-none col-3">
        <div class="firstbox"><p class="pt-2 text-center">Admission details</p></div>
    </a>
    <a href="personaldetail.php" class="text-light text-decoration-none col-3">
        <div class="secondbox"><p class="pt-2 text-center">Personal details</p></div>
    </a>
    <a href="contact.php" class="text-light text-decoration-none col-3">
        <div class="thirdbox"><p class="pt-2 text-center">Contact details</p></div>
    </a>
    <a href="latfrom.php" class="text-light text-decoration-none col-3">
        <div class="fourthbox"><p class="pt-2 text-center">Document details</p></div>
    </a>
  </div>

  <h4 class="mt-4" style="padding-left:105px">Admission Details</h4>

  <div class="container">
    <form action="mianformhandler.php" method="POST">
      <div class="row">
        <div class="col-md-6">
          <div class="mb-3">
            <label for="usernameinput" class="form-label">Username</label>
            <input type="text" class="form-control" id="usernameinput" name="usernameinput" required>
          </div>

          <div class="mb-3">
            <label for="nameinput" class="form-label">Name</label>
            <input type="text" class="form-control" id="nameinput" name="nameinput" required>
          </div>

          <div class="mb-3">
            <label for="branches" class="form-label">Branch</label>
            <select name="branches" id="branches" class="form-control" required>
              <option value="">--select--</option>
              <option value="one">The Shanti Niketan (SN) (A-252, Shastri Nagar, Jodhpur)</option>
              <option value="two">The Shanti Niketan Prep School (Kudi) (1912/2, Kudi Housing Board, Jodhpur)</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="Parentcourse" class="form-label">Parent Course</label>
            <input type="text" class="form-control" id="Pc" name="Pc" required>
          </div>
        </div>

        <div class="col-md-6">
          <div class="mb-3">
            <label for="emailinput" class="form-label">Email</label>
            <input type="email" class="form-control" id="emailinput" name="emailinput" required>
          </div>

          <div class="mb-3">
            <label for="Phoneinput" class="form-label">Phone</label>
            <input type="text" class="form-control" id="Phoneinput" name="Phoneinput" required>
          </div>

          <div class="mb-3">
            <label for="AY" class="form-label">Academic Year</label>
            <select name="AY" id="AY" class="form-control" required>
              <option value="">--select--</option>
              <option value="2020">2020</option>
              <option value="2021">2021</option>
              <option value="2022">2022</option>
              <option value="2023">2023</option>
            </select>
          </div>
        </div>
      </div>
  </div>

  <h4 class="mt-4" style="padding-left:105px">Previous Educational Details</h4>

  <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="mb-3">
            <label for="highestqualification" class="form-label">Highest Qualification</label>
            <input type="text" class="form-control" id="highestqualification" name="highestqualification" required>
          </div>
        </div>

        <div class="col-md-4">
          <div class="mb-3">
            <label for="Percenage" class="form-label">Percentage</label>
            <input type="text" class="form-control" id="Percenage" name="Percenage" required>
          </div>
        </div>

        <div class="col-md-4">
          <div class="mb-3">
            <label for="YP" class="form-label">Year Passed</label>
            <input type="text" class="form-control" id="YP" name="YP" required>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="mb-3">
            <label for="PIN" class="form-label">Previous Institute Name</label>
            <textarea name="PIN" id="PIN" class="form-control" rows="3" required></textarea>
          </div>
        </div>

        <div class="col-md-6">
          <div class="mb-3">
            <label for="IA" class="form-label">Institute Address</label>
            <textarea name="IA" id="IA" class="form-control" rows="3" required></textarea>
          </div>
        </div>
      </div>
      <input type="submit" vaalue="next">
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
