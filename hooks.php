<?php 
/*
 * SUSPENDED.page
 *
 * WHMCS hook registrar
 * Used for registering whmcs hooks actions in the /hooks directory
 * 
 * Checkout https://developers.whmcs.com/hooks/hook-index/ for full list of avaliable WHMCS hooks
 *
 * @docs        https://suspended.page/whmcs
 * @source		https://github.com/Black-HOST/suspended/blob/master/hooks.php
*/
	namespace SUSPENDED;

	if (!defined("ADMINAREA") ) 
		return false; // skip unnecessary code execution on the front-end

// initialize suspended core
	include_once 'init.php';

	// hook executed at the prior than admin area footer output
	CORE::hook( 'AdminAreaFooterOutput' );
