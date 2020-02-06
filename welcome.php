<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/welcome.css">
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
<br><br><br><br><br><br><br><br><br><br><br>
<?php include 'logout.php'; ?>




<section>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="box">
  					<ul>
  						<li><a href="newpan.php" class="nav-link">New Pan Card</a></li>
  					</ul>
				</div>
			</div>
			<div class="col-md-3">
				<div class="box">
  					<ul>
  						<li><a href="#" class="nav-link">Money Transfor</a></li>
  					</ul>
				</div>
			</div>
			<div class="col-md-3">
				<div class="box">
  					<ul>
  						<li><a href="#" class="nav-link">Prepaid Recharg</a></li>
  					</ul>
				</div>
			</div>
			<div class="col-md-3">
				<div class="box">
  					<ul>
  						<li><a href="#" class="nav-link">Postpaid Recharg</a></li>
  					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
</body>
</html>


