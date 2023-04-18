<?php
session_start();
?>

<html>
    <title>Harvester</title>
    <head>
    <link rel="stylesheet" href="css/stylelog.css">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
    <link rel='stylesheet' href='//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
body{
      padding:50px;
      background-color: black;
      margin-left:20px;
}


 img{
  width: 180px;
  height: 200px;
  border-radius: 10px;
}

</style>
    </head>
<body>


<button type="button" class="btn btn-success bg" style="width:10%; float: right;">CART </button>

<div  style="margin-top: 70px; color: white; justify-content: center;">
 <center><h1 style="color: #77fb77; font-family:verdana; " >HARVESTER LIST </h1></center>

 <div class="container">

  <div class="row">
  <?php
include "db.php"; // Using database connection file here

$records = mysqli_query($conn,"select * from harvester"); // fetch data from database
while($data = mysqli_fetch_array($records))
{


?> 

    <div class="col-md-2 text-dark" style="margin-top: 30px;">
   

    <div class="card" style="width: 20rem;">
  <div class="card-body">
    <form action=" " method="POST">
    <h5 class="font-weight-bold mb-3" style="text-color:black;" name="name"><?php echo $data['name']; ?></h5>
    <?php echo "<img src='../uploads/".$data['image']."' >";?>
      
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><b>Mobile No:</b> <?php echo $data['mob']; ?></li>
    <li class="list-group-item"><b>Price: </b><?php echo $data['price']; ?> rs</</li>
    <li class="list-group-item"><b>Uploaded Date:</b> <?php echo $data['date']; ?></li>
    <li class="list-group-item"><b>Availability:</b> <?php echo $data['date']; ?></li>
  </ul>
  <div class="card-body">
    
    <button type="button" class="btn btn-success" style="width:50%; float: right;" name="cart">Add to Cart</button>
    
  </div>
</div>

</form>


    </div>
    <div class="col-sm">
    
    </div>
    <div class="col-sm">
     
    </div>
    <?php }
?>
  </div>


</div>
</div>
</div>
</div>



<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  if (isset($_POST['cart'])) {
    if (issest($_SESSION['cart'])) {
      # code...
    }
    else{
      $_SESSION['cart'][0]=array('name'=>$_POST['name']);
     // print_r($_SESSION['cart']);
     
    }
    
  }
}

?>

<h1><?php print_r($_SESSION['cart']); ?></h1>
</body>
</html>