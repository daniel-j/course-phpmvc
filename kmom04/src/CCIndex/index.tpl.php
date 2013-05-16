<h1>Index Controller</h1>
<p>This is what you can do for now.</p>

<?php foreach($menu as $val): ?>
<li><a href='<?=create_url($val)?>'><?=$val?></a>  
<?php endforeach; ?>

<h3>CForm</h3>
<a href="<?=create_url("cformtest")?>">CForm playground</a>
