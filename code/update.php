<?php 
 include 'connection.php';
 $result = mysqli_query($con,"SELECT * FROM input_data");   
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    
    <?php
        if (mysqli_num_rows($result) > 0) {
        ?>

 

    <div class="container-fluid">
        <div class="container">
            <div class="row">
            <table class="table">
  <thead>
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Email ID</th>
      <th scope="col">password</th>
      
    </tr>
  </thead>
           <?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
  <tbody>
    <tr>
      <th scope="row"><?php echo  $row['s.no'];  ?></th>
      <td><?php echo  $row['first_name'];  ?></td>
      <td><?php echo  $row['password'];  ?></td>
     
    </tr>
    <?php
			$i++;
			}
			?>
    

  </tbody>
</table>
<?php
}
else
{
    echo "No result found";
}
?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>