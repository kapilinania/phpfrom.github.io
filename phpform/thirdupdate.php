<?php
include_once 'connection.php';
$result = mysqli_query($con,"SELECT * FROM add_data");
?> 
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .imag_data{
            width:70px;
            height:80px;
            border:0px solid red;
        }
        ul li{
            cursor: pointer;
        }
    </style>
  </head>
  <body>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center fs-1 mt-4">INSERT DATA IS HERE</div>
            </div>
            <?php
                if (mysqli_num_rows($result) > 0) {
                ?>
            <div class="row">
           <form action="" method="GET">
           <table class="table">
                <thead>
                    <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">gender_data</th>
                    <th scope="col">image</th>
                    <th scope="col">Decisition</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php
                        $i=0;
                        while($row = mysqli_fetch_array($result)) {
                        ?>
                    </tr>
                    <tr>
                    <th scope="row"><?php echo $row["s.no"]; ?></th>
                    <td><?php echo $row["first_name"].$row["last_name"]; ?></td>
                    <td><?php echo $row["email_id"]; ?></td>
                    <td><?php echo $row["zip_data"]; ?></td>
                    <td><?php echo $row["gender_data"]; ?></td>
                    <td><img src="image/<?php echo $row['images']; ?>" alt="no images"  class="img-fluid imag_data"></td>
                    
                    <td>
                        <ul class="d-flex list-unstyled">
                            <li class="p-2"><i class="fa-solid fa-pen-to-square" style="color: #0440f6;"></i></li>
                            <li class="p-2" name="delete_data"> <a href='thirddelete.php?id=".$result['s.no']."' id='btn'><i class="fa-solid fa-trash-can" style="color: #ff0000;"></i></a> </li>
                            <li class="p-2"><i class="fa-solid fa-book-open-reader" style="color: #fb14ff;"></i></li>
                            <li class="p-2"><i class="fa-solid fa-file-pen" style="color: #0084ff;"></i></li>
                        </ul>
                    </td>
                  
                    </tr>
                    
                    
                    <?php
                        $i++;
                        }
                        ?>
                </tbody>
            </table>
           </form>
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
















