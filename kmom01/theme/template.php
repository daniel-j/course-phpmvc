<?php
// include them helper functions from functions.php
include("functions.php");

// Get url to current page
$data['currentUrl'] = getCurrentUrl();

// Extract the variables from the $data-array if available
if(isset($data)) {
	extract($data);
}

// process the template file
include("default.tpl.php"); 