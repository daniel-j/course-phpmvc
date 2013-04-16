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