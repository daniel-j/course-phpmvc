<?php

//
// PHASE: BOOTSTRAP
//
define('CLOUDCHASER_INSTALL_PATH', dirname(__FILE__));
define('CLOUDCHASER_SITE_PATH', CLOUDCHASER_INSTALL_PATH . '/site');

require_once CLOUDCHASER_INSTALL_PATH.'/src/CCloudchaser/bootstrap.php';

$cc = CCloudchaser::Instance();

//
// PHASE: FRONTCONTROLLER ROUTE
//
$cc->FrontControllerRoute();

//
// PHASE: THEME ENGINE RENDER
//
$cc->ThemeEngineRender();