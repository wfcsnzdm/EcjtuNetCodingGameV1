<?php 
require 'Get.php';
require 'page.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Topic</title>
	<link rel="stylesheet" type="text/css" href="http://www.bootcss.com/p/layoutit/css/bootstrap-combined.min.css">
	<link rel="stylesheet" type="text/css" href=".http://www.bootcss.com/p/layoutit/css/layoutit.css">
</head>
<body>
	<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<ul class="nav nav-tabs">
				<li class="active">
					<a href="#">Topic</a>
				</li>
			</ul>
			<ol>
				<?php 
				$url = "https://cnodejs.org/api/v1/topics?page=".$page;
				$arr = GetRequest($url);
				foreach ($arr as $value) {
					echo "<li><a href=".'topic.php?id='.$value['id'].">".$value['title']."</a></li>";
				}?>
			</ol>
			<div class="pagination">
				<ul>
					<li>
						<a href="index.php?page=<?php echo $pre;?>">上一页</a>
					</li>
					<?php for ($i=0; $i <5 ; $i++) { 
						echo "<li><a href=index.php?page=".$page.">".$page."</a></li>";
						$page++;
					}?>
					
					<li>
						<a href="index.php?page=<?php echo $pre;?>">下一页</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
</body>
</html>