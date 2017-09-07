<?php
/**
* HybridAuth
* http://hybridauth.sourceforge.net | http://github.com/hybridauth/hybridauth
* (c) 2009-2014, HybridAuth authors | http://hybridauth.sourceforge.net/licenses.html
*/

// ----------------------------------------------------------------------------------------
//	HybridAuth Config file: http://hybridauth.sourceforge.net/userguide/Configuration.html
// ----------------------------------------------------------------------------------------

return 
	array(
		"base_url" => "http://oauth.app/hybrid.php",

		"providers" => array (
			
			"Google" => array ( 
				"enabled" => true,
				#'redirect_uri' => 'http://oauth.my/hybrid.php',
				"keys"    => array ( "id" => "955280419454-c299lmgdcoplfrgef77g35q1d8t4nqgu.apps.googleusercontent.com", 
					"secret" => "6UPBS1-Iie7EHZKRBquXCfeZ" ),
			),
		),
	);
