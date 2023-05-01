<?php 
  include 'connection.php';
?>
<?php
if (isset($_POST['save_select'])) {
$firstName = $_POST['first_name'];
$emailId = $_POST['email_id'];
$selectData = $_POST['ibm_data'];
$textArea = $_POST['text_area'];
$passwordDate = $_POST['password'];
$mobileNum = $_POST['mobile_num'];
$gender = $_POST['gridRadios'];
$dobData = $_POST['dob'];
$checkBox = $_POST['check_box'];
//file code is here
//$photoFile = $_POST['photo_file'];
//$SignFile = $_POST['sign_file'];
print_r($_FILES['photo_file']);
$photoFile = $_FILES['photo_file']['name'];
$photoFiletemp = $_FILES['photo_file']['tmp_name']; 
$folder  = 'image/';

move_uploaded_file($photoFiletemp, $folder.$photoFile);

print_r($_FILES['sign_file']);
$SignFile = $_FILES['sign_file']['name'];
$SignFiletemp = $_FILES['sign_file']['tmp_name'];
$foldersign  = 'signd/';

move_uploaded_file($SignFiletemp, $foldersign.$SignFile);



$querySection = "INSERT INTO `1`(`s.no`, `first_name`, `email_id`, `select_data`, `text_area`, `password`, `mobile_num`, `gender`, `dob`, `photo`, `sign`, `check`) VALUES ('','$firstName','$emailId','$selectData','$textArea','$passwordDate','$mobileNum','$gender','$dobData','$photoFile','$SignFile','$checkBox')";
if(mysqli_query($conn, $querySection)){
    echo "<h3>data stored in a database successfully."
        . " Please browse your localhost php my admin"
        . " to view the updated data</h3>";

    echo nl2br("\n$firstName\n $$emailId\n ");
} else{
    echo "ERROR: Hush! Sorry $$querySection. "
        . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);
}






?>