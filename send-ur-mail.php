<?php
    require_once('server-request-route.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Send Email</title>

	    <?php 
	        if (!file_exists('libraries.php'))
	            echo '<h2>Site is under maintainence...</h2>';
	        else
	            require_once('libraries.php');
	    ?>

	    <link rel="stylesheet" type="text/css" href="CSS files/form.css?cache=<?php echo time();?>">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 mail-head">
					<h2>Send Your Mail</h2>
				</div>
			</div>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
					<form class="form-horizontal" action="" method="post" id="sendMailFrom">
						
						<input type="hidden" name="sendmailFrom" value="<?php echo time(); ?>">

						<div class="form-group">
							<label for="full_name" class="col-sm-2 control-label">Full Name</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="full_name" name="full_name" placeholder="Your Full Name" value="">
                        		<div id="full_nameErr"></div>
							</div>
						</div>

						<div class="form-group">
							<label for="subject" class="col-sm-2 control-label">Subject</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject Line" value="">
                        		<div id="subjectErr"></div>
							</div>
						</div>
						<div class="form-group">
							<label for="email_to" class="col-sm-2 control-label">Email To</label>
							<div class="col-sm-10">
								<input type="email" class="form-control" id="email_to" name="email_to" placeholder="example@domain.com" value="">
                        		<div id="email_toErr"></div>
							</div>
						</div>
						<div class="form-group">
							<label for="message" class="col-sm-2 control-label">Message</label>
							<div class="col-sm-10">
								<textarea class="form-control" rows="4" name="message"></textarea>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-10 col-sm-offset-2">
								<button type="button" class="btn btn-warning" id="sendEmailButton" >Send <span class="glyphicon glyphicon-send"></span></button>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-10 col-sm-offset-2">
								<?php
									if (isset($_GET['send']) && $_GET['send'] == 'success') {?>
										<span class="alert alert-success">Mail sent successfully</span>
									<?php }
									elseif (isset($_GET['send']) && $_GET['send'] == 'unsuccess') {?>
										<span class="alert alert-danger">Mail sent successfully</span>
									<?php }
								?>
							</div>
						</div>
					</form>
                </div>
            </div>
		</div>
		<script type="text/javascript">
			var alert_status = 0;
			<?php
				if (isset($_GET['send']) && ($_GET['send'] == 'success' || $_GET['send'] == 'unsuccess')) {?>
					alert_status = 1;	
				<?php }
			?>
		</script>
        <script type="text/javascript" src="javascript files/form.js?cache=<?php echo time();?>"></script>
	</body>
</html>