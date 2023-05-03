
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid">
        <div class="container w-50 mx-auto">
            <div class="row  mt-5 shadow-sm p-3 mb-5 bg-body-tertiary rounded">
               <h3 class="text-center p-3">ADMIN REGISTRATION DATA</h3>
            
                <form class="row g-3 needs-validation" novalidate method="POST" action="thirdinsert.php" enctype="multipart/form-data"  auto_complete="off" >
                        <div class="col-md-4">
                            <label for="validationCustom01" class="form-label">First name</label>
                            <input type="text" class="form-control" id="validationCustom01" name="fname" value="" required>
                            <div class="valid-feedback">
                            Looks good!
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">Last name</label>
                            <input type="text" class="form-control" name="lname" id="validationCustom02" value="" required>
                            <div class="valid-feedback">
                            Looks good!
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustomUsername" class="form-label">Username</label>
                            <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                            <input type="email" class="form-control" name="emailid" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                            <div class="invalid-feedback">
                                Please choose a username.
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom03" class="form-label">City</label>
                            <input type="text" class="form-control" name="city" id="validationCustom03" required>
                            <div class="invalid-feedback">
                            Please provide a valid city.
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationCustom04" class="form-label">State</label>
                            <select class="form-select" id="validationCustom04" required name="state">
                            <option selected disabled value="">Choose...</option>
                            <option value="raj">Raj</option>
                            <option value = "up">up</option>
                            <option value="mp">mp</option>
                            <option value = "del">del</option>
                            </select>
                            <div class="invalid-feedback">
                            Please select a valid state.
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationCustom05" class="form-label">Zip</label>
                            <input type="text" class="form-control" name="zip" id="validationCustom05" required>
                            <div class="invalid-feedback">
                            Please provide a valid zip.
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom05" class="form-label">Date</label>
                            <input type="date" name="datedata" class="form-control" id="validationCustom05" required>
                            <div class="invalid-feedback">
                            Please provide a valid Date.
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom05" class="form-label">images</label>
                            <input type="file" name= "image" class="form-control" id="validationCustom05" required>
                            <div class="invalid-feedback">
                            image
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom05" class="form-label">sign</label>
                            <input type="file" name = "sign" class="form-control" id="validationCustom05" required>
                            <div class="invalid-feedback">
                           photo
                            </div>
                        </div>
                        <div class="col-4"> 
                        <label for="validationCustom05" class="form-label">Selct gender</label>
                        <div class="form-check">
                            <input class="form-check-input" name="gender" value="male" type="radio" name="flexRadioDefault" id="validationCustom05" >
                            <label class="form-check-label"  for="flexRadioDefault1" class="invalid-feedback">
                               Male
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" name= "gender" value="female" type="radio" name="flexRadioDefault" id="validationCustom05" checked >
                            <label class="form-check-label"  for="flexRadioDefault2" class="invalid-feedback">
                               Female
                            </label>
                            </div>
                        </div>
                        <div class="col-8">
                        <label for="validationCustom05" class="form-label" class="invalid-feedback">Address</label>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" 
                                 id="validationCustom05" style="height: 100px" name= "address" required></textarea>
                            <label for="floatingTextarea2">Comments</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom03" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="validationCustom03" required>
                            <div class="invalid-feedback">
                            Please provide a valid passoword.
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="done_data" value="agree" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">
                                Agree to terms and conditions
                            </label>
                            <div class="invalid-feedback">
                                You must agree before submitting.
                            </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="confirm_data" value="confirm" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">
                                Confirm Submit
                            </label>
                            <div class="invalid-feedback">
                                You must agree before submitting.
                            </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="robbot_data" value="robbot" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">
                               not a robbot
                            </label>
                            <div class="invalid-feedback">
                                You must agree before submitting.
                            </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit" name="submit">Submit form</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>