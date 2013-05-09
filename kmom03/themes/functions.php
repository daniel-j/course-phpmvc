<?php
/**
* Helpers for theming, available for all themes in their template files and functions.php.
* This file is included right before the themes own functions.php
*/


/**
* Create a url by prepending the base_url.
*/
function base_url($url) {
  return CCloudchaser::Instance()->request->base_url . trim($url, '/');
}

/**
* Return the current url.
*/
function current_url() {
  return CCloudchaser::Instance()->request->current_url;
}

/**
* Create a url.
*/
function create_url($url) {
	return CCloudchaser::Instance()->request->CreateUrl($url);
}

function create_link($url, $text) {
	return CCloudchaser::Instance()->request->CreateLink($url, $text);
}

/**
* Render all views.
*/
function render_views() {
  return CCloudchaser::Instance()->views->Render();
}

/**
* Get messages stored in flash-session.
*/
function get_messages_from_session() {
  $messages = CCloudchaser::Instance()->session->GetMessages();
  $html = null;
  if(!empty($messages)) {
    foreach($messages as $val) {
      $valid = array('info', 'notice', 'success', 'warning', 'error', 'alert');
      $class = (in_array($val['type'], $valid)) ? $val['type'] : 'info';
      $html .= "<div class='$class'>{$val['message']}</div>\n";
    }
  }
  return $html;
}

/**
* Print debuginformation from the framework.
*/
function get_debug() {
  $cc = CCloudchaser::Instance();  
  $html = null;
  if(isset($cc->config['debug']['db-num-queries']) && $cc->config['debug']['db-num-queries'] && isset($cc->db)) {
    $html .= "<p>Database made " . $cc->db->GetNumQueries() . " queries.</p>";
  }    
  if(isset($cc->config['debug']['db-queries']) && $cc->config['debug']['db-queries'] && isset($cc->db)) {
    $html .= "<p>Database made the following queries.</p><pre>" . implode('<br/><br/>', $cc->db->GetQueries()) . "</pre>";
  }    
  if(isset($cc->config['debug']['cloudchaser']) && $cc->config['debug']['cloudchaser']) {
    $html .= "<hr><h3>Debuginformation</h3><p>The content of CCloudChaser:</p><pre>" . htmlent(print_r($cc, true)) . "</pre>";
  }    
  return $html;
}