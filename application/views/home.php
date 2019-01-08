<!DOCTYPE html>
<html>
<head>
	<title>CodeIgniter Upload Ajax Image</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>

<body>
	<div class="container" style="margin-top: 50px">
		<div class="row">
			<div class="col-md-12">
				<?php echo $this->session->flashdata("notif") ?>
				<div class="card">
					<div class="card-header">
						UPLOAD IMAGE
					</div>
					<div class="card-body">
						<form id="submit">
							<div class="form-group">
							    <label>IMAGE</label>
							    <input type="file" class="form-control-file" name="userfile">
							</div>
							<div class="form-group">
								<button type="submit" id="button-submit" class="btn btn-md btn-success">UPLOAD</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function(){
 
        $('#submit').submit(function(e){
            e.preventDefault(); 
                 $.ajax({
                     url:'<?php echo base_url(); ?>/home/upload',
                     type:"post",
                     data:new FormData(this),
                     processData:false,
                     contentType:false,
                     cache:false,
                     async:false,
                      success: function(data){
                          alert("Upload Image Berhasil.");
                   }
                 });
            });
         
 
    });
	</script>
</body>
</html>