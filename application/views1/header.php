<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $page_title;?></title>
<script type="text/javascript" language="javascript" src="http://jqueryjs.googlecode.com/files/jquery-1.3.2.min.js"></script>
<script type="text/javascript" language="javascript">
	jQuery(document).ready(function($){
									
		<?php
			//Insert jQuery from controller
			if(isset($custom_jquery))
			{
				echo $custom_jquery;	
			}
		
		?>									 
	});
</script>
<style type="text/css">
.listbox {
	background-color:#FEFEFE;
	border:1px solid #CCC;
	color:#444;
	padding:1px;
}
.tdline {
	background-color:#F2F2F2;
	border-bottom:1px solid #CCC;
	border-top:1px solid #FFF;
	font-size:11px;
	padding:5px;
	text-decoration:none;
}

.tdlines {
	background-color:#FEFEFE;
	border-bottom:1px solid #EEE;
	border-top:1px solid #FFF;
	font-size:11px;
	padding:6px;
	text-decoration:none;
}
.tdtop {
	background-color:#F3F3F3;
	border-bottom:1px solid #DDD;
	color:#444;
	font-size:11px;
	font-weight:700;
	padding:3px 2px;
	text-decoration:none;
}

.th {
	background-color:#FFF;
	border:1px solid #555;
	color:#000;
	cursor:pointer;
	padding:0;
}
</style>
</head>

<body>
<!-- End Header -->