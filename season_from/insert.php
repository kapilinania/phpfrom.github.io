<?php 
session_start();
include("connection.php");
if ($_SESSION["mobile"]==true) {
   

    echo "Welcome sir"." ".$_SESSION["mobile"];
}
else{
    header('location:index.php');
}



$user=$_SESSION["mobile"];
echo $user;
$sql = "select * from sheet1 where mobile_num='$user'"; 
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);
$id=$row["id"];

 if(isset($_REQUEST['submit']))
 {
 	$one1 = $_REQUEST["roll"];
 	$one2 = $_REQUEST["name"];
 	$one3 = $_REQUEST["dob"];
 	$one4 = $_REQUEST["cate"];
 	$one5 = $_REQUEST["trade"];
 	$one6 = $_REQUEST["date"];
 	$one7 = $_REQUEST["time"];
 	$one8 = $_REQUEST["city"];
 	$one9 = $_REQUEST["sysnum"];
 	$one01 = $_REQUEST["test"];
 	$one02 = $_REQUEST["mobile"];
 	$one03 = $_REQUEST["email"];

 	$insert = "INSERT INTO `nsti`(`roll_number`, `name`, `dob`, `cate`, `trade`, `date_test`, `time`, `city`, `sysnum`, `test_center`, `mobile_num`, `user_valid`, `email_id`) VALUES ('$one1','$one2','$one3','$one4','$one5','$one6','$one7','$one8','$one9','$one01','$one02','$id','$one03')"; 

    $query_in = mysqli_query($conn, $insert);



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
	<div class="container-fluid">
		<div class="conatiner">
			<div class="row">
				<form method="post">
					        <div class="mb-3">
							    <label class="form-label">Roll No</label>
							    <input type="text" class="form-control" name="roll">
							</div>
							<div class="mb-3">
							    <label class="form-label">Name</label>
							    <input type="text" class="form-control" name="name">
							</div>
							<div class="mb-3">
							    <label class="form-label">Dob</label>
							    <input type="text" class="form-control" name="dob">
							</div>
							<div class="mb-3">
							    <label class="form-label">cate</label>
							    <input type="text" class="form-control" name="cate">
							</div>
							<div class="mb-3">
							    <label class="form-label">trade</label>
							    <input type="text" class="form-control" name="trade">
							</div>
							<div class="mb-3">
							    <label class="form-label">date-test</label>
							    <input type="text" class="form-control" name="date">
							</div>
							<div class="mb-3">
							    <label class="form-label">time</label>
							    <input type="text" class="form-control" name="time">
							</div>
							<div class="mb-3">
							    <label class="form-label">city</label>
							    <input type="text" class="form-control" name="city">
							</div>
							<div class="mb-3">
							    <label class="form-label">sysnum</label>
							    <input type="text" class="form-control" name="sysnum">
							</div>
							<div class="mb-3">
							    <label class="form-label">test_center</label>
							    <input type="text" class="form-control" name="test">
							</div>
					
							<div class="mb-3">
							    <label class="form-label">mobile_num</label>
							    <input type="text" class="form-control" name="mobile">
							</div>
							<div class="mb-3">
							    <label class="form-label">email</label>
							    <input type="text" class="form-control" name="email">
							</div>
							<button type="submit" class="btn btn-primary" name="submit">Submit</button>
						</form>
			</div>
		</div>
	</div>

<a href="welcom.php">datapart</a>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>