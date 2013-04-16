<?php
/**
* Helpers for theming, available for all themes in their template files and functions.php.
* This file is included right before the themes own functions.php
*/


/**
* Create a url by prepending the base_url.
*/
function base_url($url) {
  return CCloudchaser::Instance()->request->base_url . trim($url, '/');
}

/**
* Return the current url.
*/
function current_url() {
  return CCloudchaser::Instance()->request->current_url;
}

/**
* Create a url.
*/
function create_url($url) {
	return CCloudchaser::Instance()->request->CreateUrl($url);
}

function create_link($url, $text) {
	return CCloudchaser::Instance()->request->CreateLink($url, $text);
}