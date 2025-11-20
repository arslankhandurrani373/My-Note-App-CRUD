<?php 
session_start();
// <..Data Base connection..>
require_once "DATA_BASE.php";
if($_SERVER['REQUEST_METHOD']=='POST'){
  $id=$_GET['id'];
  $title=$_POST['title'];
  $description=$_POST['description'];
  $update_query="UPDATE `note` SET `title` = '$title' , `description` = '$description' WHERE `id` = '$id'; ";
  $update_result=mysqli_query($connection,$update_query);
  if($update_result){
    header("location:main.php?msg=Note Updated Succesfully...");
}else{ 
  echo"<div class='alert alert-danger alert-dismissible fade show' role='alert'>
  <strong>error Note was not Updated...</strong>
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";

}
}



?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Note</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">


</head>
  <body>
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
                      <a class="nav-link active" aria-current="page" href="main.php">Home</a>
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
              <div class="col-12 col-sm-12 ">
              <center> <h1>Update My Note</h1></center>
              <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                <div class=" mb-3 ">
                  <label for="exampleFormControlInput1" class="form-label"><img src="icon/text.png" alt="not load" id="text">  Title</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" name="title">
                </div>
                <div class="mb-3 mt-4">
                  <label for="exampleFormControlTextarea1" class="form-label"><img src="icon/note.png" alt="loading" id="note">  Description</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"  name="description"></textarea>
                  <button type="submit" class=" mt-3 btn btn-primary" name="submit">Update Note</button>
                  
                </form>
              </div>
            </div>
<!-- form-end -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</div>
</body>
</html>
