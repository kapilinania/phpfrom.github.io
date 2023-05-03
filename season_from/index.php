<?php
session_start();
 include("connection.php");
 if(isset($_REQUEST['submit']))
 {
 	$user=$_REQUEST["mobile"];
 	$pass=$_REQUEST["pass"];

 	$sql = "select * from sheet1 where mobile_num='$user' && password='$pass'"; 

    $query = mysqli_query($conn, $sql);
 	$rowcount = mysqli_num_rows($query);
 	if($rowcount == true)
 	{
 		$_SESSION["mobile"]=$user;
 		header('location:insert.php');
 	}
 	else{
 		echo "password is wrong";
 	}
 }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BootStrap Project</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container-fluid bg-dark">
		<div class="container border border-warning">
			<div class="row welcome">
				<div class="col-md-8  h1 mt-2 mb-2 text-white text-center ">Welcome to Jodhpur</div>
				
				<div class="col-md-2  ">
					<button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
					  Login
					</button>

                   <!-- model paert is here ----------- -->
					<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Login Now</h5>
					        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					      </div>
					        <div class="modal-body">
					          <form method="post">
							  <div class="mb-3">
							    <label class="form-label">Enter Mobile Number</label>
							    <input type="text" class="form-control" name="mobile">
							  </div>
							  <div class="mb-3">
							    <label  class="form-label">Password</label>
							    <input type="password" class="form-control" name="pass">
							  </div>	
					          </div>
						      <div class="modal-footer">
						        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
						      </div>
					          </form>
					    </div>
					  </div>
					</div>
				</div>
				<div class="col-md-2 ">
					<button type="button" class="btn btn-warning mt-3" data-bs-toggle="modal" data-bs-target="#register">
					  Registration
					</button>

                   <!-- model paert is here ----------- -->
					<div class="modal fade" id="register" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Register Here</h5>
					        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					      </div>
					      <div class="modal-body">
					        <form method="post">
					        	<div class="mb-3">
							    <label class="form-label">Enter Name</label>
							    <input type="text" class="form-control">
							  </div>
							  <div class="mb-3">
							    <label class="form-label">Enter Mobile Number</label>
							    <input type="text" class="form-control">
							  </div>
							  <div class="mb-3">
							    <label class="form-label">Enter Email Id</label>
							    <input type="text" class="form-control">
							  </div>
							  <div class="mb-3">
							  	<label class="form-label">Trade</label>
							    <select class="form-select" aria-label="Default select example">
								  <option selected>--Select Trade ---</option>
								  <option value="CSA">CSA</option>
								  <option value="IBM">IBM</option>
								  <option value="ADIT">ADIT</option>
								  <option value="NSTI">NSTI</option>
								  <option value="NIMI">NIMI</option>
								  <option value="FITER">FITER</option>
								</select>
							  </div>
							  <div class="mb-3">
							    <label  class="form-label">Password</label>
							    <input type="password" class="form-control">
							  </div>	
					          </div>
						      <div class="modal-footer">
						        <button type="submit" class="btn btn-primary">Submit</button>
						      </div>
					        </form>
					    </div>
					  </div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>
</div>



<!-- ------------------------------End cdn link is here ------------------------------ -->
	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>