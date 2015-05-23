<?php
	if (!empty($_GET['page'])) {
		$page = $_GET['page'];
		$next = $page + 1;
		if($page>1){
			$pre = $page -1;
		}else{ $pre = 1;}
	}else{
		$page = 1;
	}
	echo $page;