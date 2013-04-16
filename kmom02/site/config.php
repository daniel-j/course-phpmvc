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

/*
* Define session name
*/
$cc->config['session_name'] = preg_replace('/[:\.\/-_]/', '', $_SERVER["SERVER_NAME"]);

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
);