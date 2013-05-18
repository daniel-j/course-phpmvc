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
  'user'      => array('enabled' => true,'class' => 'CCUser'),
  'acp'       => array('enabled' => true,'class' => 'CCAdminControlPanel'),
  'content'   => array('enabled' => true,'class' => 'CCContent'),
  'blog'      => array('enabled' => true,'class' => 'CCBlog'),
  'page'      => array('enabled' => true,'class' => 'CCPage')
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

$cc->config['menu'] = array(
	'items' => array(
		'developer' => array('text' => "Developer", 'controller' => 'developer'),
		'report' => array('text' => "Redovisning", 'controller' => 'report'),
		'guestbook' => array('text' => "Guestbook", 'controller' => 'guestbook'),
		'user' => array('text' => "User", 'controller' => 'user'),
		'content' => array('text' => "Content", 'items' => array(
			'content' => array('text' => "Content", 'controller' => 'content'),
			'blog' => array('text' => "Blog", 'controller' => 'blog')
		)),
		/*'url' => array('text' => "Absolute url", 'url' => "http://dbwebb.se"),
		'sub' => array('text' => "Sub", 'items' => array(
			'js' => array('text' => "JS url", 'url' => "javascript:window.open('http://aftonbladet.se/', Date.now(), 'width=200,height=200');"),
			'alert' => array('text' => "Sample url", 'url' => "javascript:alert('yay');"),
			'relurl' => array('text' => "Relative url", 'url' => "../../")
		)),
		'changeClass' => array('text' => "Alternate menu style", 'url' => "?menu=alternate")*/
	)
);

/**
* How to hash password of new users, choose from: plain, md5salt, md5, sha1salt, sha1.
*/
$cc->config['hashing_algorithm'] = 'sha1salt';

/**
* Allow or disallow creation of new user accounts.
*/
$cc->config['create_new_users'] = true;