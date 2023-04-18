<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>main page</title>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
<link rel='stylesheet' href='//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  body{
      padding:50px;
      background-color: black;
}
.navbar{
  overflow: hidden;
  background-color: #333;
  position: fixed; /* Set the navbar to fixed position */
  top: 0; /* Position the navbar at the top of the page */
  width: 92%; /* Full width */
  z-index: 1;

}
</style>

</head>

<body>
    <!-- partial:index.partial.html -->
  <div id="main">
<nav class="navbar navbar-default navbar-inverse" role="navigation"  >
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

</body>
</html>