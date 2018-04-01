<!DOCTYPE html>
<html>
<head>
	<title>Articles List</title>
	<!-- <link rel="stylesheet" style="text/css" href="<?= base_url('assets/css/bootstrap.min.css') ?>">-->
	<?= link_tag('assets/css/bootstrap.min.css'); ?>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	  <a class="navbar-brand" href="#">Admin Panel</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <button type="button" class="btn navbar-brand right btn-link">
	  	 <a class="navbar-brand" href="<?php echo base_url('login/admin_logout'); ?>">Logout</a> 
	  	<!-- <?= anchor('login/admin_logout','Logout'); ?>-->
	  </button>
	 	

	</nav>

