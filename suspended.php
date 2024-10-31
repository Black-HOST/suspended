<?php 
/*
 * SUSPENDED.page
 *
 * Suspend a domain and all of its subdomains with a single click in WHMCS
 *
 * @category	WHMCS Add-on modules
 * @docs		https://suspended.page/whmcs
 * @source		https://github.com/Black-HOST/suspended/blob/master/suspended.php
*/

	if (!defined("WHMCS")) 
		header("Location: /404"); // deny unauthorized acces

// initialize suspended core
	include_once 'init.php';

// define module activation/ deactivation functions
	function suspended_config ()
	{
		return ( new \SUSPENDED\WHMCS\Config )();
	}

	function suspended_activate ()
	{
		return ( new \SUSPENDED\WHMCS\Activate )();
	}

	function suspended_deactivate ()
	{
		return ( new \SUSPENDED\WHMCS\Deactivate )();
	}