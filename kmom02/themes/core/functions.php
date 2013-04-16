<?php
/**
* Helpers for the template file.
*/
$cc->data['header'] = '<h1>Header: Cloudchaser</h1>';
$cc->data['main']   = '<p>Main: Now with a theme engine, Not much more to report for now.</p>';
$cc->data['footer'] = '<p>Footer: Cloudchaser CMF by Daniel Jönsson (djazz)</p>';


/**
* Print debug information from the framework.
*/
function get_debug() {
  $cc = CCloudchaser::Instance();
  $html = "<h2>Debug information</h2><hr><p>The content of the config array:</p><pre>" . htmlentities(print_r($cc->config, true)) . "</pre>";
  $html .= "<hr><p>The content of the data array:</p><pre>" . htmlentities(print_r($cc->data, true)) . "</pre>";
  $html .= "<hr><p>The content of the request array:</p><pre>" . htmlentities(print_r($cc->request, true)) . "</pre>";
  return $html;
}

