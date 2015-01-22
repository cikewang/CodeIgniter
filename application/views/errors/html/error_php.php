<html>
	<head>
		<title>错误提示</title>
		<!-- 新 Bootstrap 核心 CSS 文件 -->
		<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
		<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
		<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
		<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
		<script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	</head>
	<body>
		<h3>错误<?php echo $i;?> :</h3>
		<div class="alert alert-danger" role="alert">
			<div>
				<strong>错误级别：</strong>
				<?php echo $severity;?>
			</div>
			<div>
				<strong>错误信息：</strong>
				<?php echo $message;?>
			</div>
			<div>
				<strong>文件路径：</strong>
				<?php echo $filepath;?>
			</div>
			<div>
				<strong>错误行号：</strong>
				<?php echo $line;?>
			</div>
		</div>
	</body>
</html>

