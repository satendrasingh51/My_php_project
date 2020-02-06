<?php 
$servername = "localhost";
$username = "";
$password = "";
$dbname = "pan_form";

// Create connection
$conn = mysqli_connect("localhost", "root", "", "pan_form");


if (!$conn) {
    die("Connection failed:");
}
else{echo "Connected successfully";
}
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>jquery</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<!-- latest validation jq cdn -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<!-- //<script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.12.0/validate.min.js"></script> -->
<!-- <script type="text/javascript"> 
	
	$(document).ready(function(){
		$( "#form-one" ).validate({
  rules: {
    name: {
      required: true,
    },
     password: {
      required: true,
      password:true,
    },
    email: {
      required: true,
      email:true,
    },
    number: {
      required: true,
      number:true,
    }
  }
  
});

 });
</script> -->

</head>
<body>
 <div class="container">
 	<h1 class="text text-center text-info">Form validation </h1>
 	<div class="col-lg-10 m-auto d-block">
 		<form id="form-one" method="POST" enctype="multipart/form-data">
 			<!-- <div class="form-group">
 				<label for="username">Username</label>
 				<input type="text" name="name" class="form-control" autocomplete="off" pattern="[A-Z]{5,}">
 			</div>
 			<div class="form-group">
 				<label for="password">Password</label>
 				<input type="password" name="password" class="form-control">
 			</div>
 			<div class="form-group">
 				<label for="email">Email</label>
 				<input type="email" name="email" class="form-control">
 			</div>
 			<div class="form-group">
 				<label for="number">Mobile N.</label>
 				<input type="number" name="number" class="form-control">
 			</div> -->
 			<div class="form-group">
 				<label for="photofile">Photo</label>
 				<input type="file" name="photofile" class="form-control-file" id="photofile" onchange="readURL1(this);return sigUpload()" accept=".jpg,.JPG,.jpeg,.JPEG" required="">
 			</div>
 			<hr>

 			<input type="submit" name="submit" value="submit" class="btn btn-info" id="submitbtn">
 		</form>
 	</div>
 </div><br><br>
 </body>
</html>

<?php
	
	if (isset($_POST['submit'])) {

	$imgname = $_FILES['photofile']['name'];
	$tempname = $_FILES['photofile']['tmp_name'];

	move_uploaded_file($imgname, "images/$imgname");

	$sql = "INSERT INTO 'test'('file') VALUES ('$imgname')";
	$run = mysqli_query($conn,$sql);

	echo "Upload Success";

	}else{
	echo "photo failed";
}


?>