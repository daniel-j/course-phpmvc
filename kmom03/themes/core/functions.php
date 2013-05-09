<?php
/**
* Helpers and static for the template file.
*/

function get_mainmenu() {
	global $cc;
	$controllers = array('' => "Index", 'developer' => "Developer", 'report' => "Redovisning", 'guestbook' => "Guestbook");
	$html = "<nav id='mainmenu'><ul>";
    foreach ($controllers as $controller => $text) {
      $html .= "<li>".$cc->request->CreateLink($controller, $text)."</li>\n";  
    }
    $html .= "</ul></nav>";
    return $html;
}

$cc->data['header'] = '<h1>Cloudchaser CMF</h1>';
$cc->data['footer'] = <<<EQD

<p>
Cloudchaser CMF by Daniel Jönsson (djazz).<br>
<a href="https://github.com/daniel-j/course-phpmvc">Sourcecode on github</a>
<a href="../../source.php?dir=phpmvc/kmom03">source.php</a>
</p>

EQD;
