<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* WHMCS API
*
* @author    Akinde Akinshola Samuel
* @version   v1.0.0
* @copyright 2017
*/


require_once "whmcs_base.php";
class Whmcs_order_handling extends WHMCS_Base{
	/**
	*  Add a new order to the system.
	*
	*  Parameters:
	*
	* clientid - client id for order
	* pid - product id
	* domain - domain name
	* billingcycle - onetime, monthly, quarterly, semiannually, etc..
	* domaintype - set for domain registration - register or transfer
	* regperiod = 1,2,3,etc...
	* eppcode - if domain transfer
	* nameserver1 - first nameserver (req for domain reg only)
	* paymentmethod - paypal, authorize, etc..
	*
	*  Optional Parameters:
	*
	* customfields - a base64 encoded serialized array of custom field values
	* configoptions - a base64 encoded serialized array of configurable product options
	* priceoverride - allows you to pass in a custom price override for the product
	* promocode - pass coupon code to apply to the order
	* affid - affiliate ID if you want to assign the order to an affiliate
	* noinvoice - set true to not generate an invoice for this order
	* noinvoiceemail - set true to generate but not send the invoice notification email
	* noemail - set true to surpress the order confirmation email
	* clientip - can be used to pass the customers IP
	* addons - comma seperated list of addon ids For domain reg only
	*
	* For domain reg only
	*
	* contactid - the ID of a contact to use for the domain registrant details
	* dnsmanagement - true to enable
	* domainfields - a base64 encoded serialized array of the TLD specific field values
	* emailforwarding - true to enable
	* idprotection - true to enable
	* nameserver2 - second nameserver
	* nameserver3 - third nameserver
	* nameserver4 - fourth nameserver
	*
	* For domain renewals
	*
	* domainrenewals - This is a name -> value array of domain -> regperiod
	*
	* See:
    *
    * https://github.com/WHMCS/developer-docs/blob/master/api-reference/addorder.md
    */

	public function whmcs_add_order($params = array()) {
		$params['action'] = 'AddOrder';
	    // return Whmcs_base::send_request($params);
    $load = new Whmcs_base();
    return $load->send_request($params);
  }

  	//-------------------------------------------------------------

	/**
	* This command is used to generate list of orders
	*
	* Parameters:
	*
	* None
	*
	* Optional Parameters:
	*
	* id - to get a specific order ID only
	* userid - to get all orders for a specific client ID
	* status - to get all orders in a specific status: Pending, Active, Fraud, Cancelled
	* limitstart - The record number to start at (default = 0)
	* limitnum - The number of order records to return (default = 25)
	*
	* See:
	*
	* https://github.com/WHMCS/developer-docs/blob/master/api-reference/getorders.md
	*/

	public function whmcs_get_orders($params = array()) {
		$params['action'] = 'GetOrders';
		// return Whmcs_base::send_request($params);
    $load = new Whmcs_base();
    return $load->send_request($params);
	}

	//-------------------------------------------------------------

	/**
	* This command can be used to retrieve product details.
	*
	* Parameters:
	*
	* None
	*
	* Optional Parameters:
	*
	* pid - can be used to just retrieve the details of a specific product ID
	* gid - can be passed to just retrieve products in a specific group
	* module - can be passed to just retrieve products assigned to a specific module
	*
	* See:
	*
	* https://github.com/WHMCS/developer-docs/blob/master/api-reference/getproducts.md
	*/

	public function whmcs_get_products($params = array()) {
		$params['action'] = 'GetProducts';
		// return Whmcs_base::send_request($params);
    $load = new Whmcs_base();
    return $load->send_request($params);
	}

	//-------------------------------------------------------------

	/**
	* This command can be used to retrieve the details of all promotions or a specific promotion code.
	*
	* Parameters:
	*
	* None
	*
	* Optional Parameters:
	*
	* code - the specific promotion code to return information for
	*
	* See:
	*
	* https://github.com/WHMCS/developer-docs/blob/master/api-reference/getpromotions.md
	*/

	public function whmcs_get_promotions($params = array()) {
		$params['action'] = 'GetPromotions';
		// return Whmcs_base::send_request($params);
    $load = new Whmcs_base();
    return $load->send_request($params);
	}

	//-------------------------------------------------------------

	/**
	* This command is used to generate an XML list of order statuses and their counts
	*
	* Parameters:
	*
	* None
	*
	* Optional Parameters:
	*
	* none
	*
	* See:
	*
	* https://github.com/WHMCS/developer-docs/blob/master/api-reference/getorderstatuses.md
	*/

	public function whmcs_get_order_statuses($params = array()) {
		$params['action'] = 'GetOrderStatuses';
		// return Whmcs_base::send_request($params);
    $load = new Whmcs_base();
    return $load->send_request($params);
	}

	//-------------------------------------------------------------

	/**
	* This command is used to accept a pending order in the system.
	*
	* Parameters:
	*
	* orderid - the Order ID to be accepted
	*
	* Optional Parameters:
	*
	* serverid - the Server ID to provision any hosting products in the order to, overrides default
	* serviceusername - the Username to assign for provisioning, overrides default
	* servicepassword - the Password to assign for products being provisioned, overrides auto generation
	* registrar - the domain registrar module to assign any domains to
	* autosetup - true/false - determines whether product provisioning and/or domain registration is performed
	* sendemail - true/false - sets if welcome emails for products and registration confirmation emails for domains should be sent
	*
	* See:
	*
	* https://github.com/WHMCS/developer-docs/blob/master/api-reference/acceptorder.md
	*/

	public function whmcs_accept_order($params = array()) {
		$params['action'] = 'AcceptOrder';
		// return Whmcs_base::send_request($params);
    $load = new Whmcs_base();
    return $load->send_request($params);
	}

	//-------------------------------------------------------------

	/**
	* This command is used to change an order state to pending
	*
	* Parameters:
	*
	* orderid - the id from tblorders
	*
	* Optional Parameters:
	*
	* none
	*
	* See:
	*
	* https://github.com/WHMCS/developer-docs/blob/master/api-reference/pendingorder.md
	*/

	public function whmcs_pending_order($params = array()) {
		$params['action'] = 'PendingOrder';
		// return Whmcs_base::send_request($params);
    $load = new Whmcs_base();
    return $load->send_request($params);
	}

	//-------------------------------------------------------------

	/**
	* This command is used to cancel a pending order in the system.
	*
	* Parameters:
	*
	* orderid - client id for order
	*
	* Optional Parameters:
	*
	* none
	*
	* See:
	*
	* https://github.com/WHMCS/developer-docs/blob/master/api-reference/cancelorder.md
	*/

	public function whmcs_cancel_order($params = array()) {
		$params['action'] = 'CancelOrder';
		// return Whmcs_base::send_request($params);
    $load = new Whmcs_base();
    return $load->send_request($params);
	}


	//-------------------------------------------------------------

	/**
	* This command is used to set an order to the Fraud status in the system.
	*
	* Parameters:
	*
	* orderid - client id for order
	*
	* Optional Parameters:
	*
	* none
	*
	* See:
	*
	* https://github.com/WHMCS/developer-docs/blob/master/api-reference/fraudorder.md
	*/

	public function whmcs_fraud_order($params = array()) {
		$params['action'] = 'FraudOrder';
		// return Whmcs_base::send_request($params);
    $load = new Whmcs_base();
    return $load->send_request($params);
	}

	//-------------------------------------------------------------

	/**
	* This command is used to delete an order
	*
	* Parameters:
	*
	* orderid - id of the order in tblorders
	*
	* Optional Parameters:
	*
	* none
	*
	* See:
	*
	* https://github.com/WHMCS/developer-docs/blob/master/api-reference/deleteorder.md
	*/

	public function whmcs_delete_order($params = array()) {
		$params['action'] = 'DeleteOrder';
		// return Whmcs_base::send_request($params);
    $load = new Whmcs_base();
    return $load->send_request($params);
	}

}
