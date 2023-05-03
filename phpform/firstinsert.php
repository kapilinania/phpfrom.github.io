<?php 
 include 'connection.php';



 if (isset($_POST['submit'])) { //isset check variable is declare or not not than set null
    $emailId = $_POST['email'];;
    $passwordData = $_POST['password'];
    $checkData = $_POST['checkbox'];
    
    
    
    $queryFire = "INSERT INTO `admin_login`(`s.no`, `email_id`, `password`, `check_box`) VALUES ('','$emailId','$passwordData',' $checkData')";
    if(mysqli_query($con, $queryFire)){
        echo "<h3>Data stored in a database successfully."
            . " Please browse your localhost php my admin"
            . " to view the updated data</h3>";
    
        echo nl2br("\nEmail ID = $emailId\n Password = $passwordData\n ");
    } else{
        echo "ERROR: Hush! Sorry $$queryFire. "
            . mysqli_error($con);
    }
     
    // Close connection
    mysqli_close($con);
    }
    
?>