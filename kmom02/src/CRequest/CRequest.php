<?php
/**
 * Parse the request and identify controller, method and arguments.
 *
 * @package CloudchaserCore
 */
class CRequest {

  /**
   * Init the object by parsing the current url request.
   */
  public function Init($baseUrl = null) {
    // Take current url and divide it in controller, method and arguments
    if (isset($_GET['q'])) {
      $query = $_GET['q'];
      if ($query[0] !== '/') {
        $query = "/".$query;
      }
    } else {
      $query = substr($_SERVER['REQUEST_URI'], strlen(rtrim(dirname($_SERVER['SCRIPT_NAME']), '/')));
      if (substr($query, 0, 11) === '/index.php/') {
        $query = substr($query, 10);
      }
    }

    $splits = explode('/', trim($query, '/'));

    // Set controller, method and arguments
    $controller = !empty($splits[0]) ? $splits[0] : 'index';
    $method     = !empty($splits[1]) ? $splits[1] : 'index';
    $arguments  = $splits;
    unset($arguments[0], $arguments[1]); // remove controller & method part from argument list
    
    // Store it
    $this->request_uri  = $_SERVER['REQUEST_URI'];
    $this->script_name  = $_SERVER['SCRIPT_NAME'];
    $this->query        = $query;
    $this->splits       = $splits;
    $this->controller   = $controller;
    $this->method       = $method;
    $this->arguments    = $arguments;

    // Prepare to create current_url and base_url
    $currentUrl = $this->GetCurrentUrl();
    $parts      = parse_url($currentUrl);
    $baseUrl    = !empty($baseUrl) ? $baseUrl : "{$parts['scheme']}://{$parts['host']}" . (isset($parts['port']) ? ":{$parts['port']}" : '') . rtrim(dirname($this->script_name), '/');
    
    // Store it
    $this->base_url     = rtrim($baseUrl, '/') . '/';
    $this->current_url  = $currentUrl;
  }

  /**
   * Get the url to the current page. 
   */
  public function GetCurrentUrl() {
    $url = "http";
    $url .= (@$_SERVER["HTTPS"] == "on") ? 's' : '';
    $url .= "://";
    $serverPort = ($_SERVER["SERVER_PORT"] == "80") ? '' :
    (($_SERVER["SERVER_PORT"] == 443 && @$_SERVER["HTTPS"] == "on") ? '' : ":{$_SERVER['SERVER_PORT']}");
    $url .= $_SERVER["SERVER_NAME"] . $serverPort . htmlspecialchars($_SERVER["REQUEST_URI"]);
    return $url;
  }

}