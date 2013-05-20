<h1>Index Controller</h1>

<h3>Some link</h3>
Uppgift: <a href="<?=create_url("uppgift1/")?>">Autokompilera LESS med lessphp</a><br>
Extrauppgift: <a href="<?=create_url("responsive/")?>">Responsiv webbdesign med LESS, semantic.gs och Twitter bootstrap</a><br>
<br>

<p>This is what you can do for now.</p>

<?php foreach($menu as $val): ?>
<li><a href='<?=create_url($val)?>'><?=$val?></a>  
<?php endforeach; ?>