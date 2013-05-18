<?php
/**
* Helpers and static for the template file.
*/

function create_mainmenu($class = '') {
	global $cc;
	$menu = $cc->config['menu'];
	$html = "<nav id='mainmenu' class='$class'><ul>";
	foreach ($menu['items'] as $item) {
		if (isset($item['controller'])) {
			$html .= "<li";
			if ($cc->request->controller === $item['controller']) {
				$html .= " class='current'";
			}
			$html .= "><a href=\"".$cc->request->CreateUrl($item['controller'])."\">{$item['text']}</a></li>\n";  
		} else if (isset($item['url'])) {
			$html .= "<li>"."<a href=\"".$item['url']."\">".$item['text']."</a>"."</li>\n";
		} else if (isset($item['items'])) {
			$html .= "<li>".$item['text']."<ul>";
			foreach ($item['items'] as $item) {
				if (isset($item['controller'])) {
					$html .= "<li";
					if ($cc->request->controller === $item['controller']) {
						$html .= " class='current'";
					}
					$html .= "><a href=\"".$cc->request->CreateUrl($item['controller'])."\">{$item['text']}</a></li>\n";  
				} else if (isset($item['url'])) {
					$html .= "<li>"."<a href=\"".$item['url']."\">".$item['text']."</a>"."</li>\n";
				} else {
					$html .= "<li>???</li>";
				}
			}
			$html .= "</ul></li>";
		} else {
			$html .= "<li>???</li>";
		}
		
	}
	$html .= "</ul></nav>";
	return $html;
}

$indexUrl = create_url('');

$cc->data['header'] = <<<EQD
<a href="http://psalm-sinatra.deviantart.com/art/Cloud-Chaser-318093871" target="_blank"><img src="{$themeUrl}/img/cloudchaser_cloud.png" id="header-img"></a>
<h1><a href="{$indexUrl}">Cloudchaser CMF</a></h1>
EQD;

$cc->data['mainmenu'] = create_mainmenu();
$cc->data['footer'] = <<<EQD

<p>
Cloudchaser CMF by Daniel Jönsson (djazz).<br>
<a href="https://github.com/daniel-j/course-phpmvc">Sourcecode on github</a>
<a href="../../source.php?dir=phpmvc/kmom05">source.php</a>
</p>

EQD;
