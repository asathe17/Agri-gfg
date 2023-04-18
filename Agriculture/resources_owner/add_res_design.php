<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Registration</title>
  <link rel="stylesheet" href="css/styleadd.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!DOCTYPE html>
<head>
  <link href='https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
  <link href='//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css' rel='stylesheet' type='text/css'>
  <link href='//cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/1.8/css/bootstrap-switch.css' rel='stylesheet' type='text/css'>
  <link href='https://davidstutz.github.io/bootstrap-multiselect/css/bootstrap-multiselect.css' rel='stylesheet' type='text/css'>
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js' type='text/javascript'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.0/js/bootstrap.min.js' type='text/javascript'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js' type='text/javascript'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/1.8/js/bootstrap-switch.min.js' type='text/javascript'></script>
  <script src='https://davidstutz.github.io/bootstrap-multiselect/js/bootstrap-multiselect.js' type='text/javascript'></script>
</head>
<body style=" padding:50px;background-color: black;">

  <!-- partial:index.partial.html -->
  <div id="main">
<nav class="navbar navbar-default navbar-inverse" role="navigation" style="margin-top: 0;" >
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a  href="#main"><img src="img/logo.svg"  width="60px" height="45px"/></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      <ul class="nav navbar-nav navbar-right">
        
            <li><a href="add_ser.php">Add Services</a></li>
            <li><a href="#services">List of Services</a></li>
            <li><a href="#contact_us">Contact us</a></li>
            <li><a href="pro.php">Profile</a></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
<form class="signup-form" action="add_res.php" method="post" enctype="multipart/form-data">

<!-- form header -->
<div class="form-header">
  <h1>Add Resources</h1>
</div>

<!-- form body -->

<div class="form-body">

   <!-- Name -->
   <div class="form-group">
    <label for="name" class="label-title">Name</label>
    <input type="text" id="info" class="form-input" placeholder="Enter Your Name" name="name" required>
  </div>

   <!--Mobile no -->
   <div class="form-group">
    <label for="name" class="label-title">Mobile</label>
    <input type="text" id="info" class="form-input" placeholder="Enter Mobile No" name="mob" required>
  </div>


  <!-- Firstname and Lastname -->
  <div class="horizontal-group">
    <div class="form-group " >
      <label class="label-title" >Resources name</label>
      <select class="form-input" id="level" name="res_name" >
      <option value="" selected>Select</option>
        <option value="Harvester">Harvester</option>
        <option value="Rotary">Rotary Tiller</option>
        <option value="Plough">Plough</option>
        <option value="Leveler">Leveler</option>
        <option value="Water">Water bowsers</option>
        <option value="Paddy">Paddy</option>
      </select>
    </div>
  </div>

  <!--upload picture-->
  <div class="horizontal-group">
    <div class="form-group " >
      <label for="choose-file" class="label-title">Upload Profile Picture</label><br>
      <input type="file" id="choose-file" size="80" name="file" required/>
      
    </div>
  </div>
  <!-- Information -->
  <div class="form-group">
    <label for="info" class="label-title">Information</label>
    <input type="info" id="info" class="form-input" placeholder="enter information" name="info" row="3" requir>
  </div>

   <!-- Information -->
   <div class="form-group">
    <label for="info" class="label-title">Date</label>
    <input type="date" id="date" class="form-input" placeholder="" name="date"  required="required">
  </div>

  <!-- Price -->
  <div class="horizontal-group">
    <div class="form-group left">
      <label for="Price" class="label-title">Price</label>
      <input type="text" id="Price" class="form-input" name="price" placeholder="enter your price" required="required">
    </div>
   
  </div>

 
<!-- form-footer -->
<div class="form-footer">

  <button type="submit" class="btn" name="submit">Add</button>
</div>

</form>
      </div>
    </div>
  </div>
</body>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
