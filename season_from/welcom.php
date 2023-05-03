<?php 
session_start();
include("connection.php");
if ($_SESSION["mobile"]==true) {
   

    echo "Welcome sir"." ".$_SESSION["mobile"];
}
else{
    header('location:index.php');
}
?> 



<?php
$user=$_SESSION["mobile"];

$sql1 = "select * from sheet1 where mobile_num='$user'"; 
$query1 = mysqli_query($conn, $sql1);
$row1 = mysqli_fetch_array($query1);
$id=$row1["id"];

$sql = "select * from nsti WHERE user ='$id' "; 
$query = mysqli_query($conn, $sql);
$rowcount = mysqli_num_rows($query);



for ($i=0; $i<$rowcount; $i++)
 { 
    $row = mysqli_fetch_array($query);
    ?>

     <?php echo $row["name"]; ?>

    <?php
}

?>

<a href="logout.php">Logout</a>