<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* WHMCS API
*
* @author    Akinde Akinshola Samuel
* @version   v1.0.0
* @copyright 2017
*/


define('WHMCS_URL', '');
define('WHMCS_USERNAME', ''); // username
define('WHMCS_PASSWORD', ''); //password 
// define('WHMCS_PASSWORD', md5('password')); //password should be in md5

class Whmcs_base{

		function send_request($params = array()){

			if ( ! isset($params['action'])) {
	      trigger_error("No API action set");
	      exit;
	    }

	    if ( ! defined('WHMCS_USERNAME') || ! defined('WHMCS_PASSWORD') || ! defined('WHMCS_URL')) {
	      trigger_error("Must set WHMCS_USERNAME, WHMCS_PASSWORD, and WHMCS_URL constants");
	      exit;
	    }

	    $url						= WHMCS_URL;
	    $params['username'] 		= WHMCS_USERNAME;
	    $params['password'] 		= WHMCS_PASSWORD;
	    // $params['accesskey'] 		= 's9!e8@c7u6r5e'; //secrete key
			$params["responsetype"] = "json";

			$query_string = "";
			foreach ($params AS $k=>$v) {
				$query_string .= "$k=".urlencode($v)."&";
			}

			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_TIMEOUT, 30);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $query_string);
			// curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($query_string));
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
			// curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
			$jsondata = curl_exec($ch);
			if (curl_error($ch)) {
				die("Connection Error: ".curl_errno($ch).' - '.curl_error($ch));
			}
			curl_close($ch);

			return $arr = json_decode($jsondata, true); # Decode JSON String

			//print_r($arr); # Output XML Response as Array

			/*
			Debug Output - Uncomment if needed to troubleshoot problems
			echo "<textarea rows=50 cols=100>Request: ".print_r($postfields,true);
			echo "\nResponse: ".htmlentities($jsondata)."\n\nArray: ".print_r($arr,true);
			echo "</textarea>";
			*/
	}

}
