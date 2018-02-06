<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>List of proudly site</title>
	<style>
		body{background: #111; color: #39b54a;margin:0;padding:0;}
		.header{width:100%;height:40px;line-height:40px;text-align:center;font-size:30px;margin:30px auto 10px;}
		fieldset{width:70%;height:45px;margin:0 auto 10px;border:#39b54a 1px solid;}
		fieldset a{text-decoration:none;color:#39b54a;font-size:20px;margin-left:15px;}
		fieldset a:hover{color: #eee;}
		legend{padding:3px 5px;border:1px solid #39b54a;text-align:right;color:#39b54a;}
		.btn_back_top{width:40px;height:40px;line-height:40px;text-align:center;color:#eee;position:fixed;bottom:20px;right:20px;background:#39b54a;cursor:pointer;}
	</style>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("#back_top").hide();
			$(function () {
				$(window).scroll(function () {
					if ($(this).scrollTop() > 100) {$('#back_top').fadeIn();
					} else {$('#back_top').fadeOut();}});
				$('#back_top').click(function () {
					$('body,html').animate({scrollTop: 0}, 800);
					return false;
		});});});
	</script>
</head>

<body>
	<div class="header">List of Proudly Site By Roklabath.</div>
	<?php
		$files = glob("*");
		foreach($files as $file){
			if(is_dir($file)){
				if($file != "appserv" && $file != "cgi-bin" && $file != "phpMyAdmin"){
	?>
				<fieldset>
					<legend>Roklabath, Koravit Sawekvannarkon.</legend>
					<a href="<?= $file; ?>" target="_blank"><?= $file; ?></a>
				</fieldset>
	<?php }}} ?>

	<div class="btn_back_top" onClick="scrollTop()" id="back_top">TOP</div>
</body>
</html>