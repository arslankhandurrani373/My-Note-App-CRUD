<?php
session_start();
require_once "DATA_BASE.php";
// <...insert data code...> 
if($_SERVER['REQUEST_METHOD'] == "POST"){
  $title=$_POST['title'];
  $description=$_POST['description'];
  $user_id=$_SESSION['id'];
$query="INSERT INTO `note` (`login id`,`title`, `description`) VALUES ('$user_id','$title', '$description');";
$result=mysqli_query($connection,$query);
if($result){
  echo"<div class='alert alert-info alert-dismissible fade show' role='alert'>
  <strong>Note Saved Succesfully..</strong>
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
}else{
  echo"<div class='alert alert-danger alert-dismissible fade show' role='alert'>
  <strong>error Note was not Inserted ...</strong>
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
}
}
// <...insert data code end ...>
// <...Show data code from data base...>
$user_id=$_SESSION['id']; // use for store user id 
$show_query="SELECT * FROM note WHERE `login id` = '$user_id'";
$show_result= mysqli_query($connection,$show_query);

// <..update data msg..>
$msg=$_REQUEST['msg']??'';

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Note App</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

</head>
  <body>
     <!-- <..update data msg..> -->
  <?php if($msg){
    echo "<div class='alert alert-info alert-dismissible fade show' role='alert'>
  <strong>Note Updated Succesfully..</strong>
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";}?>
  <!-- <..update data msg end..> -->
        <div class="container-fluid">
            <!-- navbar_start -->
        <div class="row">
          <div class="col-12 col-sm-12">

            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
              <div class="container-fluid">
                <a class="navbar-brand"><img src="icon/pencil.png" alt="noy load" id="sticky"> My Notes</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="about.php">About</a>
        </li>
      </ul>
    </div>
    <div>
    <li class="nav-item dropdown text-light " id="logout">
                    <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Wellcome: <?php echo $_SESSION['name'];?>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                        </ul>
                      </li>
                      </div>
                  </div>
                </nav>
              </div>
            </div>
        <!-- navbar_END -->
         <!-- form-start -->
<div class="row" id="form" >
  <div class="col-12 col-sm-12 ms-auto">

    <center> <h1>Wellcome to My Notes App</h1></center>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
      <div class=" mb-3 ">
        <label for="exampleFormControlInput1" class="form-label"><img src="icon/text.png" alt="not load" id="text" >  Title</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Title of Notes" name="title"required>
      </div>
      <div class="mb-3 mt-4">
        <label for="exampleFormControlTextarea1" class="form-label"><img src="icon/note.png" alt="loading" id="note">  Description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Enter Description of Notes" name="description" required></textarea>
        <button type="submit" class=" mt-3 btn btn-primary" name="submit">Save Note</button>
      </form>
    </div>
  </div>
    <!-- form-end -->
 <!-- data-table-start -->
<div class="row my-3" >
  <div class="table-responsive">

    <center><h1>Saved Notes</h1></center>
    <table id="ak" class="table table-striped table-bordered">
      <thead> 
        
        <tr>
          <th>#Sr</th>
          <th>Title of Notes</th>
                <th>Description of Notes</th>
                <th>Edit   Delete</th>
            </tr>
        </thead>
        <tbody>
          <!-- <...while loop to Show data dynamically ...> -->
          <?php while($show_data=mysqli_fetch_assoc($show_result) ):   ?>
            <tr>
              <td><?php echo $show_data ['id']?></td>
              <td><?php echo $show_data ['title']?></td>
              <td><?php echo $show_data ['description']?></td>
              <td>
                <button type="button" class="btn btn-success"><a href="edit.php?id=<?php echo $show_data ['id']?>" style="text-decoration: none; color:white"><img src="icon/note (1).png" height="30px" width="30px" alt=""> Edit</a></button>
                <button type="button" class="btn btn-danger" onclick="return confirm('Are you sure to delete this note')"><a href="delete.php?id=<?php echo $show_data ['id']?>" style="text-decoration: none; color:white"><img src="icon/bin.png" height="30px" width="30px" alt="" > Delete</a></button>
              </td>
            </tr>
            <?php endwhile;?>
            
            <!-- endloop -->
          </tbody>
        </table>
      </div>
    
<!-- data-table-end -->



 <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function () {
    $('#ak').DataTable({
      responsive:true,
        "order": [[ 0, "desc" ]]
    });
}); </script></div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</div>
</body>
</html>