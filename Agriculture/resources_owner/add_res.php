<?php

include 'db.php';
if (isset($_POST['submit'])) {

   if(!empty($_POST['res_name'])) {  
      $selected = $_POST['res_name'];  
      if ($selected=="Harvester") {
         echo("hii");
      }
  } else {  
      echo 'Please select the value.';  
  }  
}



if(isset($_POST['submit']))
{
   $name=$_POST['name'];
   $mob=$_POST['mob'];
   $info=$_POST['info'];
$price=$_POST['price'];
$date=$_POST['date'];
   $file=$_FILES['file'];
   
   $filename=$_FILES['file']['name'];
   $fileTmpName=$_FILES['file']['tmp_name'];
   $fileSize=$_FILES['file']['size'];
   $fileError=$_FILES['file']['error'];
   $fileType=$_FILES['file']['type'];

   $fileExt=explode('.',$filename);
   $fileActualExt=strtolower(end($fileExt));
   $allowed=array('jpg','jpeh','png');

   if (in_array($fileActualExt,$allowed)) {
      if ($fileError==0) {
         if($fileSize<1000000){
            $fileNameNew=uniqid('',true).".".$fileActualExt;
            $fileDestination='../uploads/'.$fileNameNew;
           if(move_uploaded_file($fileTmpName,$fileDestination))
           {
            if(!empty($_POST['res_name'])) 
            {  
               $selected = $_POST['res_name'];  
               //harvester
               if ($selected=="Harvester") 
               {
                  $sql = "INSERT INTO harvester(name,mob,image,info, price,date) VALUES ( '$name','$mob','$fileNameNew','$info','$price','$date')";
                  $res=mysqli_query($conn,$sql);
                  if($res)
                  {
                     echo "<script>";
                     echo "alert('Resources Added Succefully');";
                     echo "</script>";
                  }
                  else
                  {
                     echo "<script>";
                     echo "alert('Resources not Added');";
                     echo "</script>";
                  }
               }
                //Rotary
                elseif ($selected=="Rotary") 
                {
                   $sql = "INSERT INTO Rotary(image,info, price,date) VALUES ( '$fileNameNew','$info','$price','$date')";
                   $res=mysqli_query($conn,$sql);
                   if($res)
                   {
                      echo "<script>";
                      echo "alert('Resources Added Succefully');";
                      echo "</script>";
                   }
                   else
                   {
                      echo "<script>";
                      echo "alert('Resources not Added');";
                      echo "</script>";
                   }
                }
                //Plough
                elseif ($selected=="Plough") 
                {
                   $sql = "INSERT INTO plough(image,info, price,date) VALUES ( '$fileNameNew','$info','$price','$date')";
                   $res=mysqli_query($conn,$sql);
                   if($res)
                   {
                      echo "<script>";
                      echo "alert('Resources Added Succefully');";
                      echo "</script>";
                   }
                   else
                   {
                      echo "<script>";
                      echo "alert('Resources not Added');";
                      echo "</script>";
                   }
                }

                //Leveler
                elseif ($selected=="Leveler") 
                {
                   $sql = "INSERT INTO Leveler(image,info, price,date) VALUES ( '$fileNameNew','$info','$price','$date')";
                   $res=mysqli_query($conn,$sql);
                   if($res)
                   {
                      echo "<script>";
                      echo "alert('Resources Added Succefully');";
                      echo "</script>";
                   }
                   else
                   {
                      echo "<script>";
                      echo "alert('Resources not Added');";
                      echo "</script>";
                   }
                }

                
                //Water
                elseif ($selected=="Water") 
                {
                   $sql = "INSERT INTO water(image,info, price,date) VALUES ( '$fileNameNew','$info','$price','$date')";
                   $res=mysqli_query($conn,$sql);
                   if($res)
                   {
                      echo "<script>";
                      echo "alert('Resources Added Succefully');";
                      echo "</script>";
                   }
                   else
                   {
                      echo "<script>";
                      echo "alert('Resources not Added');";
                      echo "</script>";
                   }
                }

                //Paddy
                elseif ($selected=="Paddy") 
                {
                   $sql = "INSERT INTO Paddy(image,info, price,date) VALUES ( '$fileNameNew','$info','$price','$date')";
                   $res=mysqli_query($conn,$sql);
                   if($res)
                   {
                      echo "<script>";
                      echo "alert('Resources Added Succefully');";
                      echo "</script>";
                   }
                   else
                   {
                      echo "<script>";
                      echo "alert('Resources not Added');";
                      echo "</script>";
                   }
                }
                else{
                  echo("Select option");
                }
               
           } 
           else{
            echo "<script>";
            echo "alert('Plese select the value');";
            echo "</script>";

           }
          }

         }else {  
            echo "<script>";
            echo "alert('Your file too big');";
            echo "</script>";     
          }
      }else{
         echo "<script>";
         echo "alert('There is an error uploading your file!');";
         echo "</script>";    
      }

      # code...
   }else {
      echo "<script>";
      echo "alert('You cannot upload file of this type');";
      echo "</script>"; 
   }
}
?>







