<?php 
session_start();
include '../db.php';
//log in
if (isset($_POST['login']))

  {

  extract($_POST);

  // code...
  $email=mysqli_real_escape_string($conn,$_POST['email']); $password=mysqli_real_escape_string($conn,$_POST['password']);
  $log=mysqli_query($conn,"select * from admin where  email='$email' and password='$password'")

  or die(mysqli_error($conn ));

  if (mysqli_num_rows($log)>0)
  {
  $fetch=mysqli_fetch_array($log);
  $_SESSION['id']=$fetch['id'];
  $_SESSION['email']=$fetch['email'];
   $_SESSION['password']=$fetch['password']; // code...
  $_SESSION['name']=$fetch['name'];
  echo "<script>";
  echo "alert('login Successful');";
    echo 'window.location.href="../menu.php";';
  echo "</script>";
  }

  else

  { 

  echo  "<script>";
 
  //echo "alert('Email and password doesn't match');";
  echo 'window.location.href="../index.php";';
  echo "</script>";

  

  

  }

  }
   
$conn->close();

?>