<?php
/*
 * SUSPENDED/Config
 *
 * SUSPENDED.page WHMCS configuration controller
 *
 * Used for defining WHMCS addon configuration elements,
 * check https://developers.whmcs.com/addon-modules/configuration/ for avaliable config options
 *
 * @docs        https://suspended.page/whmcs
 * @source		https://github.com/Black-HOST/suspended/blob/master/whmcs/config.php
*/

	namespace SUSPENDED\WHMCS;

class Config
{
	function __invoke () : array
	{
		return 
		[
			"name" 			=> "Domain Suspension",
			"description" 	=> "Suspend a domain and all of its subdomains with a single click in WHMCS",
			"author" 		=> "SUSPENDED.page",
			"version"		=> "1.0",
			"fields"		=> 	[
									'option1' =>[ 	
													"FriendlyName" => "NS 1", "Type" => "text", 
													"Default" => "ns1.suspended.page" 
												],
												
									'option2' =>[ 	
													"FriendlyName" => "NS 2", "Type" => "text", 
													"Default" => "ns2.suspended.page" 
												]
								]
		];
	}
}