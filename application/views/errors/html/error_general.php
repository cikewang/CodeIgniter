<html>
	<head>
		<title>错误提示</title>
		<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
		<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
		<script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	</head>
	<body>
		<h3>Exception :</h3>
		<div class="alert alert-danger" role="alert">
			<div>
				<strong>错误信息：</strong>
				<?php echo $message;?>
			</div>
		</div>
	</body>
</html>

