<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Import Data to Database</title>
	<link href="<?php echo CSS_URI; ?>bootstrap.css" rel="stylesheet">
    <link href="<?php echo CSS_URI; ?>font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo CSS_URI; ?>assets/css/styles.css" type="text/css" rel="stylesheet" />
    <script src="<?php echo JS_URI; ?>jquery/jquery-1.12.3.min.js"></script>
    <script src="<?php echo JS_URI; ?>bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo JS_URI; ?>jquery/jquery.dataTables.min.js"></script>
    <script src="<?php echo JS_URI; ?>bootstrap/dataTables.bootstrap.min.js"></script>
   
</head>
<body>
       <nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="#">WebSiteName</a>
		    </div>
		    <ul class="nav navbar-nav">
		      <li <?php if(isset($keluarga)){ ?> class="active" <?php } ?> ><a href="<?php echo base_url('keluarga');?>">Data Keluarga</a></li>
		      <li <?php if(isset($kendali)){ ?> class="active" <?php } ?>><a href="<?php echo base_url('kendali');?>">Import Data</a></li>
		    </ul>
		  </div>
		</nav>
 
 