<?php include '../db.php';
 if (isset($_POST['signup']))

   {
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$mob=$_POST['mob'];
$address=$_POST['address'];
//signup
//email ID check 
$email_query="SELECT * from owner_info where email='$email'";

   $query=mysqli_query($conn, $email_query); $emailcount=mysqli_num_rows($query);
   if ($emailcount>0)
   {
      echo "<script>";
      echo " alert('Email already exists');";
      echo "</script>";
   }
   else {
      $sql = "insert into owner_info(name,email,mob,address,password) values('$name','$email','$mob','$address','$password')";
$res=mysqli_query($conn,$sql);
   if ($res)
   {  
   echo "<script>";
   echo "alert('REGISTER SUCCESSFULL');";
   echo "</script>";
   }
   else
   {
   echo "<script>";
   echo "alert('REGISTER UNSUCCESSFULL  FILL CORRECT DATA');";
   echo "</script>";
   }
   }
}


//log in
if (isset($_POST['login']))

  {

  extract($_POST);

  // code...
  $email=mysqli_real_escape_string($conn,$_POST['email']); $password=mysqli_real_escape_string($conn,$_POST['password']);
  $log=mysqli_query($conn,"select * from owner_info where  email='$email' and password='$password'")

  or die(mysqli_error($conn ));

  if (mysqli_num_rows($log)>0)
  {
  $fetch=mysqli_fetch_array($log);
  $_SESSION['id']=$fetch['id'];
  $_SESSION['email']=$fetch['email']; $_SESSION['password']=$fetch['password']; // code...
  echo "<script>";
  echo "alert('login Successful');";
    echo 'window.location.href="add_res_design.php";';
  echo "</script>";
  }
  else
  { 
  echo  "<script>";
  //echo "alert('Email and password doesn't match');";
  echo 'window.location.href="index.php";';
  echo "</script>";
  }

  }
   

if (isset($_POST['forgot']))
  {
 
 $namef = $_POST['username'];
 $password = $_POST['password'];
 $newpassword = $_POST['newpassword'];
 $confirmnewpassword = $_POST['confirmnewpassword'];
 
 $email_query="SELECT * from owner_info where email='$namef'";
 
 $query=mysqli_query($conn, $email_query); $emailcount=mysqli_num_rows($query);
 if ($emailcount>0)
 {
 if($newpassword==$confirmnewpassword)
 $sql=mysqli_query($conn,"UPDATE owner_info SET password='$newpassword' where 
 
 email='$name'");
 if($sql)
 {
 echo "<script>";
 echo " alert('Congratulations You have successfully changed your password');";
 echo 'window.location.href="index.php";';
 echo "</script>";
 
 }
 else
 {
 echo "<script>";
 echo " alert('Passwords do not match');";
 echo 'window.location.href="index.php";';
 echo "</script>";
 
 }
 }
 
 else{
 echo "<script>";
 echo " alert('The username you entered does not exist');";
 echo 'window.location.href="index.php";';
 echo "</script>";
 }
 }
$conn->close();

?>