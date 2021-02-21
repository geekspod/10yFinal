<?php
/**
 *  ... Please MODIFY this file ...
 *
 *
 *  YOUR MYSQL DATABASE DETAILS
 *
 */

 define("DB_HOST", 	"localhost");				// hostname
 define("DB_USER", 	"root");		// database username
 define("DB_PASSWORD", 	"");		// database password
 define("DB_NAME", 	"wepro");	// database name




/**
 *  ARRAY OF ALL YOUR CRYPTOBOX PRIVATE KEYS
 *  Place values from your gourl.io signup page
 *  array("your_privatekey_for_box1", "your_privatekey_for_box2 (otional)", "etc...");
 */
 
 $cryptobox_private_keys = array('44285AACTL2sBitcoin77BTCPRVWAFeVPJc2Ba9ErVr516SnTl','44286AArD3EKBitcoincash77BCHPRVDk8Xl6hiEtNtbCKmDh4','44302AApcB3nLitecoin77LTCPRV75T7n0Lme6jn3LiEjOT8xm','44303AAFwISODash77DASHPRVgpXXcHhLFU31y40FaMZIHAO3u');




 define("CRYPTOBOX_PRIVATE_KEYS", implode("^", $cryptobox_private_keys));
 unset($cryptobox_private_keys);

?>