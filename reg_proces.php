<?php
session_start();
require_once "DATA_BASE.php";
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
   

    $sql="SELECT * FROM login WHERE email='$email'";
    $myresult=mysqli_query($connection,$sql);
    if(mysqli_num_rows($myresult) > 0){
    header("location:reg.php?register=okk");
    }else{
        $insert="INSERT INTO `login` (`name`, `email`, `password`) VALUES ('$name', '$email', '$password')"; 
        $query_result=mysqli_query($connection,$insert);
       
        if($query_result){
   header("location:reg.php?ok=ok");
}
else{ header("location:reg.php?error=error");mysqli_connect_errno($connection);
    
}}}

?>