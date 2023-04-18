<?php

include '../db.php';

$msg = "";
 
// If upload button is clicked ...

if (isset($_POST['update'])) {
 

    $filename = $_FILES["uploadfile"]["name"];

    $tempname = $_FILES["uploadfile"]["tmp_name"];

    $folder = "../uploads/" . $filename;
 
    $nameu=$_POST['nameu'];
    $emailu=$_POST['emailu'];
    $mobu=$_POST['mobu'];
    $idu=$_SESSION['id'];
$sql = "UPDATE admin ". "SET name = '$nameu' , mob='$mobu'". 
               "WHERE id = '$idu'" ;
           
    // Execute query

   $result= mysqli_query($conn, $sql);
 
if($result)
{
    echo "<script>";
        echo "alert(' Data updated successfully!')";
        //echo 'window.location.href="../profile.php";';
       echo "</script>";
    } else {
echo "alert(' Failed to update data!')";
//echo 'window.location.href="./profile.php";';
 
       echo "</script>";
      

    }
}


//password change
if (isset($_POST['updatepass']))
  {
 
$namef = $_POST['username'];
 $password = $_POST['password'];
 $newpassword = $_POST['newpassword'];
 $confirmnewpassword = $_POST['confirmnewpassword'];
 
 $email_query="SELECT * from admin where email='$namef'";
 
 $query=mysqli_query($conn, $email_query); $emailcount=mysqli_num_rows($query);
 if ($emailcount>0)
 {
 if($newpassword==$confirmnewpassword)
 $sql=mysqli_query($conn,"UPDATE admin SET password='$newpassword' where 
 
 email='$name'");
 if($sql)
 {
 echo "<script>";
 echo " alert('Congratulations You have successfully changed your password');";
 echo 'window.location.href="../profile.php";';
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
 
 
 
 //logout
 
 
 session_destroy();
 
 echo "<script>";
 echo " alert('Logout successfully');";
 echo 'window.location.href="../index.php";';
 echo "</script>";
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 






?>