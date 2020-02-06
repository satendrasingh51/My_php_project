
<?php
include_once 'connection.php';

if(isset($_POST['view_id']))
{
 $sql_query="SELECT * FROM new_pan_form WHERE id=".$_POST['view_id'];
 $result_set=mysqli_query($conn,$sql_query);
 $fetched_row=mysqli_fetch_array($result_set,MYSQLI_ASSOC);
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>View New Pan Details</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <!-- datepicker link ui datepicker -->
  <link rel="stylesheet" type="text/css" href="jquery/jquery-ui.min.css">
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
        <a href="#" class="dropdown-item">Home</a>
        <a href="dashboard.php" class="dropdown-item">Dashboard</a>
        <a href="#" class="dropdown-item">New Payment</a>
        <a href="#" class="dropdown-item">All Payment History</a>
        <a href="#" class="dropdown-item">Pan History</a>
        <a href="#" class="dropdown-item">Change Password</a>
        <a href="#" class="dropdown-item">Mail Server Setting</a>
        <a href="#" class="dropdown-item" data-toggle="modal" data-target=".bd-modal-sm">Logout</a>
      </div>
    </div>
  </div>
</nav>
</div>
<br><br><br><br><br>
<div class="box">
    <h3 class="text text-center text-light">History of PAN Cards Processed</h3><br>
    <table class="table col-md-12">
      <thead>
          <tr>
            <th scope="col" class="text text-center">New Pan</th>
          </tr>
        </thead>
       </table>
    <table class="table col-md-12">
      <div class="container">
      <div class="row">
      <div class="list-group col-md-6 text-right">
        <ul class="list-group">
            <li class="list-group-item">ID</li>
            <li class="list-group-item">USERNAME</li>
            <li class="list-group-item">EMAIL</li>
            <li class="list-group-item">DATE OF BIRTH</li>
            <li class="list-group-item">MOBILE</li>
            <li class="list-group-item">ADHAR</li>
            <li class="list-group-item">PAN </li>
            <li class="list-group-item">ADDRASS </li>
        </ul>
      </div>
       <div class="list-group col-md-6 text-left">
        <ul class="list-group">
            <input type="text" name="id" value="<?php echo $fetched_row['application'] ?>">
            <input type="text" name="id" value="<?php echo $fetched_row['area_office'] ?>">
            <input type="text" name="id" value="<?php echo $fetched_row['email'] ?>">
            <input type="text" name="id" value="<?php echo $fetched_row['dob'] ?>">
            <input type="text" name="id" value="<?php echo $fetched_row['mobile'] ?>">
            <input type="text" name="id" value="<?php echo $fetched_row['pan'] ?>">
            <input type="text" name="id" value="<?php echo $fetched_row['adhar'] ?>">
            <input type="text" name="id" value="<?php echo $fetched_row['address'] ?>">
        </ul>
      </div>
    </div>
    </div>
    <style type="text/css">
      input{
        width: 500px;
        height: 50px;
        padding: 10px;
      }
    </style>
</body><br><br><br>
      <!-- <div class="backbtn">
        <a href="welcome.php" class="btn-sm btn-primary">Back</a>
      </div> -->
</html>