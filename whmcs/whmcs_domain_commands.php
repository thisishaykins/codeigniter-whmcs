<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* WHMCS API
*
* @author    Akinde Akinshola Samuel
* @version   v1.0.0
* @copyright 2017
*/


require_once "whmcs_base.php";
class Whmcs_domain_commands{

	// --------------------------------------------------------------------***************
	/**
	* This command is used to retrieve Retrieve TLD (Domains) pricing
	*
	* Parameters:
	*
	* currencyid - The currency ID to fetch pricing for	(The required currency format for pricing to return and if empty would set to USD by default)
	*
	* Optional Parameters:
	*	clientid	- The id of the client to fetch pricing for. Pass one or the other. clientid being passed will override currencyid
	*
	*
	* See:
	*
	* https://github.com/WHMCS/developer-docs/blob/master/api-reference/gettldpricing.md
	*/

	public function whmcs_domain_pricing($params = array()) {
		$params['action'] = 'GetTLDPricing';
		// return Whmcs_base::send_request($params);
		$load = new Whmcs_base();
		return $load->send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command is used to send a Register command to the registrar
	*
	* Parameters:
	*
	* domainid 		- Domain ID from WHMCS
	* domain 		- The domain name (send domain id *or* domain)
	*
	* Optional Parameters:
	*
	* None
	*
	* See:
	*
	* https://github.com/WHMCS/developer-docs/blob/master/api-reference/domainregister.md
	*/

	public function whmcs_domain_register($params = array()) {
		$params['action'] = 'DomainRegister';
		// return Whmcs_base::send_request($params);
    $load = new Whmcs_base();
    return $load->send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command is used to send a Renew command to the registrar
	*
	* Parameters:
	*
	* domainid 		- Domain ID from WHMCS
	* domain 		- The domain name (send domain id *or* domain)
	*
	* Optional Parameters:
	*
	* None
	*
	* See:
	*
	* https://github.com/WHMCS/developer-docs/blob/master/api-reference/domainrenew.md
	*/

	public function whmcs_domain_renew($params = array()) {
		$params['action'] = 'DomainRenew';
		// return Whmcs_base::send_request($params);
    $load = new Whmcs_base();
    return $load->send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command is used to send a Transfer command to the registrar
	*
	* Parameters:
	*
	* domainid 		- Domain ID from WHMCS
	* domain 		- The domain name (send domain id *or* domain)
	*
	* Optional Parameters:
	*
	* eppcode 		- The EPP code for the transfer
	*
	* See:
	*
	* https://github.com/WHMCS/developer-docs/blob/master/api-reference/domaintransfer.md
	*/

	public function whmcs_domain_transfer($params = array()) {
		$params['action'] = 'DomainTransfer';
		// return Whmcs_base::send_request($params);
    $load = new Whmcs_base();
    return $load->send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command is used to send a Release command to the registrar
	*
	* Parameters:
	*
	* domainid 		- Domain ID from WHMCS
	* domain 		- The domain name (send domain id *or* domain)
	* newtag 		- The new tag for the domain (Tag List)
	*
	* Optional Parameters:
	*
	* None
	*
	* See:
	*
	* https://github.com/WHMCS/developer-docs/blob/master/api-reference/domainrelease.md
	*/

	public function whmcs_domain_release($params = array()) {
		$params['action'] = 'DomainRelease';
		// return Whmcs_base::send_request($params);
    $load = new Whmcs_base();
    return $load->send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command is used to obtain the lock state of a domain
	*
	* Parameters:
	*
	* domainid 		- ID of the domain in your WHMCS
	*
	* Optional Parameters:
	*
	* None
	*
	* See:
	*
	* https://github.com/WHMCS/developer-docs/blob/master/api-reference/domainupdatelockingstatus.md
	*/

	public function whmcs_domain_get_locking_status($params = array()) {
		$params['action'] = 'DomainUpdateLockingStatus';
		// return Whmcs_base::send_request($params);
    $load = new Whmcs_base();
    return $load->send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command is used to obtain the nameservers of a domain
	*
	* Parameters:
	*
	* domainid 		- ID of the domain in WHMCS
	*
	* Optional Parameters:
	*
	* None
	*
	* See:
	*
	* https://github.com/WHMCS/developer-docs/blob/master/api-reference/domainupdatenameservers.md
	*/

	public function whmcs_domain_get_name_servers($params = array()) {
		$params['action'] = 'DomainUpdateNameservers';
		// return Whmcs_base::send_request($params);
    $load = new Whmcs_base();
    return $load->send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command is used to obtain the WHOIS of a domain from the registrar
	*
	* Parameters:
	*
	* domainid 		- ID of the domain in WHMCS
	*
	* Optional Parameters:
	*
	* None
	*
	* See:
	*
	* https://github.com/WHMCS/developer-docs/blob/master/api-reference/domaingetwhoisinfo.md
	*/

	public function whmcs_domain_get_whois_info($params = array()) {
		$params['action'] = 'DomainGetWhoisInfo';
		// return Whmcs_base::send_request($params);
    $load = new Whmcs_base();
    return $load->send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command is used to obtain the EPP Code of a domain
	*
	* Parameters:
	*
	* domainid 		- ID of the domain in WHMCS
	*
	* Optional Parameters:
	*
	* None
	*
	* See:
	*
	* https://github.com/WHMCS/developer-docs/blob/master/api-reference/domainrequestepp.md
	*/

	public function whmcs_domain_request_epp($params = array()) {
		$params['action'] = 'DomainRequestEPP';
		// return Whmcs_base::send_request($params);
    $load = new Whmcs_base();
    return $load->send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command is used to toggle the ID Protection status of a domain assigned to certain registrars. For example all LogicBoxes modules.
	*
	* Parameters:
	*
	* domainid 		- ID of the domain in WHMCS
	* dprotect 		- true/false
	*
	* Optional Parameters:
	*
	* None
	*
	* See:
	*
	* https://github.com/WHMCS/developer-docs/blob/master/api-reference/domaintoggleidprotect.md
	*/

	public function whmcs_domain_toggle_id_protect($params = array()) {
		$params['action'] = 'DomainToggleIdProtect';
		// return Whmcs_base::send_request($params);
    $load = new Whmcs_base();
    return $load->send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command is used to update the lock state of a domain
	*
	* Parameters:
	*
	* domainid 		- ID of the domain in WHMCS
	*
	* Optional Parameters:
	*
	* lockstatus 	- set to 1 to lock the domain
	*
	* See:
	*
	* https://github.com/WHMCS/developer-docs/blob/master/api-reference/domainupdatelockingstatus.md
	*/

	public function whmcs_domain_update_locking_status($params = array()) {
		$params['action'] = 'DomainUpdateLockingStatus';
		// return Whmcs_base::send_request($params);
    $load = new Whmcs_base();
    return $load->send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command is used to update the nameservers of a domain
	*
	* Parameters:
	*
	* domainid 		- ID of the domain in WHMCS
	* domain 		- domainname to update (use domainid OR domain)
	* ns1 			- nameserver1
	* ns2 			- nameserver2
	*
	* Optional Parameters:
	*
	* ns3 			- nameserver3
	* ns4 			- nameserver4
	* ns5 			- nameserver5
	*
	* See:
	*
	* https://github.com/WHMCS/developer-docs/blob/master/api-reference/domainupdatenameservers.md
	*/

	public function whmcs_domain_update_name_servers($params = array()) {
		$params['action'] = 'DomainUpdateNameservers';
		// return Whmcs_base::send_request($params);
    $load = new Whmcs_base();
    return $load->send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command is used to update the contact information on a domain
	*
	* Parameters:
	*
	* domainid 		- ID of the domain in WHMCS
	* xml 			- xml of the details to update Get WHOIS
	*
	* Optional Parameters:
	*
	* None
	*
	* See:
	*
	* https://github.com/WHMCS/developer-docs/blob/master/api-reference/domainupdatewhoisinfo.md
	*/

	public function whmcs_domain_update_whois_info($params = array()) {
		$params['action'] = 'DomainUpdateWhoisInfo';
		// return Whmcs_base::send_request($params);
    $load = new Whmcs_base();
    return $load->send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command is used to perform a whois lookup on a specified domain.
	*
	* Parameters:
	*
	* domain 		- the domain to check
	*
	* Optional Parameters:
	*
	* None
	*
	* See:
	*
	* https://github.com/WHMCS/developer-docs/blob/master/api-reference/domainwhois.md
	*/

	public function whmcs_domain_whois($params = array()) {
		$params['action'] = 'DomainWhois';
		// return Whmcs_base::send_request($params);
    $load = new Whmcs_base();
    return $load->send_request($params);
	}
}
