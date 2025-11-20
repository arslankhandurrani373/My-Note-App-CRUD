<?php
require_once "DATA_BASE.php";
session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $query="SELECT * FROM login WHERE email ='$email' AND password = '$password'";
    $result=mysqli_query($connection,$query);
    if(mysqli_num_rows($result)==1){
        $row=mysqli_fetch_assoc($result);
            $_SESSION['name']=$row ['name'];//store login id of user name in session for wellcome note in notes. 
            $_SESSION['id']=$row ['login id'];// store login id of user in session for user id notes show.
        header("location:main.php");
    }else{
        header("location:index.php?msg= acc not found");
    }
}




?> 