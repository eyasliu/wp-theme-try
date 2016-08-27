<?php 

/*
this theme require pods plugin
 */

function sayHello(){
	echo 'hello';
}

function show_error_message(){

}

function readJson(){
	require_once(PODS_DIR . "components/Migrate-Packages/Migrate-Packages.php");

	$jsonFile = fopen(get_template_directory() . '/posttype.json', "r") or die("Unable to open file!");
	$json = fread($jsonFile, filesize(get_template_directory() . '/posttype.json'));
	fclose($jsonFile);
	$migrate = new Pods_Migrate_Packages();
	$migrate -> import($json, true);
}

function installTheme(){

}