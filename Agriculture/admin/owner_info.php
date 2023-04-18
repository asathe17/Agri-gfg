<!DOCTYPE html>
<html>
<head>
  <title>Display all records from Database</title>
<!---boostrap--->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


<style>
body{
text-align: center;
background-color:#fffff7;
}
h2
{
padding-top: 100px;
text-align: center;
 position: relative;
}
table{
margin-top:50px;
}

button
{
background-color:red;
color:#fff;
border-radius:10px;
}
</style>
</head>
</head>
<body>

<h2>Resource Owner Details</h2>

<center><table class="table table-striped">
  <tr>
    <td>Sr.No.</td>
    <td>Full Name</td>
    <td>Email address</td>
    <td>Mobile no</td>
    <td>Address</td>
    <td>Delete</td>
  </tr>

<?php
include "menu.php";
include "../db.php"; // Using database connection file here

$records = mysqli_query($conn,"select * from owner_info"); // fetch data from database
$dataa['id']=1;
while($data = mysqli_fetch_array($records))
{

?>
  <tr>
    <td><?php echo $dataa['id']; ?></td>
    <td><?php echo $data['name']; ?></td>
    <td><?php echo $data['email']; ?></td>    
<td><?php echo $data['mob']; ?></td>
    <td><?php echo $data['address']; ?></td>
    
       <td>
       <a href="php/o_delete.php?id=<?php echo $data['id']; ?>"><button>Delete</button></a></td>
  </tr>	
<?php
$dataa['id']=$dataa['id']+1;
}
?>
</table></center>

</body>
</html>