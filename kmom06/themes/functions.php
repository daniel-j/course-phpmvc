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
function create_url($urlOrController=null, $method=null, $arguments=null) {
	return CCloudchaser::Instance()->request->CreateUrl($urlOrController, $method, $arguments);
}

function create_link($url, $text) {
	return CCloudchaser::Instance()->request->CreateLink($url, $text);
}

/**
* Render all views.
*
* @param $region string the region to draw the content in.
*/
function render_views($region='default') {
  return CCloudchaser::Instance()->views->Render($region);
}

/**
* Check if region has views. Accepts variable amount of arguments as regions.
*
* @param $region string the region to draw the content in.
*/
function region_has_content($region='default' /*...*/) {
  return CCloudchaser::Instance()->views->RegionHasView(func_get_args());
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

/**
 * Login menu. Creates a menu which reflects if user is logged in or not.
 */
function login_menu() {
  $cc = CCloudchaser::Instance();
  if($cc->user['isAuthenticated']) {
    $items = "<a href='" . create_url('user/profile') . "'><img src=\"".get_gravatar(20)."\" valign=bottom> " . $cc->user['acronym'] . "</a> ";
    if($cc->user['hasRoleAdministrator']) {
      $items .= "<a href='" . create_url('acp') . "'>acp</a> ";
    }
    $items .= "<a href='" . create_url('user/logout') . "'>logout</a> ";
  } else {
    $items = "<a href='" . create_url('user/login') . "'>login</a> ";
  }
  return "<nav id=\"userinfo\">$items</nav>";
}

/**
* Get a gravatar based on the user's email.
*/
function get_gravatar($size=null) {
  return 'http://www.gravatar.com/avatar/' . md5(strtolower(trim(CCloudchaser::Instance()->user['email']))) . '.jpg?' . ($size ? "s=$size" : null);
}

/**
 * Escape data to make it safe to write in the browser.
 */
function esc($str) {
  return htmlEnt($str);
}

/**
 * Display diff of time between now and a datetime. 
 *
 * @param $start datetime|string
 * @return string
 */
function time_diff($start) {
  return formatDateTimeDiff($start);
}

/**
 * Filter data according to a filter. Uses CMContent::Filter()
 *
 * @param $data string the data-string to filter.
 * @param $filter string the filter to use.
 * @returns string the filtered string.
 */
function filter_data($data, $filter) {
  return CMContent::Filter($data, $filter);
}