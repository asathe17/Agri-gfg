<?php

include 'php/login.php';
include 'menu.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Account Settings</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/profile.css">
</head>
<body>
	<section class="py-5 my-5">
		<div class="container">
			<h1 class="mb-5">Account Settings</h1>
			<div class="bg-white shadow rounded-lg d-block d-sm-flex">
				<div class="profile-tab-nav border-right">
					<div class="p-4">
						<div class="img-circle text-center mb-3">
							<img src="img/pro.jpg" alt="Image" class="shadow">
						</div>
						<h4 class="text-center"><?php echo $_SESSION["name"];?></h4>
					</div>
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" id="account-tab" data-toggle="pill" href="#account" role="tab" aria-controls="account" aria-selected="true">
							<i class="fa fa-home text-center mr-1"></i> 
							Account
						</a>
						<a class="nav-link" id="password-tab" data-toggle="pill" href="#password" role="tab" aria-controls="password" aria-selected="false">
							<i class="fa fa-key text-center mr-1"></i> 
							Password
						</a>
				
						
						<a class="nav-link" id="notification-tab" href="php/profilep.php"  >
							<i class="fa fa-sign-out text-center mr-1"></i> 
							Sign Out
						</a>
					</div>
				</div>
				<div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
					<div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
						<h3 class="mb-4">Account Settings</h3>
						<div class="row">
							<form method="POST" action="php/profilep.php" enctype="multipart/form-data">
							
							
								<div class="form-group">
								  	<label > Name</label>
								  	<input type="text" name="nameu" class="form-control" value="<?php echo $_SESSION["name"];?>">
								</div>
							
							
							<div class="form-group">
								  	<label>Email</label>
								  		<input type="text" name="emailu" class="form-control" value="<?php echo $_SESSION["email"];?>">
								  		
							</div>
							
								<div class="form-group">
								  	<label>Phone number</label>
								  <input type="text"name="mobu" class="form-control" value="<?php echo $_SESSION["mob"];?>">
								  </div>
							<div class="form-group">
							<label>Update image</label>
							<input type="file" enctype="multipart/form-data" class="form-control" value="<?php echo $_SESSION["mob"];?>">
							</div>
						
							
						</div>
						<div>
							<button class="btn btn-primary" name="update">Update</button>
							
						</form>
						</div>
					</div>
					<div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
						<h3 class="mb-4">Password Settings</h3>
						<div class="row">
						<form method="POST" action="php/profilep.php" >
						
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Email id</label>
								  	<input type="text" style="width:250px;" name="username" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required/>
								</div>
							</div>
						</div>
						<div class="row">
						
							<div class="col-md-6">
								<div class="form-group">
								  	<label>New password</label><br>
								  	<input type="text" name="newpassword" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Confirm new password</label>
								  	<input type="text" name="confirmnewpassword" class="form-control" required>
								</div>
							</div>
						</div>
						<div>
							<button class="btn btn-primary" name="updatepass" >Update</button>
						</div>							</div>
						</form>
					</div>
				
					
						
			
			</div>
		</div>
	</section>


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>