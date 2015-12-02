<?php include 'header.php' ?>
  <body style="padding: 50px;">
<?php include('navbar.php'); ?>
    <div class="container">
	    <div class="row">
		<div class="page-header">
		  <h1>Registration</h1>
		</div>
	    </div>
	<form class="form-horizontal" method="post" action="" enctype="multipart/form-data" id="form_maker">
			<fieldset>
					<div class="form-group">
					  <label class="col-md-4 control-label">Full Name:<span style="color:#E83538">*</span></label>  
					  <div class="col-md-4">
					  <input id="textinput" name="fullname" type="text" class="form-control input-md" placeholder="">
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-md-4 control-label">Title:<span style="color:#E83538">*</span></label>
					  <div class="col-md-4">
						<select id="selectbasic" name="title" class="form-control"><option value="">Select Option</option><option value="Mr.">Mr.</option><option value=" Ms."> Ms.</option><option value=" Dr."> Dr.</option><option value=" Prof."> Prof.</option></select>
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-md-4 control-label">Affiliation:<span style="color:#E83538">*</span></label>  
					  <div class="col-md-4">
					  <input id="textinput" name="affiliation" type="text" class="form-control input-md" placeholder="">
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-md-4 control-label">Address:</label>  
					  <div class="col-md-4">
					  <input id="textinput" name="address" type="text" class="form-control input-md" placeholder="">
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-md-4 control-label">City:</label>  
					  <div class="col-md-4">
					  <input id="textinput" name="city" type="text" class="form-control input-md" placeholder="">
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-md-4 control-label">Country:<span style="color:#E83538">*</span></label>  
					  <div class="col-md-4">
					  <input id="textinput" name="country" type="text" class="form-control input-md" placeholder="">
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-md-4 control-label">Postal/Zip Code:</label>  
					  <div class="col-md-4">
					  <input id="textinput" name="postal_zip" type="text" class="form-control input-md" placeholder="">
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-md-4 control-label">Phone:<span style="color:#E83538">*</span></label>  
					  <div class="col-md-4">
					  <input id="textinput" name="phone" type="phone" class="form-control input-md" placeholder="">
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-md-4 control-label">Email:<span style="color:#E83538">*</span></label>  
					  <div class="col-md-4">
					  <input id="textinput" name="email" type="email" class="form-control input-md" placeholder="">
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-md-4 control-label">I intend to :</label>
					  <div class="col-md-4">
							 <div class="checkbox">
								<label style="text-align: left;">
								  <input type="checkbox" name="intend_to[]" value="Participate" id="intend_to1"> Participate</label>
								</div>
							 <div class="checkbox">
								<label style="text-align: left;">
								  <input type="checkbox" name="intend_to[]" value=" Present a poster communication" id="intend_to2">  Present a poster communication</label>
								</div>
							 <div class="checkbox">
								<label style="text-align: left;">
								  <input type="checkbox" name="intend_to[]" value=" Present an oral communication" id="intend_to3">  Present an oral communication</label>
								</div>
							 <div class="checkbox">
								<label style="text-align: left;">
								  <input type="checkbox" name="intend_to[]" value=" Participant" s="" guest'="" id="intend_to4">  Participant's guest</label>
								</div>
							 <div class="checkbox">
								<label style="text-align: left;">
								  <input type="checkbox" name="intend_to[]" value=" Exhibitor" id="intend_to5">  Exhibitor</label>
								</div>
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-md-4 control-label">Please indicate the title of your oral/poster communication:</label>
					  <div class="col-md-4">                     
						<textarea class="form-control" id="textarea" name="poster" placeholder=""></textarea>
					  </div>
					</div>
					<div class="form-group" id="file_div" style="display: none;">
					  <label class="col-md-4 control-label">Upload File : </label>  
					  <div class="col-md-4">
					  <input id="file" name="file" type="file" class="form-control input-md">
					  </div>
					</div><div class="form-group">
						<label class="col-md-4 control-label"></label>
						<div class="col-md-4"><button id="singlebutton" name="save_data" class="btn btn-primary">Submit</button></div>
			  </div>
			</fieldset></form>
    </div>
<?php include 'footer.php' ?>
