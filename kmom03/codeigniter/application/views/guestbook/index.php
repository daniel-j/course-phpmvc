<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<style>
	body {
		font-family: Courier New;
		font-size: 13px;
	}
	#wrapper {
		width: 800px;
		margin: 0 auto;
	}
	.post {
		border-bottom: 1px dashed #555;
		padding: 10px;
	}
	#errors {
		color: red;
	}
	textarea {
		font-family: Verdana;
		width: 500px;
		height: 100px;
		white-space:nowrap;
		overflow:auto;
		font-size: 17px;
	}
	</style>
</head>
<body>

<div id="wrapper">
	<h1>Guestbook</h1>
	<div id="errors"><?php echo validation_errors(); ?></div>
	<?php echo $form; ?>
	<hr>
	<?php foreach($posts as $posts_item): ?>
	<div class="post">
	<div><?php echo $posts_item['text']; ?></div>
	<br>
	<div>- <em><?=$posts_item['author']?> <?=$posts_item['timestamp']?></em></div>
	</div>
	<?php endforeach; ?>
</div>
<footer></footer>
</body>
</html>