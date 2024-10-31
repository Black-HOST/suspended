<?php
/*
 * SUSPENDED/Deactivator
 *
 * SUSPENDED.page WHMCS deactivator controller
 * executed uppon addon deactivation from the WHMCS administration area
 *
 * @docs        https://suspended.page/whmcs
 * @source		https://github.com/Black-HOST/suspended/blob/master/whmcs/deactivate.php
*/

	namespace SUSPENDED\WHMCS;

class Deactivate
{
	function __invoke () : array
	{
		return 
		[
			'status' => 'success',
			'description' => "SUSPENDED.page was successfully deactivated!" 
		];
	}
}