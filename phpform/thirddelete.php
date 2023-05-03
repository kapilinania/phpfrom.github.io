<?php   
 include 'connection.php';  
 if (isset($_GET['s.no'])) {  
      $id = $_GET['s.no'];  
      $query = "DELETE FROM `add_data` WHERE s.no = '$id'";  
      $run = mysqli_query($con,$query);  
      if ($run) {  
           header('location:index.php');  
      }else{  
           echo "Error: ".mysqli_error($con);  
      }  
 }  
 ?>  