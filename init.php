<?php
/*
 * SUSPENDED.page
 *
 * Core class for the SUSPENDED.page addon module.
 * This class handles autoloading of classes and registration of WHMCS hooks.
 *
 * @docs        https://suspended.page/whmcs
 * @source		https://github.com/Black-HOST/suspended/blob/master/init.php
*/
	namespace SUSPENDED;

// load WHMCS Dependency Injector
	use DI;

class CORE
{
	// 
	public static function autoload ( $NAME )
	{
		// if it's not addon request skip to the next autoloader
		if ( strpos( $NAME, __NAMESPACE__ ) === false )
			return;

		// form full path to the class filename
		$_filename = strtolower( str_replace( 
												[ "/" . __NAMESPACE__ 	, 	"\\" 	], 
												[ ""					, 	"/" 	],

												__DIR__ . DIRECTORY_SEPARATOR . $NAME . ".php"
											));

		// try to load the requested class 
		if ( file_exists( $_filename ) )
			require $_filename;
	}

	// hook registration
	public static function hook ( $HOOK, $PRIORITY = 1 ) : void
	{
		DI::call( function () use ($HOOK)
		{
			add_hook( $HOOK, $PRIORITY, [DI::make( "\SUSPENDED\Hooks\\{$HOOK}" ), '__invoke'] );
		});
	}
}	

	// register the addon autoloader
	spl_autoload_register('SUSPENDED\Core::autoload');