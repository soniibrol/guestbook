<!DOCTYPE html>
<html>
<head>
	<title>Guestbook</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/custom.css">

	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Guestbook</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<form class="cmxform form-horizontal" role="form" id="guestbookForm">
						<div class="form-group">
							<label for="name" class="col-sm-1 control-label">Name</label>
							<div class="col-sm-11">
								<input type="text" name="name" id="name" class="form-control" required="required" placeholder="Name" maxlength="100">
							</div>
						</div>
						<div class="form-group">
							<label for="email" class="col-sm-1 control-label">E-mail</label>
							<div class="col-sm-11">
								<input type="email" name="email" id="email" class="form-control" required="required" placeholder="E-mail" maxlength="100">
							</div>
						</div>
						<div class="form-group">
							<label for="message" class="col-sm-1 control-label">Message</label>
							<div class="col-sm-11">
								<textarea name="message" id="message" class="form-control" required="required" placeholder="Message"></textarea>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-1 col-sm-11">
								<input type="submit" name="submit_button" id="submit_button" class="btn btn-primary submit">
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h4>Message List</h4>
					<div id="message_list">
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
	var base_url = '<?php echo base_url(); ?>';
	</script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/custom.js"></script>
</body>
</html>