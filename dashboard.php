
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
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
<?php include 'logout.php'; ?>

<script type="text/javascript">
function edt_id(id)
{
  window.location.href='viewpan.php?edit_id='+id;
}
function view_id(id)
{
  window.location.href='viewpan.php?view_id='+id;
}
// function delete_id(id)
// {
//  if(confirm('Sure to Delete ?'))
//  {
//   window.location.href='index.php?delete_id='+id;
//  }
// }
function changestatus_id(id,status)
{
  window.location.href='retailer.php?changestatus_id='+id+'&status='+status;
}
</script>


	<div class="box">
		<h3 class="text text-center text-light">Dashboard</h3><br><br><br>
		<table class="table col-md-12">
			<thead>
			    <tr>
			      <th scope="col" class="text text-center">Pan Details</th>
			    </tr>
			  </thead>
			 </table>
			<table border="2"  class="table col-md-12 text-center">
			<thead>
			  <tr>
			      <th>SN</th>
			      <th>Date Apply</th>
			      <th>RID</th>
			      <th>Retailer Name</th>
			      <th>Application ID</th>
			      <th>Status</th>
			      <th>TimeStamp	</th>
			      <th>Acknowledgement No</th>
			  </tr>
			</thead>
			<?php date_default_timezone_set("Asia/kolkata"); ?>
			<?php include 'connection.php';
 $sql_query="SELECT * FROM new_pan_form";
 $result_set=mysqli_query($conn,$sql_query);
 $i=1;
 while($row=mysqli_fetch_row($result_set))
 {
  ?>
        <tr>
        <td align="center" ><?php echo $i; ?></td>
        <td align="center" > <a href="javascript:view_id('<?php echo $row[0]; ?>')"> <!-- <?php echo $row[0]; ?> --> </a> </td>
        <td align="center" > <a href="javascript:view_id('<?php echo $row[0]; ?>')">  </a> </td>
        <td align="center" ><input type="file" id="inputGroup-sizing-sm" name="file"><button>Upload</button> <a href="javascript:view_id('<?php echo $row[0]; ?>')"> <?php echo $row[1]; ?> </a> </td>
        <td align="center" > <a href="javascript:view_id('<?php echo $row[0]; ?>')"> <?php echo $row[0]; ?> </a> </td>
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


<!-- <div class="container">
	<div class="col-md-2">
		<select>
			<option></option>
		</select>
	</div>
</div> --> 
	</table>
			<div class="backbtn">
			<a href="welcome.php" class="btn-sm btn-primary">Back</a>
			</div>
	</div>
</body>
</html>