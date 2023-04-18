<?php

include "../db.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$del = mysqli_query($conn,"delete from farmer_info where id = '$id'"); // delete query

if($del)
{
    mysqli_close($conn); // Close connection
     echo  "<script>";
     echo "alert('Data deleted successfully');";
     echo 'window.location.href="../farmer_info.php";';
     echo "</script>";
     // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>