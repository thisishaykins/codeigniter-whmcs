<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* WHMCS API
*
* @author    Akinde Akinshola Samuel
* @version   v1.0.0
* @copyright 2017
*/

require_once "whmcs_base.php";
class Whmcs_payments_billing extends WHMCS_Base{

	/**
	* This command can be used to obtain all the invoices for a particular client or in a particular status.
	*
	* Parameters:
	*
	* none
	*
	* Optional Parameters:
	*
	* userid - the client ID to retrieve invoices for
	* status - the status to filter for, Paid, Unpaid, Cancelled, etc...
	* This field can also be set to Overdue to provide overdue invoices.
	* limitstart - the offset number to start at when returning matches (default = 0)
	* limitnum - the number of records to return (default = 25)
	*
	* See:
	*
	* https://github.com/WHMCS/developer-docs/blob/master/api-reference/getinvoices.md
	*/

	public function whmcs_get_invoices($params = array()) {
		$params['action'] = 'GetInvoices';
		// return Whmcs_base::send_request($params);
    $load = new Whmcs_base();
    return $load->send_request($params);
	}

	// --------------------------------------------------------------------

	/**
	* This command is used to obtain an invoice for a client.
	*
	* Parameters:
	*
	* invoiceid - should be the invoice id you wish to retrieve
	*
	* Optional Parameters:
	*
	* none
	*
	* See:
	*
	* https://github.com/WHMCS/developer-docs/blob/master/api-reference/getinvoice.md
	*/

	public function whmcs_get_invoice($params = array()) {
		$params['action'] = 'GetInvoice';
		// return Whmcs_base::send_request($params);
    $load = new Whmcs_base();
    return $load->send_request($params);
	}

	// --------------------------------------------------------------------

	/**
	* This command is used to create a new invoice for a client.
	*
	* Parameters:
	*
	* userid - should contain the user id of the client you wish to create the invoice for
	* date - the date the invoice is created in the format YYYYMMDD
	* duedate - the date the invoice is due in the format YYYYMMDD
	* paymentmethod - the payment method for the invoice eg. banktransfer
	* itemdescription1 - item 1 description
	* itemamount1 - item 1 amount
	* itemtaxed1 - set to true if item 1 should be taxed
	*
	* Optional Parameters:
	*
	* taxrate - the rate of tax that should be charged
	* taxrate2 - the 2nd rate of tax that should be charged
	* notes - any additional notes the invoice should display to the customer
	* sendinvoice - set to true to send the "Invoice Created" email to the customer
	* autoapplycredit - pass as true to auto apply any available credit from the clients credit balance
	* itemdescription2 - item 2 description
	* itemamount2 - item 2 amount
	* itemtaxed2 - set to true if item 2 should be taxed etc... (maximum 10)
	*
	* See:
	*
	* https://github.com/WHMCS/developer-docs/blob/master/api-reference/createinvoice.md
	*/

	public function whmcs_create_invoice($params = array()) {
		$params['action'] = 'CreateInvoice';
		// return Whmcs_base::send_request($params);
    $load = new Whmcs_base();
    return $load->send_request($params);
	}

	// --------------------------------------------------------------------

	/**
	* This command is used to update an invoice in the system.
	*
	* Parameters:
	*
	* invoiceid - The ID of the invoice to update
	*
	* Optional Parameters:
	*
	* itemdescription - Array of existing line item descriptions to update. Line ID from database needed
	* itemamount and itemtaxed should be passed when updating the description
	* itemamount - Array of existing line item amounts to update
	* itemtaxed - Array of existing line items taxed or not
	* newitemdescription - Array of new line item descriptipons to add
	* newitemamount - Array of new line item amounts
	* newitemtaxed - Array of new line items taxed or not
	* date - date of invoice format yyyymmdd
	* duedate - duedate of invoice format yyyymmdd
	* datepaid - date invoice was paid format yyyymmdd
	* status - status of invoice. Unpaid, Paid, Cancelled, Collection, Refunded
	* paymentmethod - payment method of invoice eg paypal, banktransfer
	* notes - invoice notes
	*
	* See:
	*
	* https://github.com/WHMCS/developer-docs/blob/master/api-reference/updateinvoice.md
	*/

	public function whmcs_update_invoice($params = array()) {
		$params['action'] = 'UpdateInvoice';
		// return Whmcs_base::send_request($params);
    $load = new Whmcs_base();
    return $load->send_request($params);
	}

	// --------------------------------------------------------------------

	/**
	* This command is used to add a payment to an invoice.
	*
	* Parameters:
	*
	* nvoiceid - should contact the ID number of the invoice to add the payment to
	* transid - should contain the transaction number for the payment
	* gatewa*y - should contain the gateway used in system name format, eg. paypal, authorize, etc...
	*
	* Optional Parameters:
	*
	* amount - should contact the amount paid, can be left blank to take full amount of invoice
	* fees - if set defines how much fees were involved in the transaction
	* noemail - set to true to not send an email for the invoice payment
	* date - if set defines the date the payment was made Format: YYYY-MM-DD HH:mm:ss
	*
	* See:
	*
	* https://github.com/WHMCS/developer-docs/blob/master/api-reference/addinvoicepayment.md
	*/

	public function whmcs_add_invoice_payment($params = array()) {
		$params['action'] = 'AddInvoicePayment';
		// return Whmcs_base::send_request($params);
    $load = new Whmcs_base();
    return $load->send_request($params);
	}

	// --------------------------------------------------------------------

	/**
	* This command is used to attempt to capture payment when an invoice is set to a merchant gateway module
	*
	* Parameters:
	*
	* invoiceid - the ID of the invoice the capture is to be attempted for
	*
	* Optional Parameters:
	*
	* cvv - can be used to pass the cards verification value in the payment request
	*
	* See:
	*
	* https://github.com/WHMCS/developer-docs/blob/master/api-reference/capturepayment.md
	*/

	public function  whmcs_capture_payment($params = array()) {
		$params['action'] = 'CapturePayment';
		// return Whmcs_base::send_request($params);
    $load = new Whmcs_base();
    return $load->send_request($params);
	}

	// --------------------------------------------------------------------

	/**
	* This command is used to apply credit from a clients credit balance to an invoice within WHMCS.
	*
	* Parameters:
	*
	* invoiceid - the ID to apply the credit to
	* amount - the amount of credit to apply (must be less than or equal to clients available credit balance) Amount can also be passed as "full" to pay the invoice with credit (will only work when credit balance is sufficient)
	*
	* Optional Parameters:
	*
	* cvv - can be used to pass the cards verification value in the payment request
	*
	* See:
	*
	* https://github.com/WHMCS/developer-docs/blob/master/api-reference/applycredit.md
	*/

	public function  whmcs_apply_credit($params = array()) {
		$params['action'] = 'ApplyCredit';
		// return Whmcs_base::send_request($params);
    $load = new Whmcs_base();
    return $load->send_request($params);
	}

	// --------------------------------------------------------------------

	/**
	* This command is used to add a new billable item to the system.
	*
	* Parameters:
	*
	* clientid - the User ID to assign the charge to
	* description - the description to be shown to a customer when invoiced
	* hours - number of hours/quantity (not required for single quantities)
	* amount - the total amount to invoice for
	* invoiceaction - noinvoice, nextcron, nextinvoice, duedate, recur
	*
	* Optional Parameters:
	*
	* duedate - date the invoice should be due (only required for duedate & recur invoice actions)
	* recur - frequency to recur - 1,2,3,etc...
	* recurcycle - Days, Weeks, Months or Years
	* recurfor - number of times to repeat
	*
	* See:
	*
	* https://github.com/WHMCS/developer-docs/blob/master/api-reference/addbillableitem.md
	*/

	public function  whmcs_add_billable_item($params = array()) {
		$params['action'] = 'AddBillableItem';
		// return Whmcs_base::send_request($params);
    $load = new Whmcs_base();
    return $load->send_request($params);
	}

	// --------------------------------------------------------------------

	/**
	* This command is used to add credit to a client
	*
	* Parameters:
	*
	* clientid - the ID of the client the credit is to be added to
	* description - reason for credit being added (stored in admin credit log)
	* amount - the amount to be added
	*
	* Optional Parameters:
	*
	* none
	*
	* See:
	*
	* https://github.com/WHMCS/developer-docs/blob/master/api-reference/addcredit.md
	*/

	public function  whmcs_add_credit($params = array()) {
		$params['action'] = 'AddCredit';
		// return Whmcs_base::send_request($params);
    $load = new Whmcs_base();
    return $load->send_request($params);
	}

	// --------------------------------------------------------------------

	/**
	* This command is used to add a transaction.
	*
	* Parameters:
	*
	* mountin - amount to add to the account
	* amountout - if an outgoing enter this
	* paymentmethod - gateway used in WHMCS
	* date - date of transaction (same format as your WHMCS eg DD/MM/YYYY)
	*
	* Optional Parameters:
	*
	* userid - Add Transaction to a user
	* invoiceid - Add transaction to a particular invoice
	* description - Description of the transaction
	* fees - transaction fee you were charged
	* transid - Transaction ID you wish to assign
	* credit - set to true to add the transaction as credit to the client
	*
	* See:
	*
	* https://github.com/WHMCS/developer-docs/blob/master/api-reference/addtransaction.md
	*/

	public function  whmcs_add_transaction($params = array()) {
		$params['action'] = 'AddTransaction';
		// return Whmcs_base::send_request($params);
    $load = new Whmcs_base();
    return $load->send_request($params);
	}

	// --------------------------------------------------------------------

	/**
	* This command is used to obtain an XML list of transactions from your WHMCS
	*
	* Parameters:
	*
	* None
	*
	* Optional Parameters:
	*
	* clientid - User ID to obtain details for
	* invoiceid - Obtain transactions for a specific invoice
	* transid - Obtain details for a specific transaction ID
	*
	* See:
	*
	* https://github.com/WHMCS/developer-docs/blob/master/api-reference/gettransactions.md
	*/

	public function  whmcs_get_transactions($params = array()) {
		$params['action'] = 'GetTransactions';
		// return Whmcs_base::send_request($params);
    $load = new Whmcs_base();
    return $load->send_request($params);
	}

	// --------------------------------------------------------------------

	/**
	* This command is used to update a transaction.
	*
	* Parameters:
	*
	* transactionid - The Transaction ID to update. tblaccounts.id (This is not the transid from the gateway)
	*
	* Optional Parameters:
	*
	* userid - Add Transaction to a user
	* currency - Currency ID for a transaction
	* gateway - Gateway to assign transaction to
	* date - date of transaction YYYYMMDD
	* description - Description of the transaction
	* amountin - amount to add to the account
	* fees - transaction fee you were charged
	* amountout - if an outgoing enter this
	* rate - exchange rate based on master currency. Set to 1 if on default currency
	* transid - Transaction ID you wish to assign
	* invoiceid - Add transaction to a particular invoice
	* refundid - Add a refund ID if this is a refund transaction
	*
	* See:
	*
	* https://github.com/WHMCS/developer-docs/blob/master/api-reference/updatetransaction.md
	*/

	public function  whmcs_update_transaction($params = array()) {
		$params['action'] = 'UpdateTransaction';
		// return Whmcs_base::send_request($params);
    $load = new Whmcs_base();
    return $load->send_request($params);
	}

	// --------------------------------------------------------------------

	/**
	* This command is used retrieve a list of payment methods available.
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
	* https://github.com/WHMCS/developer-docs/blob/master/api-reference/getpaymentmethods.md
	*/

	public function  whmcs_get_payment_methods($params = array()) {
		$params['action'] = 'GetPaymentMethods';
		// return Whmcs_base::send_request($params);
    $load = new Whmcs_base();
    return $load->send_request($params);
	}
}
