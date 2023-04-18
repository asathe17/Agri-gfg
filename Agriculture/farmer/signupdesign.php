

<!DOCTYPE html>
<html lang="en" >
<head>

  <meta charset="UTF-8">
  <title>Sign in</title>
  <link rel="stylesheet" href="css/stylelog.css">
<!---bootstrap--->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
<!-- partial:index.partial.html -->
<br>
<br>
    <div class="cont">
      <form method="POST" action="harvester.php">
        <div class="form sign-in">
            <h2>Welcome Back!</h2>
           <center> <label>
                <span>Email</span>
                <input type="email" name="email" required />
            </label></center>
            <center><label>
                <span>Password</span>
                <input type="password" name="password" required />
            </label></center>
            <p class="forgot-pass" data-toggle="modal" data-target="#exampleModalCenter">Forgot password?</p>
            <center><button type="submit" class="submit" name="login" style="border-radius:10px;">Sign In</button></center>
         
        </div>
       </form>
        <div class="sub-cont">
            <div class="img">
                <div class="img__text m--up">
                 
                    <h3>Don't have an account? Please Sign up!<h3>
                </div>
                <div class="img__text m--in">
                
                    <h3>If you already has an account, just sign in.<h3>
                </div>
                <div class="img__btn">
                    <span class="m--up">Sign Up</span>
                    <span class="m--in">Sign In</span>
                </div>
            </div>
            <form action="signup.php" method="POST">
            <div class="form sign-up">
            
                <h2>Create your Account</h2>
                <label>
                   <span>Name</span>
                    <input type="text" name="name" required />
                </label>
                <label>
                    <span>Email</span>
                    <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"required/>
                </label>
                <label>
                    <span>Mobile no</span>
                    <input type="number" name="mob" pattern="{10}" required/>
                </label>
                <label>
                <span>Address</span>
                <input type="text" name="address" required />
                </label>
                <label>
                <span>Password</span>
                <input type="password" name="password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required/>
                </label>
                <center><button type="submit"  class="submit" name="signup" style="border-radius:10px;">Sign Up</button></center>
                
            </div>
            </form>
        </div>
    </div>

    <script>
        document.querySelector('.img__btn').addEventListener('click', function() {
            document.querySelector('.cont').classList.toggle('s--signup');
        });
    </script>
<!-- partial -->
  
  

  
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLongTitle" >Forgot Password</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close"style="position: absolute; margin-left:300px">
<span aria-hidden="true" >&times;</span>
</button>
</div>
<div class="modal-body">
<div class="wrapper" style="width: 35%; margin: 0 auto;">
<form class="form-signin" action="signup.php" method="post">       
<center><h4 class="form-signin-heading" style=" position:absolute;" >Forgot Your Password?</h4><br/><br></center>
<input type="text" class="form-control" name="username" placeholder="Email Your Username" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"required style="width:200px;"autofocus="" />
<br/>
<input type="password" class="form-control" name="newpassword" placeholder="New Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required style="width:200px;"/><br/>
<input type="password" class="form-control" name="confirmnewpassword" placeholder="Confirm New Password" style="width:200px;"required/>
<br/>
<button  class="submit" name="forgot" type="submit" style="width:200px; border-radius:10px; margin-top:20px ">Submit</button>   
</form>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" style="width:200px; border-radius:10px;"data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
 
  
  
  
</body>
</html>