<?php include 'connection.php';
include 'logout.php';
  ?>
<script type="text/javascript">
function edt_id(id)
{
  window.location.href='viewuser.php?edit_id='+id;
}
function view_id(id)
{
  window.location.href='viewuser.php?view_id='+id;
}
function delete_id(id)
{
 if(confirm('Sure to Delete ?'))
 {
  window.location.href='index.php?delete_id='+id;
 }
}
function changestatus_id(id,status)
{
  window.location.href='retailer.php?changestatus_id='+id+'&status='+status;
}
</script>
<!DOCTYPE html>
<html>
<head>
  <title>My profile</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <!-- <link rel="stylesheet" type="text/css" href="css/index.css"> -->
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


       

<br>

<section>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="plain-table">
          <form id="registration" method="post" enctype="multipart/form-data" action="" role="from">
            <div class="box">
    <table class="table col-md-12 text-center">
      <thead>
          <tr>
            <th>My Profile</th><br><br>
          </tr>
        </thead>
       </table>

       <?php

       
 $sql_query="SELECT * FROM registration";

 $result_set=mysqli_query($conn,$sql_query);
 $i=1;
 while($row=mysqli_fetch_row($result_set))
 {
  ?>
       
        
       <!--  <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')">Delete</a></td>-->
        </tr>

       <?php if($row[count($row)-1]==1) { ?>
        <td align="center"><a href="javascript:changestatus_id('<?php echo $row[0]; ?>',0)">Deactivate</a></td>
        <?php } else { ?>Status
        <td align="center"><a href="javascript:changestatus_id('<?php echo $row[0]; ?>',1)">Activate</a></td>
        <?php } ?><br>
  <td align="center">Profile Update <a href="javascript:edt_id('<?php echo $row[0]; ?>')">Manage</a></td> 
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
            <input type="text" name="id" value="<?php echo $row[0]; ?>">
            <input type="text" name="id" value="<?php echo $row[1]; ?>">
            <input type="text" name="id" value="<?php echo $row[2] ?>">
            <input type="text" name="id" value="<?php echo $row[4] ?>">
            <input type="text" name="id" value="<?php echo $row[5] ?>">
            <input type="text" name="id" value="<?php echo $row[6] ?>">
            <input type="text" name="id" value="<?php echo $row[7] ?>">
            <input type="text" name="id" value="<?php echo $row[8] ?>">
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
 
          </form>
        </div>
      </div>
     
    </div>
  </div>
  
</section><br><br><br><br>
 <?php
       $i++;  
 }
 ?>
</body>
</html>