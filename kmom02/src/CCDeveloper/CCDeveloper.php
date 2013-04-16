<?php
/**
 * Controller for development and testing purpose, helpful methods for the developer.
 * 
 * @package CloudchaserCore
 */
class CCDeveloper implements IController {

  /**
   * Implementing interface IController. All controllers must have an index action.
   */
  public function Index() {   
    $this->Menu();
    $this->Debug();
  }

  /**
   * Create a list of links in the supported ways.
   */
  public function Links() {  
    $this->Menu();
    
    $cc = CCloudchaser::Instance();
    
    $url = 'developer/links';
    $current = $cc->request->CreateUrl($url);

    $cc->request->cleanUrl = false;
    $cc->request->querystringUrl = false;    
    $default      = $cc->request->CreateUrl($url);
    
    $cc->request->cleanUrl = true;
    $clean        = $cc->request->CreateUrl($url);    
    
    $cc->request->cleanUrl = false;
    $cc->request->querystringUrl = true;    
    $querystring  = $cc->request->CreateUrl($url);
    
    $cc->data['main'] .= <<<EOD
<h2>CRequest::CreateUrl()</h2>
<p>Here is a list of urls created using above method with various settings. All links should lead to
this same page.</p>
<ul>
<li><a href='$current'>This is the current setting</a>
<li><a href='$default'>This would be the default url</a>
<li><a href='$clean'>This should be a clean url</a>
<li><a href='$querystring'>This should be a querystring like url</a>
</ul>
<p>Enables various and flexible url-strategy.</p>
EOD;
		
		$this->Debug();
  }

  private function Debug() {
	  $cc = CCloudchaser::Instance();
	  $html = "<hr><h3>Debug information</h3><p>The content of the config array:</p><pre>" . htmlentities(print_r($cc->config, true)) . "</pre>";
	  $html .= "<p>The content of the data array:</p><pre>" . htmlentities(print_r($cc->data, true)) . "</pre>";
	  $html .= "<p>The content of the request array:</p><pre>" . htmlentities(print_r($cc->request, true)) . "</pre>";
	  $cc->data['main'] .= $html;
  }

  /**
   * Create a method that shows the menu, same for all methods
   */
  private function Menu() {
    $cc = CCloudchaser::Instance();
    $menu = array('developer', 'developer/index', 'developer/links');
    
    $html = "";
    foreach($menu as $val) {
      $html .= "<li>".$cc->request->CreateLink($val, $val)."</li>\n";  
    }
    
    $cc->data['title'] = "The Developer Controller";
    $cc->data['main'] = <<<EOD
<h1>The Developer Controller</h1>
<p>This is what you can do for now:</p>
<ul>
$html
</ul>
EOD;
  }

}
