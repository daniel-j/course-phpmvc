<?php
/**
 * General settings, valid for all page requests
 */
 
// Error reporting
error_reporting(-1);

// Change this to __DIR__ whenever PHP5.3 is supported on production environment
if(!defined('__DIR__')) {
  define('__DIR__', dirname(__FILE__));
}

// The contents of the kmoms navlinks
$data['navkmom'] = array(
  'kmom01'   => array('text'=>'kmom01',  'url'=>false),
);

// The contents of the navbar
$data['navbar'] = array(
  'index'         => array('text'=>'Me',  'url'=>'./'),
  'redovisning'   => array('text'=>'Redovisning',  'url'=>'report.php'),
  'viewsource'    => array('text'=>'Källkod', 'url'=>'viewsource.php'),
  'github'        => array('text'=>'Github', 'url'=>'https://github.com/daniel-j/course-phpmvc')
);

$data['style'] = "";