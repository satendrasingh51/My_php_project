<!DOCTYPE html>
<html>
<head>
	<title>MY application</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/mypan.css">
  <script type="text/javascript" rel="jquery/main.js"></script>
</head>
<body>
	<div id="Home">
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
      <div class="container">
      <a class="navbar-brand" href="#"><img src="image/ss.png" style="width: 80px; height: 80px;">VCHAMP</a>
      <div class="btn-group">
      <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Manu
     </button>
        <div class="dropdown-menu dropdown-menu-right">
        <a href="welcome.php" class="dropdown-item">Home</a>
        <a href="my_profile.php" class="dropdown-item">My Profile</a>
        <a href="myapplication.php" class="dropdown-item">Pan Under Prosess</a>
        <a href="#" class="dropdown-item">Pan Prosesed</a>
        <a href="payment.php" class="dropdown-item">Make Payment</a>
        <a href="payment_history.php" class="dropdown-item">Payment History</a>
        <a href="#" class="dropdown-item" data-toggle="modal" data-target=".bd-modal-sm">Logout</a>
      </div>
    </div>
  </div>
</nav>
</div>
<br><br><br><br><br>
<?php include 'logout.php'; ?>




	<div class="box">
		<h3 class="text text-center text-light">My Applications</h3><br><br><br>
		<table border="2" cellspacing="20" cellpadding="20" class="table col-md-12 text-center">
			  <thead>
			    <tr>
			      <th scope="col">SN</th>
			      <th scope="col">Date of Apply	</th>
			      <th scope="col">Application ID</th>
			      <th scope="col">Applicant Name</th>
			      <th scope="col">Slip No</th>
			    </tr>
			  </thead>
			  <tbody>
			  
<?php include 'connection.php'; 

$abc =  mysqli_query($conn,'SELECT * FROM new_pan_form');
print_r( $abc);

while($row=mysqli_fetch_array($abc)){ ?>

<table>
<td><?php echo $row['area_office']; ?></td>
<td><?php echo $row['ao_code']; ?></td>
<td><?php echo $row['rang_ecode']; ?></td>

</table>

<?php
}



?>
			   
			  </tbody>
			</table>
			<div class="backbtn">
			<a href="welcome.php" class="btn-sm btn-primary">Back</a>
			</div>
	</div>
</body>
</html>