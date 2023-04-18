<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>main page</title>
  <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
        <meta content="width=device-width; initial-scale=1.0; maximum-scale=1.0;   user-scalable=0;" name="viewport">
        
        

     
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
.panel-body img {
  
  width: 330px;
  height: 200px;
  border-radius: 10px;
}

</style>
</head>
<body>
<!-- partial:index.partial.html -->
  <div id="main">
<nav class="navbar navbar-default navbar-inverse" role="navigation" style="margin-top: 20px;" >
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
        
            <li><a href="#about">About Us</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact_us">Contact us</a></li>
            <li><a href="#">Profile</a></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
<!---slider--->
<div id="slider" style="margin-top: 40px;">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="img/agri1.png" class="slid" alt="Chania" style="height: 300px;width: 100%;">
      <div class="carousel-caption">
        <h3 style="color: black;">Agriculture Solution</h3>
        <p style="color: black;">Our goal is to help make farming more efficient,productive and cost-effective by providing easy access to the latest and most advanced agriculture machinery</p>
      </div>
    </div>

    <div class="item">
      <img class="slid" src="img/agri2.jpg" alt="Chicago" style="height: 300px;width: 100%;">
      <div class="carousel-caption">
        <h3 >Agriculture Solution</h3>
        <p >Our goal is to help make farming more efficient,productive and cost-effective by providing easy access to the latest and most advanced agriculture machinery</p>
      </div>
    </div>

    <div class="item">
      <img src="img/agri3.jpg" class="slid" alt="New York" style="height: 300px;width: 100%;">
      <div class="carousel-caption">
        <h3>Agriculture Solution</h3>
        <p >Our goal is to help make farming more efficient,productive and cost-effective by providing easy access to the latest and most advanced agriculture machinery</p>
     </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<!--About us-->
<div id="about" style="cursor: pointer;">
  <div class="container-fluid">
    
    <div class="row" style="margin-top: 50px; color: white; justify-content: center;">
      
        <center><h1 style="margin-top: 30px; color: #77fb77; font-family:verdana;" >ABOUT US</h1></center>
      
     
       <center> <p style="margin-top: 20px; max-width: 900px;">Welcome to our agricultural vehicle rental service! We are a company dedicated to providing high-quality and reliable agricultural vehicles to farmers and other customers in need of farm equipment. Our goal is to help make farming more efficient, productive, and cost-effective by providing easy access to the latest and most advanced agricultural machinery. Whether you need a tractor, harvester, or other specialized equipment, we have the expertise and resources to meet your needs. Our team is committed to providing exceptional customer service and support, ensuring that you have everything you need to succeed in your farming operations. Thank you for choosing our agricultural vehicle rental service, and we look forward to working with you!</p>
       </center>
    </div>
  </div>
</div>

<!--services-->
<div id="services">
  <div class="container-fluid">
    <div class="row" style="margin-top: 70px; color: white; justify-content: center;">
 <center><h1 style="color: #77fb77; font-family:verdana; " >SERVICES PROVIDED</h1></center> 
  <div class="row" style="margin-top: 20px;">
    <div class="col-sm-4" >
      <div class="panel panel-default" style="border-radius: 40px;">
        <div class="panel-heading"><center><h4><b>Harvester</b></h4></center></div>
        <div class="panel-body"><center><img src="img/s2.jpg" id="image"/></center></div>
        <div class="panel-footer" style="color: black;">
          <p>It is a machine designed to harvest a variety of grain crops</p><br>
          <h5 style="color: black;"><b>Rs.500 per hour</b></h5>
          <a href="harvester.php" style="text-align: right;">Click for availables machine</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-default">
        <div class="panel-heading"><center><h4><b>Rotary Tiller</b></h4></center></div>
        <div class="panel-body"><center><img src="img/s3.jpg"/></center></div>
        <div class="panel-footer" style="color: black;">
          <p>Rotary Tillers are machines used for both primary and secondary Tillage for cultivating the soil.</p><br>
          <h5 style="color: black;"><b>Rs.500 per hour</b></h5>
          <a href="#" style="text-align: right;">Click for availables machine</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-default">
        <div class="panel-heading"><center><h4><b>Plough</b></h4></center></div>
        <div class="panel-body"><center><img src="img/s4.jpg"/></center></div>
        <div class="panel-footer" style="color: black;">
          <p>A plough is a farm tool for loosening or turning the soil before sowing seed or planting.</p><br>
          <h5 style="color: black;"><b>Rs.500 per hour</b></h5>
          <a href="#" style="text-align: right;">Click for availables machine</a>
        </div>
      </div>
    </div>
  </div>




  <div class="row" style="margin-top: 20px;">
    <div class="col-sm-4" >
      <div class="panel panel-default" style="border-radius: 40px;">
        <div class="panel-heading"><center><h4><b>Leveler</b></h4></center></div>
        <div class="panel-body"><center><img src="img/s1.webp"/></center></div>
        <div class="panel-footer" style="color: black;">
          <p>A leveler removes various flatness defects from material.</p><br>
          <h5 style="color: black;"><b>Rs.500 per hour</b></h5>
          <a href="#" style="text-align: right;">Click for availables machine</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-default">
        <div class="panel-heading"><center><h4><b>Water bowsers</b></h4></center></div>
        <div class="panel-body"><center><img src="img/s5.jpg"/></center></div>
        <div class="panel-footer" style="color: black;">
          <p>Agricultural water bowsers are used to transport water for crop irrigation in agricultural lands.</p><br>
          <h5 style="color: black;"><b>Rs.500 per hour</b></h5>
          <a href="#" style="text-align: right;">Click for availables machine</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-default">
        <div class="panel-heading"><center><h4><b>Plough</b></h4></center></div>
        <div class="panel-body"><center><img src="img/s6.jpg"/><center></div>
        <div class="panel-footer" style="color: black;">
       <p>Paddy, small, level, flooded field used to cultivate rice in southern and eastern Asia</p><br>
          <h5 style="color: black;"><b>Rs.500 per hour</b></h5>
          <a href="#" style="text-align: right;">Click for availables machine</a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>

<!--Contact us-->
<!--Section: Contact v.2-->
<div id="contact_us" style="padding-top:50px" >
<section class="mb-4" style="margin-top: 50px;">
   
  <!--Section heading-->
  <h2 class="h1-responsive font-weight-bold text-center my-4"   style="color: #77fb77; margin-top: 50px;">CONTACT US</h2>
  <!--Section description-->
  <p class="text-center w-responsive mx-auto mb-5" style="color: white;">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
      a matter of hours to help you.</p>

  <div class="row" style="color: wheat; margin-top: 30px;">

      <!--Grid column-->
      <div class="col-md-9 mb-md-0 mb-5">
          <form id="contact-form" name="contact-form" action="contact.php" method="POST">

              <!--Grid row-->
              <div class="row">

                  <!--Grid column-->
                  <div class="col-md-6">
                      <div class="md-form mb-0">
                          <input type="text" id="name" name="name" class="form-control" placeholder="Your name" style="margin-bottom: 20px; height: 25px;" name="name" required>
                       
                      </div>
                  </div>
                  <!--Grid column-->

                  <!--Grid column-->
                  <div class="col-md-6">
                      <div class="md-form mb-0">
                          <input type="text" id="email" name="email" class="form-control" placeholder=" Your Email Id" style="margin-bottom: 20px;height: 25px;" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                          
                      </div>
                  </div>
                  <!--Grid column-->

              </div>
              <!--Grid row-->

              <!--Grid row-->
              <div class="row">
                  <div class="col-md-12">
                      <div class="md-form mb-0">
                          <input type="text" id="subject" name="subject" class="form-control" placeholder="subject" style="margin-bottom: 20px;height: 25px;" name="subject" required>
                          
                      </div>
                  </div>
              </div>
              <!--Grid row-->

              <!--Grid row-->
              <div class="row">

                  <!--Grid column-->
                  <div class="col-md-12">

                      <div class="md-form">
                          <textarea type="text" id="message" name="msg" rows="2" class="form-control md-textarea" placeholder="Your Message" style="margin-bottom: 20px; height: 40px;"name="msg" required></textarea>
                         
                      </div>

                  </div>
              </div>
              <!--Grid row-->

          

          <div class="text-center text-md-left">
              
              <button type="submit" class="btn btn-primary btn-md" name="send">Send</button>
          </div>
          <div class="status"></div>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-md-3 text-center">
          <ul class="list-unstyled mb-0">
              <img src="img/contact.jpg" height="130px"/>
          </ul>

      </div>
      <!--Grid column-->
    </form>
  </div>

</section>
</div>
<!--Section: Contact v.2-->
<!---footer-->
<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted" style="color: white; margin-top: 50px; background-color:#353935;">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fa fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fa fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fa fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fa fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fa fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fa fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <img src="img/logo.svg" height="50px" width="50px">
          </h6>
          <p>
            Kisan Agro Tech PVT Limited
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Rent vechical</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Machinery</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Fertilizer</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Farms</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fa fa-home me-3"></i> New York, NY 10012, US</p>
          <p>
            <i class="fa fa-envelope me-3"></i>
            info@example.com
          </p>
          <p><i class="fa fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fa fa-print me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color:#023020;">
    <br>© 2023 Copyright:<br><br>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

</body>
<!-- partial -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>
</body>
</html>
