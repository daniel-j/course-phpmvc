<?php
/**
* Helpers and static for the template file.
*/

function get_mainmenu() {
	global $cc;
	$controllers = array('/' => "Index", 'developer' => "Developer", 'report' => "Redovisning");
	$html = "<nav id='mainmenu'><ul>";
    foreach($controllers as $controller => $text) {
      $html .= "<li>".$cc->request->CreateLink($controller, $text)."</li>\n";  
    }
    $html .= "</ul></nav>";
    return $html;
}

$cc->data['header'] = '<h1>Cloudchaser CMF</h1>';
$cc->data['footer'] = '<p>Cloudchaser CMF by Daniel Jönsson (djazz).</p>';

