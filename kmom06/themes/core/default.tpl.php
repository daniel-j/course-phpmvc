<!doctype html>
<html lang="<?=$cc->config['language']?>"> 
<head>
	<meta charset="<?=$cc->config['character_encoding']?>">
	<title><?=$title?></title>
	<link rel="stylesheet" href="<?=$stylesheet?>">
</head>
<body>
	<div id="header">

		<?=$header?>

	</div>
	<div id="main" role="main">
		<?=login_menu()?>
		<?=$mainmenu?>
		<?=get_messages_from_session()?>
		<?=@$main?>
		<?=render_views()?>
		<?=get_debug()?>
	</div>
	<div id="footer">
		<hr>
		<?=$footer?>
	</div>
</body>
</html>