<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* WHMCS API
*
* @author    Akinde Akinshola Samuel
* @version   v1.0.0
* @copyright 2017
*/


require_once "whmcs_base.php";
class Whmcs_module_commands {

	// --------------------------------------------------------------------***************
	/**
	* This command is used to attempt account setup on the server.
	*
	* Parameters:
	*
	* accountid 		- the unique id number of the account in the tblhosting table
	*
	* Optional Parameters:
	*
	* None
	*
	* See:
	*
	* https://github.com/WHMCS/developer-docs/blob/master/api-reference/modulecreate.md
	*/

	public function whmcs_module_create($params = array()) {
		$params['action'] = 'ModuleCreate';
		// return Whmcs_base::send_request($params);
    $load = new Whmcs_base();
    return $load->send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command is used to attempt account suspension on the server.
	*
	* Parameters:
	*
	* accountid 		- the unique id number of the account in the tblhosting table
	*
	* Optional Parameters:
	*
	* suspendreason 	- an explanation of why the suspension has been made shown to clients & staff
	*
	* See:
	*
	* https://github.com/WHMCS/developer-docs/blob/master/api-reference/modulesuspend.md
	*/

	public function whmcs_module_suspend($params = array()) {
		$params['action'] = 'ModuleSuspend';
		// return Whmcs_base::send_request($params);
    $load = new Whmcs_base();
    return $load->send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command is used to attempt account unsuspension on the server.
	*
	* Parameters:
	*
	* accountid 		- the unique id number of the account in the tblhosting table
	*
	* Optional Parameters:
	*
	* None
	*
	* See:
	*
	* https://github.com/WHMCS/developer-docs/blob/master/api-reference/moduleunsuspend.md
	*/

	public function whmcs_module_unsuspend($params = array()) {
		$params['action'] = 'ModuleUnsuspend';
		// return Whmcs_base::send_request($params);
    $load = new Whmcs_base();
    return $load->send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command is used to attempt account termination on the server.
	*
	* Parameters:
	*
	* accountid 		- the unique id number of the account in the tblhosting table
	*
	* Optional Parameters:
	*
	* None
	*
	* See:
	*
	* https://github.com/WHMCS/developer-docs/blob/master/api-reference/moduleterminate.md
	*/

	public function whmcs_module_terminate($params = array()) {
		$params['action'] = 'ModuleTerminate';
		// return Whmcs_base::send_request($params);
    $load = new Whmcs_base();
    return $load->send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command is used to run the change package module command
	*
	* Parameters:
	*
	* serviceid 		- ID of the service in WHMCS to run the module command
	*
	* Optional Parameters:
	*
	* None
	*
	* See:
	*
	* https://github.com/WHMCS/developer-docs/blob/master/api-reference/modulechangepackage.md
	*/

	public function whmcs_module_change_package($params = array()) {
		$params['action'] = 'ModuleChangePackage';
		// return Whmcs_base::send_request($params);
    $load = new Whmcs_base();
    return $load->send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command is used to issue the change password command to the module for a service.
	*
	* Parameters:
	*
	* serviceid 		- the unique id of the service to perform the action on (aka tblhosting.id)
	*
	* Optional Parameters:
	*
	* servicepassword 	- Specify to update the password on the service before calling
	*
	* See:
	*
	* https://github.com/WHMCS/developer-docs/blob/master/api-reference/modulechangepw.md
	*/

	public function whmcs_module_change_password($params = array()) {
		$params['action'] = 'ModuleChangePw';
		// return Whmcs_base::send_request($params);
    $load = new Whmcs_base();
    return $load->send_request($params);
	}
}
