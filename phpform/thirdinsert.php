<?php 

 include 'connection.php';



 if (isset($_POST['submit'])) {  
    $f_name = $_POST['fname'];
    $l_name = $_POST ['lname']; 
    $emailId = $_POST['emailid'];
    $cityData = $_POST['city'];
    $stateData = $_POST['state'];
    $zipData = $_POST['zip'];
    $dataValue = $_POST['datedata'];
    //$imageData  =$_POST['image'];
    //$passwordData =$_POST['sign'];
    $genderData = $_POST['gender'];
    $addDaat = $_POST['address'];
    $passwordData = $_POST['password'];
    $agree = $_POST['done_data'];
    $confirm = $_POST['confirm_data'];
    $rebot = $_POST['robbot_data']; 

    $imageData = $_FILES['image']['name'];
    $photoFiletemp = $_FILES['image']['tmp_name']; 
    $folder  = 'image/';

    move_uploaded_file($photoFiletemp, $folder.$imageData);

    //print_r($_FILES['sign']);
    $passwordData = $_FILES['sign']['name'];
    $SignFiletemp = $_FILES['sign']['tmp_name'];
    $foldersign  = 'sign/';

    move_uploaded_file($SignFiletemp, $foldersign.$passwordData);
    
    
    
    $queryFire = "INSERT INTO `add_data`(`s.no`, `first_name`, `last_name`, `email_id`, `city_data`, `state_data`, `zip_data`, `date_data`, `images`, `password_image`, `gender_data`, `address_data`, `password`, `agree`, `confirm`, `submit`) VALUES ('','$f_name','$l_name','$emailId','$cityData','$stateData','$zipData','$dataValue','$imageData','$passwordData','$genderData','$addDaat','$passwordData','$agree','$confirm','$rebot')";
    if(mysqli_query($con, $queryFire)){
        include 'thirdupdate.php';
    
       
    } else{
        echo "ERROR: Hush! Sorry $$queryFire. "
            . mysqli_error($con);
    }
     
    // Close connection
    mysqli_close($con);
    }
    
?>