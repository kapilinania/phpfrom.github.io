<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      include 'connection.php';

      $sql = "DELETE FROM `input_data` WHERE `input_data`.`s.no`= 5 LIMIT 2";
      $result = mysqli_query($con, $sql);
      $aff = mysqli_affected_rows($con);
      echo "Number of row $aff is affected";
    ?>
</body>
</html>