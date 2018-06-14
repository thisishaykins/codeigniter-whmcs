<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* WHMCS API
*
* @author    Akinde Akinshola Samuel
* @version   v1.0.0
* @copyright 2017
*/


require_once "whmcs_base.php";

class Whmcs_client{

	/**
	* Create a new client
	*
	*  Parameters:
	*
	* firstname
	* lastname
	* email
	* address1
	* city
	* state
	* postcode
	* country - two letter ISO country code
	* phonenumber
	* password2 - password for the new user account
	*
	*  Optional Parameters::
	*
	* companyname - optional
	* address2 - optional
	* currency - the ID of the currency to set the user to
	* clientip - Pass the client IP address
	* language - the language to assign to the client
	* groupid - used to assign the client to a client group
	* securityqid - the ID of the security question for the user
	* securityqans - the answer to the client security question
	* notes
	* cctype - Visa, Mastercard, etc...
	* cardnum
	* expdate - in the format MMYY
	* startdate
	* issuenumber
	* customfields - a base64 encoded serialized array of custom field values
	* noemail - pass as true to surpress the client signup welcome email sending
	* skipvalidation - set true to not validate or check required fields
	*
	* See:
    *
    * https://github.com/WHMCS/developer-docs/blob/master/api-reference/addclient.md
    */

	public function whmcs_add_client($params = array()) {
	    $params['action'] = 'AddClient';
			// return Whmcs_base::send_request($params);
			$load = new Whmcs_base();
	    return $load->send_request($params);
  	}

  	//-------------------------------------------------------------

  	/**
  	* Update a client's info
  	*
   	* Parameters:
    *
    * clientid - Client you wish to update
    *
	* Optional Parameters::
	*
	* firstname
	* lastname
	* companyname
	* email
	* address1
	* address2
	* city
	* state
	* postcode
	* country - two letter ISO country code
	* phonenumber
	* password2
	* credit - credit balance
	* axexempt - true to enable
	* notes
	* cardtype - visa, mastercard, etc...
	* cardnum - cc number
	* expdate - cc expiry date
	* startdate - cc start date
	* issuenumber - cc issue number
	* language - default language
	* customfields - a base64 encoded serialized array of custom field values
	* status - active or inactive
	* taxexempt - true/false
	* latefeeoveride - true/false
	* overideduenotices - true/false
	* separateinvoices - true/false
	* disableautocc - true/false
  	*
	* See:
    *
    * https://github.com/WHMCS/developer-docs/blob/master/api-reference/updateclient.md
    */

  	public function whmcs_update_client($params = array()) {
	    $params['action'] = 'UpdateClient';
			// return Whmcs_base::send_request($params);
			$load = new Whmcs_base();
	    return $load->send_request($params);
  	}

	//-------------------------------------------------------------

  	/**
  	* delete a client
  	*
   	* Parameters:
    *
    * clientid - ID Number of the client to delete
    *
	* see
	*
    * https://github.com/WHMCS/developer-docs/blob/master/api-reference/deleteclient.md
    */

  	public function whmcs_delete_client($params = array()) {
	    $params['action'] = 'DeleteClient';
			// return Whmcs_base::send_request($params);
			$load = new Whmcs_base();
	    return $load->send_request($params);
  	}

	//-------------------------------------------------------------

	/**
  	* Close a client account. This will terminate all products and cancel all due invoices.
  	*
   	* Parameters:
    *
    * clientid - ID Number of the client to close
    *
	* see
	*
    * https://github.com/WHMCS/developer-docs/blob/master/api-reference/closeclient.md
    */

  	public function whmcs_close_client($params = array()) {
	    $params['action'] = 'CloseClient';
	    // return Whmcs_base::send_request($params);
			$load = new Whmcs_base();
	    return $load->send_request($params);
  	}

  	//-------------------------------------------------------------

	/**
  	* add the Client Note to a specific Client
  	*
   	* Parameters:
    *
    * userid - UserID for the note
    * notes - The note to add
    *
	* see
	*
    * https://github.com/WHMCS/developer-docs/blob/master/api-reference/addclientnote.md
    */

  	public function whmcs_add_client_note($params = array()) {
	    $params['action'] = 'AddClientNote';
	    // return Whmcs_base::send_request($params);
			$load = new Whmcs_base();
	    return $load->send_request($params);
  	}

  	//-------------------------------------------------------------

	/**
  	* Get multiple clients
  	*
   	* Parameters:
    *
    * limitstart - Record to start at (default = 0)
	* limitnum - Number of records to return (default = 25)
	* search - Can be passed to filter for clients with a name/email matching the term entered
    *
	* see
	*
    * https://github.com/WHMCS/developer-docs/blob/master/api-reference/getclients.md
    */

  	public function whmcs_get_clients($params = array()) {
	    $params['action'] = 'GetClients';
	    // return Whmcs_base::send_request($params);
			$load = new Whmcs_base();
	    return $load->send_request($params);
  	}


  	// --------------------------------------------------------------------

	/**
	* Get a client's info
	*
	* Parameters:
	*
	* clientid - the id number of the client
	* email - the email address of the client
	*
	* Optional Parameters:
	*
	* stats - true - If the responsetype of your API call is not XML, stats are not returned unless this variable is passed
	*
	* See:
	*
	* https://github.com/WHMCS/developer-docs/blob/master/api-reference/getclientsdetails.md
	*/

	public function whmcs_get_clients_details($params = array()) {
		$params['action'] = 'GetClientsDetails';
		// return Whmcs_base::send_request($params);
		$load = new Whmcs_base();
		return $load->send_request($params);
	}

	// --------------------------------------------------------------------

	/**
	* Get a list of the client credits
	*
	* Parameters:
	*
	* clientid - ID of the client to obtain the credit list for
	*
	* See:
	*
	* https://github.com/WHMCS/developer-docs/blob/master/api-reference/getcredits.md
	*/

	public function whmcs_get_credits($params = array()) {
		$params['action'] = 'GetCredits';
		// return Whmcs_base::send_request($params);
		$load = new Whmcs_base();
		return $load->send_request($params);
	}

	// --------------------------------------------------------------------

	/**
	* Get  a list of the client emails
	*
	* Parameters:
	*
	* clientid - ID of the client to obtain the credit list for
	*
	* Optional Parameters:
	*
	* date - date to obtain emails for. Can be YYYYMMDD, YYYYMM, MMDD, DD or MM
	* subject - to obtain email with a specific subject
	* limitstart - for pagination, specify an ID to start at (default = 0)
	* limitnum - to restrict the number of results returned (default = 25)
	*
	* See:
	*
	* https://github.com/WHMCS/developer-docs/blob/master/api-reference/getemails.md
	*/

	public function whmcs_get_emails($params = array()) {
		$params['action'] = 'GetEmails';
		// return Whmcs_base::send_request($params);
		$load = new Whmcs_base();
		return $load->send_request($params);
	}

	// --------------------------------------------------------------------

	/**
	* Get a list of quotes
	*
	* Parameters:
	*
	* none
	*
	* Optional Parameters:
	*
	* quoteid - specific quote to obtain
	* userid - obtain quotes for a specific user
	* datecreated - Format YYYYMMDD
	* astmodified - Format YYYYMMDD
	* validuntil - Format YYYYMMDD
	* stage - Specific stage to retrieve quotes for
	* subject - to obtain quotes with a specific subject
	* limitstart - for pagination, specify an ID to start at
	* limitnum - to restrict the number of results returned
	*
	* See:
	*
	* https://github.com/WHMCS/developer-docs/blob/master/api-reference/getquotes.md
	*/

	public function whmcs_get_quotes($params = array()) {
		$params['action'] = 'GetQuotes';
		// return Whmcs_base::send_request($params);
		$load = new Whmcs_base();
		return $load->send_request($params);
	}

	// --------------------------------------------------------------------
	/**
	* Get a retrieve the clients password in MD5 hash format
	*
	* Parameters:
	*
	* userid - should contain the user id of the client you wish to get the password for
	*
	* Optional Parameters:
	*
	* email - send email address instead of userid
	*
	* See:
	*
	* https://github.com/WHMCS/developer-docs/blob/master/api-reference/getclientpassword.md
	*/

	public function whmcs_get_clients_password($params = array()) {
		$params['action'] = 'GetClientPassword';
		// return Whmcs_base::send_request($params);
		$load = new Whmcs_base();
		return $load->send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command is used to obtain list of transactions
	*
	* Parameters:
	*
	* None
	*
	* Optional Parameters:
	*
	* clientid 		- User ID to obtain details for
	* invoiceid 	- Obtain transactions for a specific invoice
	* transid 		- Obtain details for a specific transaction ID
	*
	* See:
	*
	* https://github.com/WHMCS/developer-docs/blob/master/api-reference/gettransactions.md
	*/

	public function whmcs_get_transactions($params = array()) {
		$params['action'] = 'GetTransactions';
		// return Whmcs_base::send_request($params);
		$load = new Whmcs_base();
		return $load->send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command is used to create a new contact under a client.
	*
	* Parameters:
	*
	* clientid 		- the client ID to add the contact to
	*
	* Optional Parameters:
	*
	* firstname
	* lastname
	* companyname*
	* email 		- must be unique if creating a sub-account
	* address1
	* address2
	* city
	* state
	* postcode
	* country 		- two letter ISO country code
	* phonenumber
	* password2 	- if creating a sub-account
	* permissions 	- can specify sub-account permissions eg manageproducts,managedomains
	* generalemails - set true to receive general email types
	* productemails - set true to receive product related emails
	* domainemails 	- set true to receive domain related emails
	* invoiceemails - set true to receive billing related emails
	* supportemails - set true to receive support ticket related emails
	*
	* See:
	*
	* https://github.com/WHMCS/developer-docs/blob/master/api-reference/addcontact.md
	*/

	public function whmcs_add_contact($params = array()) {
		$params['action'] = 'AddContact';
		// return Whmcs_base::send_request($params);
		$load = new Whmcs_base();
		return $load->send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command is used to retrieve contact details. Searches can be run with one or more of any of the below attributes.
	*
	* Parameters:
	*
	* None
	*
	* Optional Parameters:
	*
	* limitstart 	- Record to start at (default = 0)
	* limitnum 		- Number of records to return (default = 25)
	* userid
	* firstname
	* lastname
	* companyname
	* email
	* address1
	* address2
	* city
	* state
	* postcode
	* country
	* phonenumber
	* subaccount 	- true/false
	*
	* See:
	*
	* https://github.com/WHMCS/developer-docs/blob/master/api-reference/getcontacts.md
	*/

	public function whmcs_get_contacts($params = array()) {
		$params['action'] = 'GetContacts';
		// return Whmcs_base::send_request($params);
		$load = new Whmcs_base();
		return $load->send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command is used to update a contact in the system.
	*
	* Parameters:
	*
	* contactid 	- The ID of the contact to delete
	*
	* Optional Parameters:
	*
	* generalemails - set to true to receive general emails
	* productemails - set to true to receive product emails
	* domainemails 	- set to true to receive domain emails
	* invoiceemails - set to true to receive invoice emails
	* supportemails - set to true to receive support emails
	* firstname 	- change the firstname
	* lastname 		- change the lastname
	* companyname 	- change the companyname
	* email 		- change the email address
	* address1 		- change address1
	* address2 		- change address2
	* city 			- change city
	* state 		- change state
	* postcode 		- change postcode
	* country 		- change country
	* phonenumber 	- change phonenumber
	* subaccount 	- enable subaccount
	* password2 	- change the password
	* permissions 	- set permissions eg manageproducts,managedomains
	*
	* See:
	*
	* https://github.com/WHMCS/developer-docs/blob/master/api-reference/updateclient.md
	*/

	public function whmcs_update_contact($params = array()) {
		$params['action'] = 'UpdateContact';
		// return Whmcs_base::send_request($params);
		$load = new Whmcs_base();
		return $load->send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command is used to delete a contact in the system.
	*
	* Parameters:
	*
	* contactid 	- The ID of the contact to delete
	*
	* Optional Parameters:
	*
	* None
	*
	* See:
	*
	* https://github.com/WHMCS/developer-docs/blob/master/api-reference/deleteclient.md
	*/

	public function whmcs_delete_contact($params = array()) {
		$params['action'] = 'DeleteContact';
		// return Whmcs_base::send_request($params);
		$load = new Whmcs_base();
		return $load->send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command is used to get the details of all the products/services a client has
	*
	* Parameters:
	*
	* None
	*
	* Optional Parameters:
	*
	* clientid 		- the ID of the client to retrieve products for
	* serviceid 	- the ID of the service to retrieve details for
	* domain 		- the domain of the service to retrieve details for
	* pid 			- the product ID of the services to retrieve products for
	* username2 	- the service username to retrieve details for
	* limitstart 	- where to start the records. Used for pagination
	* limitnum 		- the number of records to retrieve. Default = 999999
	*
	* See:
	*
	* https://github.com/WHMCS/developer-docs/blob/master/api-reference/updateclientproduct.md
	*/

	public function whmcs_get_clients_products($params = array()) {
		$params['action'] = 'GetClientsProducts';
		// return Whmcs_base::send_request($params);
		$load = new Whmcs_base();
		return $load->send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command can be used to make changes to a clients product/service. All of the attributes are optional except for serviceid so you should just pass what you want to change.
	*
	* Parameters:
	*
	* serviceid 	- the ID of the service to be updated
	*
	* Optional Parameters:
	*
	* pid
	* serverid
	* regdate 		- Format: YYYY-MM-DD
	* nextduedate 	- Format: YYYY-MM-DD
	* domain
	* firstpaymentamount
	* recurringamount
	* billingcycle
	* paymentmethod
	* status
	* serviceusername
	* servicepassword
	* subscriptionid
	* promoid
	* overideautosuspend 	- on/off
	* overidesuspenduntil 	- Format: YYYY-MM-DD
	* ns1
	* ns2
	* dedicatedip
	* assignedips
	* notes
	* autorecalc 			- pass true to auto set price based on product ID or billing cycle change
	* customfields 			- a base64 encoded serialized array of custom field values
	*
	* See:
	*
	* https://github.com/WHMCS/developer-docs/blob/master/api-reference/updateclientproduct.md
	*/

	public function whmcs_update_client_product($params = array()) {
		$params['action'] = 'UpdateClientProduct';
		// return Whmcs_base::send_request($params);
		$load = new Whmcs_base();
		return $load->send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command is used to obtain the addons associated with a client
	*
	* Parameters:
	*
	* None
	*
	* Optional Parameters:
	*
	* clientid 		- The Client ID you wish to obtain the results for
	* addonid 		- The specific addonid you wish to find
	* serviceid 	- The specific, or comma separated list of, service(s)
	*
	* See:
	*
	* https://github.com/WHMCS/developer-docs/blob/master/api-reference/updateclientaddon.md
	*/

	public function whmcs_get_clients_addons($params = array()) {
		$params['action'] = 'UpdateClientAddons';
		// return Whmcs_base::send_request($params);
		$load = new Whmcs_base();
		return $load->send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command is used to update a Client Addon
	*
	* Parameters:
	*
	* id 			- ID of addon to update tblhostingaddons.id
	*
	* Optional Parameters:
	*
	* addonid 		- Update the defined addon id - tbladdons.id
	* name 			- Custom name to define for the addon
	* setupfee 		- Setup fee cost. No symbol, just xx.xx
	* recurring 	- Setup fee cost. No symbol, just xx.xx
	* billingcycle 	- One of Free Account, One Time, Monthly, Quarterly, Semi-Annually, Annually, Biennially or Triennially
	* nextduedate 	- Update the next due date yyyymmdd
	* nextinvoicedate - Update the next invoice date yyyymmdd
	* notes 		- add custom notes to the addon
	* status 		- Pending, Active, Suspended, Cancelled, Terminated, Fraud
	*
	* See:
	*
	* https://github.com/WHMCS/developer-docs/blob/master/api-reference/updateclientaddon.md
	*/

	public function whmcs_update_client_addon($params = array()) {
		$params['action'] = 'UpdateClientAddon';
		// return Whmcs_base::send_request($params);
		$load = new Whmcs_base();
		return $load->send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command is used to get the details of all the domains a client has
	*
	* Parameters:
	*
	* None
	*
	* Optional Parameters:
	*
	* clientid 		- the ID of the client to retrieve products for
	* domainid 		- the ID of the domain to retrieve details for
	* domain 		- the domain of the service to retrieve details for
	* limitstart 	- where to start the records. Used for pagination
	* limitnum 		- the number of records to retrieve. Default = 25
	* getnameservers - retrieve nameservers in the response
	*
	* See:
	*
	* https://github.com/WHMCS/developer-docs/blob/master/api-reference/updateclientdomain.md
	*/

	public function whmcs_get_clients_domains($params = array()) {
		$params['action'] = 'GetClientsDomains';
		// return Whmcs_base::send_request($params);
		$load = new Whmcs_base();
		return $load->send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command is used to update a client domain
	*
	* Parameters:
	*
	* domainid 		- ID of domain to update tbldomains.id
	* domain 		- instead of domainid
	*
	* Optional Parameters:
	*
	* type 			- Register or Transfer
	* autorecalc 	- automatically recalculate the recurring price. Will override recurringamount
	* regdate 		- Update the reg date yyyymmdd
	* domain 		- Update the domain name
	* firstpaymentamount - Set the first payment amount. No symbol, just xx.xx
	* recurringamount - Setup fee cost. No symbol, just xx.xx
	* registrar 	- Update the registrar assigned to the domain
	* billingcycle 	- One of Free Account, One Time, Monthly, Quarterly, Semi-Annually, Annually, Biennially or Triennially
	* status 		- One of Active, Pending, Pending Transfer, Expired, Cancelled, Fraud
	* nextduedate 	- Update the next due date yyyymmdd
	* nextinvoicedate - Update the next invoice date yyyymmdd
	* expirydate 	- Update the expiry date yyyymmdd
	* regperiod 	- Update the reg period for the domain. 1-10
	* paymentmethod - set the payment method
	* subscriptionid - allocate a subscription ID
	* dnsmanagement - enable/disable DNS Management
	* emailforwarding - enable/disable Email Forwarding
	* idprotection 	- enable/disable ID Protection status
	* donotrenew 	- enable/disable Do Not Renew
	* updatens 		- Set to true to update Nameservers
	* nsX 			- X should be 1-5, nameservers to send. Minimum 1&2 required
	* notes 		- add custom notes to the addon
	*
	* See:
	*
	* https://github.com/WHMCS/developer-docs/blob/master/api-reference/updateclientdomain.md
	*/

	public function whmcs_update_client_domain($params = array()) {
		$params['action'] = 'UpdateClientDomain';
		// return Whmcs_base::send_request($params);
		$load = new Whmcs_base();
		return $load->send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command is used to Add Cancellation Request for a specific product
	*
	* Parameters:
	*
	* serviceid 	- Service ID to be cancelled
	* type 			- 'Immediate' OR 'End of Billing Period'
	*
	* Optional Parameters:
	*
	* reason - Reason for cancel
	*
	* See:
	*
	* https://github.com/WHMCS/developer-docs/blob/master/api-reference/addcancelrequest.md
	*/

	public function whmcs_add_cancel_request($params = array()) {
		$params['action'] = 'AddCancelRequest';
		// return Whmcs_base::send_request($params);
		$load = new Whmcs_base();
		return $load->send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command allows you to calculate the cost for an upgrade or downgrade of a product/service, and create an order for it.
	*
	* Parameters:
	*
	* clientid 		- the client ID to be upgraded
	* serviceid 	- the service ID to be upgraded
	* type 			- either "product" or "configoptions"
	* newproductid 	- if upgrade type = product, the new product ID to upgrade to
	* newproductbillingcycle - monthly, quarterly, etc...
	* configoptions[x] - if upgrade type = configoptions, an array of config options
	* paymentmethod - the payment method for the order (paypal, authorize, etc...)
	*
	* Optional Parameters:
	*
	* promocode 	- associate a promotion code with the upgrade
	* calconly 		- set true to just validate upgrade and get price, false to actually create order
	* ordernotes 	- any admin notes to add to the order (optional)
	*
	* See:
	*
	* https://github.com/WHMCS/developer-docs/blob/master/api-reference/upgradeproduct.md
	*/

	public function whmcs_upgrade_product($params = array()) {
		$params['action'] = 'UpgradeProduct';
		// return Whmcs_base::send_request($params);
		$load = new Whmcs_base();
		return $load->send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command can be used to validate an email address and password against a registered user in WHMCS. If a match is found, it will return successful with the userid and password hash which can then be used to set the $_SESSION['uid'] and $_SESSION['upw'] values respectively in the users session to auto log the user in to WHMCS.
	*
	* Parameters:
	*
	* email 			- the email address of the user trying to login
	* password2 	- the password they supply for authentication
	*
	* Optional Parameters:
	*
	* None
	*
	* See:
	*
	* https://github.com/WHMCS/developer-docs/blob/master/api-reference/validatelogin.md
	*/

	public function whmcs_validate_login($params = array()) {
		$params['action'] = 'ValidateLogin';
		// return Whmcs_base::send_request($params);
		$load = new Whmcs_base();
		return $load->send_request($params);
	}

	// --------------------------------------------------------------------***************
	/**
	* This command is used to send an email to a customer.
	* The id you pass depends on what you want to send. For example if you are requesting the system to send a product related email template, you need to pass the Service ID it should relate to in the id field, while if you are requesting an invoice related email template to be sent, you would pass the Invoice ID, etc...
	*
	* Parameters:
	*
	* messagename 	- unique name of the email template to send from WHMCS
	* id 						- related ID number to send message for (for a general email type a client ID, for a product email type the products Service ID, etc...)
	*
	* Optional Parameters:
	*
	* customtype 			- The type of email: general, product, domain or invoice
	* customsubject 	- Subject for the custom email being sent
	* custommessage 	- Content to send as an email, this will override 'messagename' if set
	* customvars 			- serialized base64 encoded array of custom variables
	*
	* See:
	*
	* https://github.com/WHMCS/developer-docs/blob/master/api-reference/sendemail.md
	*/

	public function whmcs_send_email($params = array()) {
		$params['action'] = 'SendEmail';
		// return Whmcs_base::send_request($params);
		$load = new Whmcs_base();
		return $load->send_request($params);
	}
}
