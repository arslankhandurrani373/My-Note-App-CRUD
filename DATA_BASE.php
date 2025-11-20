<?php
$server_name="localhost";
$user_name="root";
$password="";
$data_base="my_note_app";

$connection= mysqli_connect($server_name,$user_name,$password,$data_base);

if(!$connection){
    die("error in Data Base".mysqli_connect_error());
}else{
    // echo"<p style='color:green'>Database Succesfully Connect</p>";
}
?>