
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<style>
  .header_data{
    width: 60%;
    margin: auto;
    border: 1px dotted black;
    margin-top: 20px;
    border-radius: 10px;
  }
</style>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 text-center">Capturing Form Data Dealing with Multi-value field Generating File uploaded form
      </div>
    </div>
    <div class="container header_data p-4">
      <div class="row">
        <div class="col-12 text-center fw-bold fs-2">Fill Application form</div>
      </div>
      <div class="row">
        <form method="POST" action="1a.php" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"> Full Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="first_name">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email_id">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Select here</label>
            <select class="form-select" aria-label="Default select example" name="ibm_data"> 
              <option selected >Open this select menu</option>
              <option value="IBM" >IBM</option>
              <option value="CSA" >CSA</option>
              <option value="NONE" >NONE</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Address</label>
            <div class="form-floating">
              <textarea class="form-control" placeholder="Leave a Address here" id="floatingTextarea2" style="height: 100px" name="text_area"></textarea>
              <label for="floatingTextarea2">Comments</label>
            </div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" max="11" name="password">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Mobile Number</label>
            <input type="number" class="form-control" id="exampleInputPassword1" name="mobile_num">
          </div>
          <fieldset class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
            <div class="col-sm-10">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="Male" checked>
                <label class="form-check-label" for="gridRadios1">
                  Male
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="female">
                <label class="form-check-label" for="gridRadios2">
                  female
                </label>
              </div>
            </div>
          </fieldset>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Date Of Birth</label>
            <input type="date" class="form-control" id="exampleInputPassword1" name="dob">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Photo Upload</label>
            <input id="" name="photo_file" type="file" class=" form-control" data-browse-on-zone-click="true" value="upload">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Sign Upload</label>
            <input id="" name="sign_file" type="file" class=" form-control" data-browse-on-zone-click="true" value="upload">
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="check_box" value="Agree">
            <label class="form-check-label" for="exampleCheck1" >Check me out</label>
          </div>
          <button type="submit" class="btn btn-primary" name="save_select">Submit</button>
        </form>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
</body>

</html>