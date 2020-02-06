<?php
include_once 'connection.php';
include 'logout.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>My Retailers</title>
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
        <a href="#" class="dropdown-item">Dashboard</a>
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
    <h3 class="text text-center text-light">Retailer Details</h3><br>
    <table class="table col-md-12">
      <thead>
          <tr>
            <th scope="col" class="text text-center">Retailer Details</th>
          </tr>
        </thead>
       </table>
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
</head>
<body>
<div id="body">
 <div id="content">
    <table class="table" align="center">
    <tr class="text text-center">
    <th>SL NO</th>
    <th>Retailer id</th>
    <th>Username</th>
    <th>Balance (INR)</th>
    <th>Status</th>
    <th colspan="3">Actions</th>
    </tr>
    <?php
 $sql_query="SELECT * FROM registration";
 $result_set=mysqli_query($conn,$sql_query);
 $i=1;
 while($row=mysqli_fetch_row($result_set))
 {
  ?>
        <tr>
        <td align="center" ><?php echo $i; ?></td>
        <td align="center" > <a href="javascript:view_id('<?php echo $row[0]; ?>')"> <?php echo $row[0]; ?> </a> </td>
        <td align="center" > <a href="javascript:view_id('<?php echo $row[0]; ?>')"> <?php echo $row[1]; ?> </a> </td>
        <td></td>
        <?php if($row[count($row)-1]==1) { ?>
        <td align="center"><a href="javascript:changestatus_id('<?php echo $row[0]; ?>',0)">Deactivate</a></td>
        <?php } else { ?>
        <td align="center"><a href="javascript:changestatus_id('<?php echo $row[0]; ?>',1)">Activate</a></td>
        <?php } ?>
  <td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')">Manage</a></td> 
       <!--  <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')">Delete</a></td>-->
        </tr>
        <?php
       $i++;  
 }
 ?>
    </table>
    </div>
</div>

</div>
</body>
</html>