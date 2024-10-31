<?php
/*
 * SUSPENDED/Activator
 *
 * SUSPENDED.page WHMCS activation controller
 * executed uppon addon activation from the WHMCS administration area
 *
 * @docs        https://suspended.page/whmcs
 * @source		https://github.com/Black-HOST/suspended/blob/master/whmcs/activate.php
*/

	namespace SUSPENDED\WHMCS;

class Activate
{
	function __invoke () : array
	{
		return 
		[
			'status' => 'success',
			'description' => "SUSPENDED.page was successfully activated!" 
		];
	}
}