<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<style>
  #reg{
  border: 1px solid white;
  border-radius: 40px;
  padding: 30px 20px;
  color: aliceblue;
  backdrop-filter: blur(15px);
  max-width: 500px;
  margin: 50px auto
}
</style>
  <body id="login_body">
    <div class="container">
      <?php $ok=$_REQUEST['ok']??'';
            $register=$_REQUEST['register']??'';
            $error=$_REQUEST['error']??'';
            if($ok){
                      echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>Acount has been Registerd Succesfully</strong>
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";}elseif($register){
              echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
  <strong>Acount already Registered</strong>
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
}elseif($error){
       echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
  <strong>Error Acount Not Registered</strong>
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
};
          ?>
        <div class="row mt-5" >
          <div class="col-12 col-sm-12">

            
            <center>  <form action="reg_proces.php" method="post" id="reg">
              <h3><img src="icon/pencil.png" alt="loading" id="stick"> My Notes App   Registration</h3>
              <div class="mb-3 mt-5">
                <p><img src="icon/id-card.png" alt="" id="nm">  Enter Your Name</p>
         <input class="form-control" type="text" aria-label="readonly input example" name="name"  placeholder="Enter Your Name">
                <div class="mb-3 mt-2">
  <label for="exampleFormControlInput1" class="form-label"><img src="icon/email.png" alt="" id="em">  Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
</div>
<label for="inputPassword5" class="form-label"><img src="icon/reset-password.png" id="ps" alt="">  Password</label>
<input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" name="password"  placeholder="Password">
<div id="passwordHelpBlock" class="form-text"><a href="index.php">Already Have an Acount Click Here for Login</a>
</div>
<button type="reset" name="reset" class="btn btn-success mt-3">Reset</button>
<button type="submit" name="submit" class="btn btn-primary mt-3">Register</button>

</form></center>
</div>
            </div>
        </div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>