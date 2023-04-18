<?php 
include 'db.php';
if (isset($_POST['send']))

   {
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$msg=$_POST['msg'];
//$query=mysqli_query($conn, $email_query); 
//$emailcount=mysqli_num_rows($query);

$sql = "insert into contact_us(name,email,subject,msg) values('$name','$email','$subject','$msg')";
$res=mysqli_query($conn,$sql);
   if ($res)
   {  
   echo "<script>";
   echo "alert(' SUCCESSFULL SENT');";
   echo 'window.location.href="../index.php";';
   echo "</script>";
   }
   else
   {
   echo "<script>";
   echo "alert('FAILD TO SEND');";
   echo 'window.location.href="../index.php";';
   echo "</script>";
   }
   }