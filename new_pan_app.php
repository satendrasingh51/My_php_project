
<!DOCTYPE html>	
<html>
<head>
  <title>New Pan Application</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js"></script>
  <link rel="stylesheet" type="text/css" href="css/newpan.css">
  <script type="text/javascript" src="jquery/main.js" rel="jquery/main.js"></script>

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
        <a href="#" class="dropdown-item">Pan Process</a>
        <a href="#" class="dropdown-item">All Payment History</a>
        <a href="#" class="dropdown-item" data-toggle="modal" data-target=".bd-modal-sm">Logout</a>
      </div>
    </div>
  </div>
</nav>
</div>
<br><br><br><br><br><br><br>
<?php include 'logout.php'; ?>

<?php include 'connection.php'; 

echo $_REQUEST['areaoffice'];
?>





<section>
		<form action="newpan.php" method="POST" id="form_one" enctype="multipart/form-data"><br><br><br>
			<div class="container">
			<div class="form-group row">
   				 <label for="areaoffice" class="col-sm-2 col-form-label">Area Officer(AO)</label>
   				 <div class="col-sm-8">
     			 <input type="text" value=""  class="form-control alert-success" autocomplete= name="areaoffice" id="areaoffice" placeholder="Area Officer(AO)" required>
   		 		</div>
   		 	</div>
   		 	<div class="form-group row">
   				 <label for="aocode" class="col-sm-2 col-form-label">AO Code</label>
   				 <div class="col-sm-2">
     			 <input type="text" value=""  class="form-control alert-success" autocomplete= name="aocode" id="aocode" placeholder="AO Code" required>
   		 		</div>
   		 		<label for="ao" class="col-sm-1 col-form-label">AO TYPE</label>
   				 <div class="col-sm-1">
     			 <input type="text" value=""  class="form-control alert-success" autocomplete= name="ao" id="ao" placeholder="AO Type" required>
   		 		</div>
   		 		<label for="range" class="col-sm-1 col-form-label">AO R.</label>
   				 <div class="col-sm-2">
     			 <input type="text" value=""  class="form-control alert-success" autocomplete= name="range" id="range" placeholder="Range Code" required>
   		 		</div>
   		 		<label for="aonumber" class="col-sm-1 col-form-label">AO N. </label>
   				 <div class="col-sm-2">
     			 <input type="text" value=""  class="form-control alert-success" autocomplete= name="aonumber" id="aonumber" placeholder="AO Number" required>
   		 		</div>
   		 	</div>
   		 	<div>
   		 		<div class="form-group row">
   		 			<label for="application" class="col-sm-2">Application type</label> 
   		 			<div class="col-sm-4">
					<input type="text" name="application" id="application" class="form-control alert-success">
					</div>
						<label class="col-md-2 old_pan">Old Pan N.</label>
            <span id="html">
						<input type="text" class="form-control alert-success col-md-8 old_pan" name="old_pan" placeholder="Old pan Number" pattern="[A-Za-z]{5}\d{4}[A-Za-z]{1}" autocomplete"off">
          </span>
				</div>
   		 	</div>
   		 		<div class="form-group row">
   		 			<label for="category" class="col-sm-2">Category of Applicant</label> 
   		 			<div class="col-sm-6">
					<input type="text" name="category" id="category" class="form-control alert-success">
					</div>
				</div>
				<div class="form-group row">
   		 			<label for="applicant" class="col-sm-2" required>Applicant's title</label> 
   		 			<div class="col-sm-6">
					<input type="text" name="applicant" id="applicant" class="form-control alert-success">
					</div>
				</div>
			<div class="form-group row">
   				 <label for="inputfirstname" class="col-sm-2 col-form-label">Applicant Name</label>
   				 <div class="col-sm-3">
     			 <input type="text" name="firstname" class="form-control alert-success" id="inputfirstname" placeholder="First Name" pattern="[A-Z]{3}" title="Minimum 3 letters(A-Z) only without any space."  autocomplete="off">
   		 		</div>
   		 		<label for="inputmiddletname" class="col-form-label"></label>
   				 <div class="col-sm-3">
     			 <input type="text" name="middlename" class="form-control alert-success" id="inputmiddlename" placeholder="Middle Name" pattern="[A-Z]{3}" title="Minimum 3 letters(A-Z) only without any space." autocomplete="off">
   		 		</div>
   		 		<label for="inputlastname" class="col-form-label"></label>
   				 <div class="col-sm-3">
     			 <input type="text" name="lastname" class="form-control alert-success" id="inputlastname" placeholder="Last Name" autocomplete="off" pattern="[A-Z]{3}" title="Minimum 3 letters(A-Z) only without any space." required>
   		 		</div>
   		 	</div>
   		 	<div class="form-group row">
   				 <label for="inputfirstname" class="col-sm-2 col-form-label">Father's Name</label>
   				 <div class="col-sm-3">
     			 <input type="text" name="ffirstname" class="form-control alert-success" id="inputfirstname" placeholder="First Name" pattern="[A-Z]{3}" title="Minimum 3 letters(A-Z) only without any space." autocomplete="off">
   		 		</div>
   		 		<label for="inputmiddletname" class="col-form-label"></label>
   				 <div class="col-sm-3">
     			 <input type="text" name="fmiddlename" class="form-control alert-success" id="inputmiddlename" placeholder="Middle Name" pattern="[A-Z]{3}" title="Minimum 3 letters(A-Z) only without any space." autocomplete="off">
   		 		</div>
   		 		<label for="flastname" class="col-form-label"></label>
   				 <div class="col-sm-3">
           <input type="text" name="flastname" class="form-control alert-success" id="flastname" placeholder="Last Name" autocomplete="off" pattern="[A-Z]{3}" title="Minimum 3 letters(A-Z) only without any space." required>
   		 		</div>
   		 	</div>
   		 	<div class="form-group row">
   				 <label for="form-control" class="col-sm-2 col-form-label">Date of birth</label>
   				 <div class="col-sm-4">
     			 <input type="date" class="form-control alert-success" name="dob" id="form-control" placeholder="" autocomplete="off" required>
   		 		</div>
   		 	</div>
   		 	<div class="form-group row">
   				 <label for="contect_number" class="col-sm-2 col-form-label">Contact Number</label>
   				 <div class="col-sm-4">
     			 <input type="text" name="contect_number" class="form-control alert-success" id="contect_number" autocomplete="off" placeholder="Enter Mobile Number" pattern="^\d{10}$" title="Ten numaric digits of mobile number only." required>
   		 		</div>
   		 	</div>
   		 	<div class="form-group row">
   				 <label for="email" class="col-sm-2 col-form-label">Email</label>
   				 <div class="col-sm-4">
     			 <input type="email" name="email" class="form-control alert-success" id="email" autocomplete="off" placeholder="Enter Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="xyz@something.com" required>
   		 		</div>
   		 	</div>
   		 	<div class="form-group row">
   				 <label for="proof_id" class="col-sm-2 col-form-label">Proof of ID</label>
     			 <div class="col-sm-6">
				  <input type="text" name="proof_id" id="proof_id" class="form-control alert-success">
				  </div>
   		 	</div>
   		 	<div class="form-group row">
   				 <label for="proof_add" class="col-sm-2 col-form-label">Proof of Address</label>
     			<div class="col-sm-6">
				<input type="" class="form-control alert-success" name="proof_add" value="">
				 </div>
   		 	</div>
   		 	<div class="form-group row">
   				 <label for="proof_dob" class="col-sm-2 col-form-label">Proof of DOB</label>
					<div class="col-sm-6">
     			 <input type="text" name="proof_dob" value="" class="form-control alert-success" id="proof_dob" placeholder="Do not enter wrong Father/Husband/Guardian Name" pattern="[A-Z]{3}" title="Only Captele letters" autocomplete="off" required>
   		 		</div>
   		 	</div>
   		 	<div class="form-group row">
   				 <label for="gender" class="col-sm-2 col-form-label">Gender</label>
				<div class="col-sm-6">
				<input type="text" class="form-control alert-success" id="gender">
				</div>
   		 	</div>
   		 	<div class="form-group row">
   				 <label for="adhar_number" class="col-sm-2 col-form-label">Adhar NUmber</label>
   				 <div class="col-sm-3">
     			 <input type="text" name="adhar_number" value="" class="form-control alert-success" id="adhar_number" placeholder="Enter Adhar Number" pattern="^\d{12}$" title="12 numeric characters of AADHAAR." autocomplete="off" required>
   		 		</div>
   		 	</div>
   		 	<div class="form-group row">
   				 <label for="address_f" class="col-sm-2 col-form-label">Father/Husband/Guardian Name :</label>
   				 <div class="col-sm-6">
     			 <input type="readonly" name="address_f"  class="form-control alert-success" id="address_f" placeholder="Do not enter wrong Father/Husband/Guardian Name" pattern="[A-Z]{3}" title="Only Captele letters" autocomplete="off" required>
   		 		</div>
   		 	</div>
   		 	<div class="form-group row">
   				 <label for="address_v" class="col-sm-2 col-form-label">Premises/Building/Village:</label>
   				 <div class="col-sm-6">
     			 <input type="readonly" name="address_v" class="form-control alert-success" id="address_v" placeholder="Do not enter wrong Premises/Building/Village" pattern="[A-Z]{3}" title="Only Captele letters" autocomplete="off" required>
   		 		</div>
   		 	</div>
   		 	<div class="form-group row">
   				 <label for="address_p" class="col-sm-2 col-form-label">Road/Street/Lane/Post Office:</label>
   				 <div class="col-sm-6">
     			 <input type="readonly" name="address_p" class="form-control alert-success" id="address_p" placeholder="Do not enter wrong Road/Street/Lane/Post Office" pattern="[A-Z]{3}" title=" Only Captele letters   Example->(POST AMROHA)
" autocomplete="off" required>
   		 		</div>
   		 	</div>
   		 	<div class="form-group row">
   				 <label for="address_divi" class="col-sm-2 col-form-label">Area/Taluka/Sub-division:</label>
   				 <div class="col-sm-6">
     			 <input type="readonly" name="address_divi" class="form-control alert-success" id="address_divi" placeholder="Do not enter wrong Area/Taluka/Sub-division:" pattern="[A-Z]{3}" title="Only Captele letters" autocomplete="off" required>
   		 		</div>
   		 	</div>
   		 	<div class="form-group row">
   				 <label for="address_d" class="col-sm-2 col-form-label">Town/District</label>
   				 <div class="col-sm-6">
     			 <input type="text" name="address_d" class="form-control alert-success" id="address_d" placeholder="Do not enter wrong Town/District" pattern="[A-Z]{3}" title="Only Captele letters" autocomplete="off" required>
   		 		</div>
   		 	</div>
   		 	<div class="form-group row">
					<label for="state" class="col-sm-2 col-form-label">State/Union Territory:</label>
					<div class="col-sm-6">
				  <input type="text" name="state" value="" class="form-control alert-success" id="state">
				  </div>
   		 	</div>
   		 	<div class="form-group row">
   				 <label for="pin_code" class="col-sm-2 col-form-label">PIN</label>
   				 <div class="col-sm-3">
     			 <input type="text" name="pin_code" class="form-control alert-success" id="pin_code" placeholder="Do not enter wrong PIN" autocomplete="off" required>
   		 		</div>
   		 	</div>
   		 	
   		 	<br>
   		 	<!-- <div class="form-group row">
   				 <label for="photo" class="col-sm-2 col-form-label">PHOTO</label>
   				 <div class="col-sm-3">
     			 <input type="file" class="form-control-file" name="photo" id="photo" accept="image/jpg,jpeg" required>
            </div>
                                  <script type="text/javascript">
                                  $('#photo').bind('change', function() {
                                  alert('This file size is: ' + this.files[0].size/1024/1024 + "MB");
                                    
                                  });
                                  
                          </script>
   		 		<div class="col-sm-3">
     			 <h6> 204px*204px, less than 9KB.</h6>
   		 		</div>
   		 	</div>
                                  
   		 	<div class="form-group row">
   				 <label for="sig" class="col-sm-2 col-form-label">SIGNATURE</label>
   				 <div class="col-sm-3">
     			 <input type="file" class="form-control-file" name="sig" id="sig" accept="image/.jpg" required>
   		 		</div>
   		 		<div class="col-sm-3">
     			 <h6> Less than 9KB.</h6>
   		 		</div>
   		 	</div>
   		 	<div class="form-group row">
   				 <label for="document" class="col-sm-2 col-form-label">DOCUMENT</label>
   				 <div class="col-sm-3">
     			 <input type="file" class="form-control-file" name="document" id="document" accept="application/pdf" required>
   		 		</div>
   		 		<div class="col-sm-3">
     			 <h6> PDF only blow 1MB.</h6>
   		 		</div>
   		 	</div> -->
  			</div>
  			</div>
		</form>
	</section>

</body>
</html><br><br><br>
        
    <div class="container">
      <div class="form-group row">
           <label for="form-control" class="col-sm-2 col-form-label">Rejection Massage</label>
           <input type="text" name="" class="form-control alert-success col-md-3" placeholder="Rejection Massage">&nbsp &nbsp &nbsp
           <input class="btn btn-info" type="submit" value="Reject Massage">
        </div>
           <label for="form-control" class="col-sm-2 col-form-label">Instantly Update to:</label>
           <select class="dropdown col-md-3" id="form-control" placeholder="form-control">
            <option value="0">-select-status-</option>
              <option value="1">Re-upload slip</option>
              <option value="2">Data Reload</option>
              <option value="3">Data Reload Before Slip</option>
              <option value="4">Data is Ready</option>
              <option value="5">Finished</option>
           </select>&nbsp &nbsp
           <input class="btn btn-info" type="submit" value="Update Status">
        </div>
        </div>
         <br><br><br><br>
	</section>
