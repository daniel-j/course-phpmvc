<!doctype html>
<html lang="<?=$cc->config['language']?>"> 
<head>
	<meta charset="<?=$cc->config['character_encoding']?>">
	<title><?=$title?></title>
	<link rel="stylesheet" href="<?=$stylesheet?>">
</head>
<body>
	<div id="header">
		<a href="http://psalm-sinatra.deviantart.com/art/Cloud-Chaser-318093871" target="_blank"><img src="<?="{$themeUrl}/img/cloudchaser_cloud.png"?>" id="header-img"></a>
		<?=$header?>
	</div>
	<div id="main" role="main">
		<?=get_mainmenu()?>
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