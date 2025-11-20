<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
     <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<style>
</style>
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
          <a class="nav-link" href="#">About</a>
        </li>
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
      </ul>
    </div>
  </div>
</nav>
            </div>
            
        <!-- navbar_END -->
    <center><h1 class="mt-3">About My Note App</h1></center><br>
    <p><b>About Me – Arslan Khan Durrani</b>
I am a Full Stack Developer This is my mini  Note App project.<br>
For the backend, I’m using PHP with MySQLi for database management.
For the frontend,<br> I’m using <b> HTML, CSS, Bootstrap, and JavaScript</b> to design and build the user interface.<br>
My role involves both the frontend and backend development, handling the complete flow of the application<br>
My Email <b> arslankhandurrani373@gmail.com</b></p>


</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>
</html>