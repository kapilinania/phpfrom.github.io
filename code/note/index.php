<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    
    
  </head>
  <body>
<!-- php data insert here -->
<?php
include 'connection.php';



  if(isset($_POST['snoedit'])){
    $sno  =$_POST['snoEdit'];
    $name = $_POST['note_title_edit'];
    $passwordData = $_POST['note_area_edit'];


    $sql1 = "UPDATE `note` SET `title` = '$name', `desc_data` = '$passwordData' WHERE `note`.`s.no` = $sno";
    mysqli_query($con, $sql1);
    
    // echo 'yes';
    
    //update the record
  }
  else{
    $name = $_POST['note_title_edit'];
    $passwordData = $_POST['note_area_edit'];


    $sql = "INSERT INTO `note`(`s.no`, `title`, `desc_data`, `tstrmp`) VALUES ('','$name',' $passwordData ','')";
    if(mysqli_query($con, $sql)){
        //echo "<h3>Data stored in a database successfully.";
       echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
       <strong>Holy kapil!</strong> Your Data Should be
       <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
     </div>";
    
    } else{
        //echo "Data not store";
        echo mysqli_error();
    }
    }
    $result = mysqli_query($con,"SELECT * FROM note");  
    if (mysqli_num_rows($result) > 0) { 

?>


<!-- ------php data insert is closed----- -->
<!-- -------edit model code is here-------------- -->
<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editmodel">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="editmodel" tabindex="-1" aria-labelledby="editmodelLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editmodelLabel">Edit Record</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" action="">
        <input type="hidden" name="snoEdit" id="snoEdit">
                  <div class="mb-3">
                      <label for="note_edit" class="form-label">Note Title</label>
                      <input type="text" class="form-control" id="note_edit" aria-describedby="emailHelp" name="note_title_edit">   
                  </div>
                  <div class="mb-3">
                  <label for="note_area_edit" class="form-label"> Note Data</label>
                  <textarea class="form-control" id="note_area_edit" rows="3" name="note_area_edit"></textarea>
                  </div>
                                  
                  <button type="submit" class="btn btn-primary" name="snoEdit">Update</button>
              </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- ------edit model code is closed ---------------- -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center fs-1 mt-3">
                    Welcome to Note
                </div>
            </div>
            <div class="row">
              <form method="post" action="">
                  <div class="mb-3">
                      <label for="note" class="form-label">Note Title</label>
                      <input type="text" class="form-control" id="note" aria-describedby="emailHelp" name="note_title_edit">   
                  </div>
                  <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label"> Note Data</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="note_area_edit"></textarea>
                  </div>
                                  
                  <button type="submit" class="btn btn-primary" name="snoEdit">Submit</button>
              </form>
            </div>
            <div class="row mt-4    ">
            <table class="table" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">S.no</th>
                    <th scope="col">Title</th>
                    <th scope="col">Data</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <?php
                  $i=0;
                  while($row = mysqli_fetch_array($result)) {
                  ?>
                <tbody>
                  <tr>
                    <td> <?php echo  $i+1  ?></td>
                    <td> <?php echo  $row['title'];  ?> </td>
                    <td> <?php echo  $row['desc_data'];  ?> </td>
                    <td>
          <button type="button" class="btn btn-primary edit" id = <?php echo  $row['s.no'];   ?>>edit</button> <button type="button" class="btn btn-danger ">Delete</button>
                    </td>
                    
                      

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
    <script>
     edits = document.getElementsByClassName('edit');
      Array.from(edits).forEach((el)=>{
        el.addEventListener("click", (ele)=>{
          //console.log("edit",   );
          tr = ele.target.parentNode.parentNode;
          title = tr.getElementsByTagName("td")[1].innerText;
          desc = tr.getElementsByTagName("td")[2].innerText;
          console.log(title,desc);
          note_edit.value =title;
          note_area_edit.value =desc; 
          snoEdit.value = ele.target.id;
          console.log(ele.target.id);
          $('#editmodel').modal('toggle');


        })
      })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
      let table = new DataTable('#myTable');
    </script>
  </body>
</html>