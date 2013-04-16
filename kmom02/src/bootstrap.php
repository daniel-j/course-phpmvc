<?php
/**
 * Bootstrapping, setting up and loading the core.
 *
 * @package CloudchaserCore
 */

/**
 * Enable auto-load of class declarations.
 */
function autoload($aClassName) {
  $classFile = "{$aClassName}/{$aClassName}.php";
  
  $file1 = CLOUDCHASER_SITE_PATH . "/" . $classFile;
  $file2 = CLOUDCHASER_INSTALL_PATH . "/src/" . $classFile;
  
  if(is_file($file1)) {
  	//echo "Autoload ".$file1."<br>";
    require_once $file1;
  } else if(is_file($file2)) {
  	//echo "Autoload ".$file2."<br>";
    require_once $file2;
  } else {
  	echo "Unable to autoload ".$aClassName.".";
  }
}

spl_autoload_register('autoload', true);