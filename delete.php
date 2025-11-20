<?php
require_once "DATA_BASE.php";
if(isset($_GET['id'])){
    $id=$_GET['id'];
$delete_query="DELETE FROM `note` WHERE `id` = '$id'";
$result_delete=mysqli_query($connection,$delete_query);
if($result_delete){
    header("location:main.php");
}else{
      echo"<div class='alert alert-danger alert-dismissible fade show' role='alert'>
  <strong>error Note was not Deleted ...</strong>
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
}
}

?>