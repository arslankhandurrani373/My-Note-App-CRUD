<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<style>
  .for12{
     border: 1px solid white;
  border-radius: 40px;
  padding: 30px 20px;
  color: aliceblue;
  backdrop-filter: blur(15px);
  max-width: 500px;
  margin: 50px auto}
</style>
  </head>
  <body id="login_body">
    <div class="container">
        <div class="row" >
            <div class="col-12 col-sm-12  mt-5">
           <div class="for12">
            <?php $msg=$_REQUEST['msg']??''; 
            if($msg){
                 echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
        <strong>login error plz check your email or password..</strong>
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
            }   ?>
             <center>  <form action="login_process.php" method="post">
               <h3><img src="icon/pencil.png" alt="loading" id="stick"> My Notes App Login</h3>
               <div class="mb-3 mt-5 ms-5 me-5">
                 <label for="exampleFormControlInput1" class="form-label"><img src="icon/email.png" alt="" id="em">  Email address</label>
                 <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email" required>
                </div>
                <div class="ms-5 me-5">
                <label for="inputPassword5" class="form-label"><img src="icon/reset-password.png" id="ps" alt="">  Password</label>
                <input type="password" id="inputPassword5" class="form-control " aria-describedby="passwordHelpBlock" name="password" placeholder="Password" required>
                <div id="passwordHelpBlock" class="form-text"><a href="reg.php">For Registration Click Here</a>
              </div></div>
              <button type="submit" name="submit" class="btn btn-primary mt-3">Sign in</button>
            </form></center>
          </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>