
<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js"></script>
  <!-- <script type="text/javascript" rel="jquery/main.js"></script> -->
</head>
<body>
	<div id="Home">
		<nav class="navbar navbar-expand-lg navbar-light bg-primary" style="position: fixed; width: 100%; height: 120px; z-index: 99;">
  		<a class="navbar-brand" href="#"><img src="image/ss.png" style="width: 100px; height: 100px;">VCHAMP</a>
 		 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   			 <span class="navbar-toggler-icon"></span>
  		</button>
  </div>
  </div>
  </div>
</nav>

<br><br><br><br><br><br><br><br>
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="plain-table">
					<form id="registration" method="POST" enctype="multipart/form-data" action="reg.php" role="from">
            <?php include('errors.php'); ?>
						<h1>Registration</h1><br><br>
							<div class="form-group">
								<label for="username"><i class="fa fa-user">&nbsp Username</i></label>
								<input type="text" name="username" id="username" class="form-control alert-success" placeholder="Enter Username" autocomplete="off" pattern="[A-Z]{3,10}" title="Minimum 3 letters(A-Z) only without any space." required="" value="<?php echo $username; ?>">
							</div>
							

						<div class="form-group">
   							 <label for="email"><i class="fa fa-envelope">&nbsp Email</i></label>
    						<input type="email" class="form-control alert-success" name="email" id="email" placeholder="Enter Email" autocomplete="off" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="xyz@something.com" required value="<?php echo $email; ?>">
  						</div>
						<div class="form-group">
   							 <label for="password_1"><i class="fa fa-lock">&nbsp Password</i></label>
    						<input type="password" class="form-control alert-success" name="password_1" id="password_1" placeholder="Enter Password" autocomplete="off" pattern="[A-Z]{1}[a-z]{3,10}[!@#$%^&*()_+]{1}\d{3,10}" title="(example) 'Example@123'" required="">
  						</div>
              <div class="form-group">
                 <label for="password_2"><i class="fa fa-lock">&nbspConform Password</i></label>
                <input type="password" class="form-control alert-success" name="password_2" id="password_2" placeholder="Enter Password" autocomplete="off" pattern="[A-Z]{1}[a-z]{3,10}[!@#$%^&*()_+]{1}\d{3,10}" title="(example) 'Example@123'" required="">
              </div>
  						<div class="form-group">
   							 <label for="dob"><i class="fa fa-address-book">&nbsp Date of birth</i></label>
    						<input type="date" class="form-control alert-success" name="dob" id="dob" placeholder="Enter Password" autocomplete="off" required="">
  						</div>
						<div class="form-group">
   							 <label for="mobile"><i class="fa fa-mobile">&nbsp Mobile</i></label>
    						<input type="text" class="form-control alert-success" name="mobile" id="mobile" placeholder="Enter Mobile Number" autocomplete="off" pattern="^\d{10}$" title="Ten numaric digits of mobile number only." required>
  						</div>
						<div class="form-group">
   							 <label for="adhar"><i class="fa fa-id-card">&nbsp Adhar Card</i></label>
    						<input type="text" class="form-control alert-success" name="adhar" id="adhar" placeholder="Enter Adhar Number" autocomplete="off" pattern="^\d{12}$" title="12 numeric characters of AADHAAR."   required>
  						</div>
						<div class="form-group">
   							 <label for="pan"><i class="fa fa-id-card">&nbsp Pan Card</i></label>
    						<input type="text" class="form-control alert-success" name="pan" id="pan" placeholder="Enter Pan Number" autocomplete="off" pattern="[A-Za-z]{5}\d{4}[A-Za-z]{1}" required>
  						</div>
						<div class="form-group">
   							 <label for="address"><i class="fa fa-map-marker">&nbsp Address</i></label>
    						<textarea type="textarea" class="form-control alert-success" name="address" id="address" placeholder="Enter Address" autocomplete="off" required></textarea>
  						</div>
  						<button type="submit" name="reg_user" id="reg_user" onclick="popup()" class="btn btn-primary"><i class="fa fa-registered">&nbspRegister</i></button>
					</form>
				</div>
			</div><br><br><br>
			<div class="col-md-6">
				<div class="plain-table">
					<form method="POST" action="reg.php">
            <?php include('errors.php'); ?>
						<h1>Login</h1><br><br>
						<div class="form-group">
							<label for="username"><i class="fa fa-user">&nbsp Username</i></label>
							<input type="text" name="username" id="username" class="form-control alert-success" autocomplete="off" placeholder="Enter Username">
						</div>
						<div class="form-group">
							<label for="password"><i class="fa fa-lock">&nbsp Password</i></label>
							<input type="password" name="password" id="password" class="form-control alert-success" autocomplete="off" placeholder="Enter password">
						</div>
						<button type="submit" name="login_user" id="login" class="btn-sm btn-primary"><i class="fa fa-sign-in">&nbspLogin</i></button> &nbsp &nbsp &nbsp&nbsp
						<a href="#" class="vab-link">Forget Password</a>
					</form>
				</div>
			</div>
		</div>
	</div>
	
</section><br><br><br><br>
<script type="text/javascript">
            $(document).ready(function(){
            $( "#form_one" ).validate({
                rules: {
                  username: {
                    required: true,
                    username: true,
                  },
                   email: {
                    required: true,
                    email:true,
                  },
                  
                  mobile: {
                    required: true,
                    mobile:true,
                  },
                }
                
              });
 
            
            });


            </script>
</body>
</html>

