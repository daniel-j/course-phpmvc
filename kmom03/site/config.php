<?php
/**
* Site configuration, this file is changed by user per site.
*
*/

/*
* Set level of error reporting
*/
error_reporting(-1);
ini_set('display_errors', 1);

/**
* Set database(s).
*/
$cc->config['database'][0]['dsn'] = 'sqlite:' . CLOUDCHASER_SITE_PATH . '/data/.ht.sqlite';
/*
* Define session name
*/
$cc->config['session_name'] = preg_replace('/[:\.\/-_]/', '', $_SERVER["SERVER_NAME"]);
$cc->config['session_key']  = 'cloudchaser';
/*
* Define server timezone
*/
$cc->config['timezone'] = 'Europe/Stockholm';

/*
* Define internal character encoding
*/
$cc->config['character_encoding'] = 'UTF-8';

/*
* Define language
*/
$cc->config['language'] = 'en';

/**
* Define the controllers, their classname and enable/disable them.
*
* The array-key is matched against the url, for example: 
* the url 'developer/dump' would instantiate the controller with the key "developer", that is 
* CCDeveloper and call the method "dump" in that class. This process is managed in:
* $cc->FrontControllerRoute();
* which is called in the frontcontroller phase from index.php.
*/
$cc->config['controllers'] = array(
  'index'     => array('enabled' => true,'class' => 'CCIndex'),
  'developer' => array('enabled' => true,'class' => 'CCDeveloper'),
  'report'    => array('enabled' => true,'class' => 'CCReport'),
  'guestbook' => array('enabled' => true,'class' => 'CCGuestbook'),
);

/**
* Settings for the theme.
*/
$cc->config['theme'] = array(
  // The name of the theme in the theme directory
  'name'    => 'core',
);

/**
* Set a base_url to use another than the default calculated
*/
$cc->config['base_url'] = null;

/**
* What type of urls should be used?
* 
* default      = 0      => index.php/controller/method/arg1/arg2/arg3
* clean        = 1      => controller/method/arg1/arg2/arg3
* querystring  = 2      => index.php?q=controller/method/arg1/arg2/arg3
*/
$cc->config['url_type'] = 1;

/**
* Set what to show as debug or developer information in the get_debug() theme helper.
*/
$cc->config['debug']['cloudchaser'] = false;
$cc->config['debug']['db-num-queries'] = true;
$cc->config['debug']['db-queries'] = true;