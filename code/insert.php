<?php
include 'connection.php';
if (isset($_POST['submit'])) { 
    $name = $_POST['email'];
    $passwordData = $_POST['password'];


    $sql = "INSERT INTO `input_data`(`s.no`, `first_name`, `password`) VALUES ('','$name','$passwordData')";
    if(mysqli_query($con, $sql)){
        echo "<h3>Data stored in a database successfully.";
    
    } else{
        echo "Data not store";
        echo mysqli_error();
    }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php">index</a>
    <a href="update.php">Update</a>
</body>
</html>