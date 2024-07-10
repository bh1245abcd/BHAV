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
      <a href="contact.php" class="text-light text-decoration-none col-3">
        <div class="thirdbox"><p class="pt-2 text-center">Contact details</p></div>
      </a>
      <a href="document.php" class="text-light bg-success  text-decoration-none col-3">
        <div class="fourthbox"><p class="pt-2 text-center">Document details</p></div>
     </a>

     </div>


     <h4 style="padding-left:105px;margin-top:10px">User Documents</h4>
   
     <form action="lastformhandler.php" method="POST" class="container">

       <div class="d-flex">
        
        <table class="table table-bordered">
           <thead class="table-dark">
           <tr>
            <th>Type</th>
            <th>Ref. Number</th>
            <th>Image</th>
            <th>Board</th>
            <th>School</th>
            <th>Roll Number</th>
            <th>Year</th>
            <!-- <th>Subjects</th> -->
            <th>Marks Obtained</th>
            <th>Maximum Marks</th>
            <th>Percent</th>
           </tr>   
           </thead>
           <tbody>
            <tr>
            <td>Previous marksheet</td><!--type-->
            <td><input type="text" placeholder="refra" class="form-control"  name="ref1" id="ref1" required></td><!--refra-->
            <td><input type="file" class="form-control" name="img1" id="img1" required></td><!--iamge-->
            <td><input type="text" placeholder="board" class="form-control"  name="board" id="board" required></td>
            <td><input type="text" placeholder="school" class="form-control" name="school"  id="school" required></td>
            <td><input type="text" placeholder="roll no" class="form-control"  name="rollno"  id="rollno" required></td>
            <td><input type="text" placeholder="year" class="form-control" name="Year"  id="Year" required></td>
            <!-- <td><input type="text" placeholder="sub" class="form-control" class="subjects"  id="subjects"></td> -->
            <td><input type="text" placeholder="mo" class="form-control" name="mo"  id="mo" required></td>
            <td><input type="text" placeholder="mm" class="form-control" name="mm"  id="mm" required></td>
            <td><input type="text" placeholder="Percent" class="form-control" name="percent"  id="percent" required></td>
           </tr>

            <tr>
            <td>Signature</td>
            <td><input type="text" placeholder="refra" class="form-control"  name="ref2" id="ref2" required></td>
            <td><input type="file" class="form-control" name="img2" id="img2" required></td>
            </tr>

            <tr>
            <td>TC Image</td>
            <td><input type="text" placeholder="refra" class="form-control"  name="ref3" id="ref3" required></td>
            <td><input type="file" class="form-control" name="img3" id="img3" required></td>
            </tr> 

            <tr>
            <td>Student Image</td>
            <td><input type="text" placeholder="refra" class="form-control"  name="ref4" id="ref4" required></td>
            <td><input type="file" class="form-control" name="img4" id="img4" required></td>
            </tr> 

            <tr>
            <td>Character Certificate</td>
            <td><input type="text" placeholder="refra" class="form-control"  name="ref5" id="ref5" required></td>
            <td><input type="file" class="form-control" name="img5" id="img5" required></td>
            </tr> 

            <tr>
            <td>Aadhar Card</td>
            <td><input type="text" placeholder="refra" class="form-control"  name="ref6" id="ref6" required></td>
            <td><input type="file" class="form-control" name="img6" id="img6" required></td>
            </tr>

            <tr>
            <td>Bhamashah Card</td>
            <td><input type="text" placeholder="refra" class="form-control"  name="ref7" id="ref7" required></td>
            <td><input type="file" class="form-control" name="img7" id="img7" required></td>
            </tr>
           
            <tr>
            <td>Income Certificate</td>
            <td><input type="text" placeholder="refra" class="form-control" name="ref8" id="ref8" required></td>
            <td><input type="file" class="form-control" name="img8" id="img8" required></td>
            </tr>
            </tbody>
            <input type="submit" value="submit">
        </table>
       </div>
       
     </form>
  
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
