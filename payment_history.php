<!DOCTYPE html>
<html>
<head>
	<title>Payment History</title>
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
		<h3 class="text text-center text-dark">My Payment Hestory</h3><br><br><br>
		<table class="table col-md-12 text-center" border="1">
			  <thead>
			    <tr>
			      <th scope="col">SN</th>
			      <th scope="col">Date</th>
			      <th scope="col">Distributor ID</th>
			      <th scope="col">Bank Name</th>
			      <th scope="col">Transaction Reference</th>
			      <th scope="col">Amount</th>
			      <!-- <th scope="col">Status</th>
			      <th scope="col">Remarks</th> -->
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <th scope="row">1</th>
			      <td>02/02/2019</td>
			      <td>51</td>
			      <td>Sbi satendra singh saini dhanauri khurd</td>
			      <td>110254125463</td>
			      <td>+110</td>
			    </tr>
			    <tr>
			      <th scope="row">2</th>
			      <td>02/02/2019</td>
			      <td>51</td>
			      <td>Sbi</td>
			      <td>110254125463</td>
			      <td>+110</td>
			    </tr>
			  </tbody>
			</table>
			<div class="backbtn">
			<a href="welcome.php" class="btn-sm btn-primary">Back</a>
			</div>
	</div>
</body>
</html>