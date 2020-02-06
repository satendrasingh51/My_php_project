<!DOCTYPE html>
<html>
<head>
  <title>Payment</title>
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
    <h3 class="text text-center text-dark">My Payment Detail</h3><br><br><br>
    <div class="container">
    <table class="table col-md-6 m-auto">
          <tr>
            <th scope="col" class="text text-center">Company's bank details are as follows</th>
          </tr>
    </table><br><br>
    <table class="table col-md-6 m-auto">
        <thead>
          <tr>
            <th scope="col">Bank Name</th>
            <th scope="col">Axis Bank </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">IFSC</th>
            <th scope="row">UTIBOOO1470</th>
          </tr>
          <tr>
            <th scope="row">A/C</th>
            <th scope="row">918020057961374</th>
          </tr>
          <tr>
        </tbody>
      </table><br><br>
      <p class="text text-center">Please enter payment detail if you have transferred it to our company account.</p><br><br><br>
      <div class="container">
       <div class="form-group row">
           <label for="bank" class="col-sm-2">Bank Name</label>
           <div class="col-sm-4">
           <input type="text" class="form-control alert-success" name="bank" id="bank" placeholder="Bank Name" autocomplete="off">
          </div>
        </div>
        <div class="form-group row">
           <label for="paymentr" class="col-sm-2">Payment Reference N.</label>
           <div class="col-sm-4">
           <input type="text" class="form-control alert-success" name="paymentr" id="paymentr" placeholder="payment Reference N." autocomplete="off">
          </div>
        </div>
        <div class="form-group row">
           <label for="amount" class="col-sm-2">Amount (Rs.)</label>
           <div class="col-sm-4">
           <input type="text" class="form-control alert-success" name="amount" id="amount" placeholder="Amount Rs" autocomplete="off">
          </div>
        </div>
        <div class="form-group row">
           <label for="form-control" class="col-sm-2"></label>&nbsp &nbsp &nbsp
           <input type="submit" name="submitbtn" class="btn-sm btn-primary" id="submitbtn">
          </div>
          <br><br><br><br><br><br>
        </div>
      </div>
      </div>
  </div>
</body>
</html>