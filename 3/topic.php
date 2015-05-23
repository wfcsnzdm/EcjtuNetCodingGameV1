<?php
	require 'Get.php';
	if (!empty($_GET['id'])) {
		$id = $_GET['id'];
	}
	$url = "https://cnodejs.org/api/v1/topic/".$id;
	$arr = GetRequest($url);
?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title><?php echo $arr['title']; ?></title>
		<link rel="stylesheet" type="text/css" href="http://www.bootcss.com/p/layoutit/css/bootstrap-combined.min.css">
		<link rel="stylesheet" type="text/css" href=".http://www.bootcss.com/p/layoutit/css/layoutit.css">
	</head>
	<body>
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
					<h3 class="text-center">
						<?php echo $arr['title']; ?>
					</h3>
					<p class="text-center">
						<?php echo $arr['content'];?>
					</p> 
					<ol>
					<?php 
					foreach ($arr['replies'] as  $value) {
						echo "<li><span>".$value['author']['loginname']."说:</span>".$value['content']."<span></span></li>";
						
					}
					?>
					</ol>
				</div>
			</div>
		</div>
	</body>
	</html>