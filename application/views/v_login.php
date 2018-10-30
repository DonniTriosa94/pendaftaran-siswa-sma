<?php
	defined('BASEPATH') OR exit ('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Sign In</title>
	<link href="<?php echo base_url('plugin/css/bootstrap.css');?>" rel="stylesheet"/>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<?php echo form_open('c_admin/login');?>
				<h2 class="form-signin-heading">Please Sign In</h2>
				<?php echo $this->session->flashdata('message');?>
				<div class="form-group"><input type="text" name="username" size="50" class="form-control" placeholder="Username"/></div>
				<div class="form-group"><input type="password" name="password" size="50" class="form-control" placeholder="Password"/></div>
				<div class="form-group"><button type="submit" class="btn btn-primary">Sign In</button></div>
				<?php echo form_close();?>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div> 
</body>
</html>