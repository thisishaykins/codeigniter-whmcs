<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* WHMCS API
*
* @author    Akinde Akinshola Samuel
* @version   v1.0.0
* @copyright 2017
*/

class Whmcs{

	function __construct(){
		$dir = APPPATH.'libraries';
		require_once "{$dir}/whmcs/whmcs_base.php";
		require_once "{$dir}/whmcs/whmcs_client.php";
		require_once "{$dir}/whmcs/whmcs_domain_commands.php";
		require_once "{$dir}/whmcs/whmcs_miscellaneous.php";
		require_once "{$dir}/whmcs/whmcs_module_commands.php";
		require_once "{$dir}/whmcs/whmcs_order_handling.php";
		require_once "{$dir}/whmcs/whmcs_payments_billing.php";
		require_once "{$dir}/whmcs/whmcs_quotes.php";
		require_once "{$dir}/whmcs/whmcs_support.php";
	}

	/** Client Management **/

	function add_client($params){
		// return whmcs_client::whmcs_add_client($params);
		$load = new Whmcs_client();
		return $load->whmcs_add_client($params);
	}

	function update_client($params){
		// return whmcs_client::whmcs_update_client($params);
		$load = new Whmcs_client();
		return $load->whmcs_update_client($params);
	}

	function delete_client($params){
		// return whmcs_client::whmcs_delete_client($params);
		$load = new Whmcs_client();
		return $load->whmcs_delete_client($params);
	}

	function close_client($params){
		// return whmcs_client::whmcs_close_client($params);
		$load = new Whmcs_client();
		return $load->whmcs_close_client($params);
	}

	function add_client_note($params){
		// return whmcs_client::whmcs_add_client_note($params);
		$load = new Whmcs_client();
		return $load->whmcs_add_client_note($params);
	}

	function get_clients($params){
		// return whmcs_client::whmcs_get_clients($params);
		$load = new Whmcs_client();
		return $load->whmcs_get_clients($params);
	}

	function get_clients_details($params){
		// return whmcs_client::whmcs_get_clients_details($params);
		$load = new Whmcs_client();
		return $load->whmcs_get_clients_details($params);
	}

	function get_credits($params){
		// return whmcs_client::whmcs_get_credits($params);
		$load = new Whmcs_client();
		return $load->whmcs_get_credits($params);
	}

	function get_emails($params){
		// return whmcs_client::whmcs_get_emails($params);
		$load = new Whmcs_client();
		return $load->whmcs_get_emails($params);
	}

	function get_quotes_client($params){
		// return whmcs_client::whmcs_get_quotes($params);
		$load = new Whmcs_client();
		return $load->whmcs_get_quotes($params);
	}

	function get_clients_password($params){
		// return whmcs_client::whmcs_get_clients_password($params);
		$load = new Whmcs_client();
		return $load->whmcs_get_clients_password($params);
	}

	function get_transactions_client($params){
		// return whmcs_client::whmcs_get_transactions($params);
		$load = new Whmcs_client();
		return $load->whmcs_get_transactions($params);
	}

	function add_contact($params){
		// return whmcs_client::whmcs_add_contact($params);
		$load = new Whmcs_client();
		return $load->whmcs_add_contact($params);
	}

	function get_contacts($params){
		// return whmcs_client::whmcs_get_contacts($params);
		$load = new Whmcs_client();
		return $load->whmcs_get_contacts($params);
	}

	function update_contact($params){
		// return whmcs_client::whmcs_update_contact($params);
		$load = new Whmcs_client();
		return $load->whmcs_update_contact($params);
	}

	function delete_contact($params){
		// return whmcs_client::whmcs_delete_contact($params);
		$load = new Whmcs_client();
		return $load->whmcs_delete_contact($params);
	}

	function get_clients_products($params){
		// return whmcs_client::whmcs_get_clients_products($params);
		$load = new Whmcs_client();
		return $load->whmcs_get_clients_products($params);
	}

	function update_client_product($params){
		// return whmcs_client::whmcs_update_client_product($params);
		$load = new Whmcs_client();
		return $load->whmcs_update_client_product($params);
	}

	function get_clients_addons($params){
		// return whmcs_client::whmcs_get_clients_addons($params);
		$load = new Whmcs_client();
		return $load->whmcs_get_clients_addons($params);
	}

	function update_client_addon($params){
		// return whmcs_client::whmcs_update_client_addon($params);
		$load = new Whmcs_client();
		return $load->whmcs_update_client_addon($params);
	}

	function get_clients_domains($params){
		// return whmcs_client::whmcs_get_clients_domains($params);
		$load = new Whmcs_client();
		return $load->whmcs_get_clients_domains($params);
	}

	function update_client_domain($params){
		// return whmcs_client::whmcs_update_client_domain($params);
		$load = new Whmcs_client();
		return $load->whmcs_update_client_domain($params);
	}

	function add_cancel_request($params){
		// return whmcs_client::whmcs_add_cancel_request($params);
		$load = new Whmcs_client();
		return $load->whmcs_add_cancel_request($params);
	}

	function upgrade_product($params){
		// return whmcs_client::whmcs_upgrade_product($params);
		$load = new Whmcs_client();
		return $load->whmcs_upgrade_product($params);
	}

	function validate_login($params){
		// return whmcs_client::whmcs_validate_login($params);
		$load = new Whmcs_client();
		return $load->whmcs_validate_login($params);
	}

	function send_email($params){
		// return Whmcs_client::whmcs_send_email($params);
		$load = new Whmcs_client();
		return $load->whmcs_send_email($params);
	}



	/** Domain Commands **/

	function domain_pricing($params)
	{
		// return Whmcs_domain_commands::whmcs_domain_register($params);
		$load = new Whmcs_domain_commands();
		return $load->whmcs_domain_pricing($params);
	}

	function domain_register($params){
		// return Whmcs_domain_commands::whmcs_domain_register($params);
		$load = new Whmcs_domain_commands();
		return $load->whmcs_domain_register($params);
	}

	function domain_renew($params){
		// return Whmcs_domain_commands::whmcs_domain_renew($params);
		$load = new Whmcs_domain_commands();
		return $load->whmcs_domain_renew($params);
	}

	function domain_transfer($params){
		// return Whmcs_domain_commands::whmcs_domain_transfer($params);
		$load = new Whmcs_domain_commands();
		return $load->whmcs_domain_transfer($params);
	}

	function domain_release($params){
		// return Whmcs_domain_commands::whmcs_domain_release($params);
		$load = new Whmcs_domain_commands();
		return $load->whmcs_domain_release($params);
	}

	function domain_get_locking_status($params){
		// return Whmcs_domain_commands::whmcs_domain_get_locking_status($params);
		$load = new Whmcs_domain_commands();
		return $load->whmcs_domain_get_locking_status($params);
	}

	function domain_get_name_servers($params){
		// return Whmcs_domain_commands::whmcs_domain_get_name_servers($params);
		$load = new Whmcs_domain_commands();
		return $load->whmcs_domain_get_name_servers($params);
	}

	function domain_get_whois_info($params){
		// return Whmcs_domain_commands::whmcs_domain_get_whois_info($params);
		$load = new Whmcs_domain_commands();
		return $load->whmcs_domain_get_whois_info($params);
	}

	function domain_request_epp($params){
		// return Whmcs_domain_commands::whmcs_domain_request_epp($params);
		$load = new Whmcs_domain_commands();
		return $load->whmcs_domain_request_epp($params);
	}

	function domain_toggle_id_protect($params){
		// return Whmcs_domain_commands::whmcs_domain_toggle_id_protect($params);
		$load = new Whmcs_domain_commands();
		return $load->whmcs_domain_toggle_id_protect($params);
	}

	function domain_update_locking_status($params){
		// return Whmcs_domain_commands::whmcs_domain_register($params);
		$load = new Whmcs_domain_commands();
		return $load->whmcs_domain_register($params);
	}

	function domain_update_name_servers($params){
		// return Whmcs_domain_commands::whmcs_domain_update_name_servers($params);
		$load = new Whmcs_domain_commands();
		return $load->whmcs_domain_update_name_servers($params);
	}

	function domain_update_whois_info($params){
		// return Whmcs_domain_commands::whmcs_domain_update_whois_info($params);
		$load = new Whmcs_domain_commands();
		return $load->whmcs_domain_update_whois_info($params);
	}

	function domain_whois($params){
		// return Whmcs_domain_commands::whmcs_domain_whois($params);
		$load = new Whmcs_domain_commands();
		return $load->whmcs_domain_whois($params);
	}



	/** Miscellaneous **/

	function get_activity_log($params){
		// return Whmcs_miscellaneous::whmcs_get_activity_log($params);
		$load = new Whmcs_miscellaneous();
		return $load->whmcs_get_activity_log($params);
	}

	function get_admin_details($params){
		// return Whmcs_miscellaneous::whmcs_get_admin_details($params);
		$load = new Whmcs_miscellaneous();
		return $load->whmcs_get_admin_details($params);
	}

	function update_admin_notes($params){
		// return Whmcs_miscellaneous::whmcs_update_admin_notes($params);
		$load = new Whmcs_miscellaneous();
		return $load->whmcs_update_admin_notes($params);
	}

	function get_currencies($params = ''){
		// return Whmcs_miscellaneous::whmcs_get_currencies($params);
		$load = new Whmcs_miscellaneous();
		return $load->whmcs_get_currencies($params);
	}

	function get_promotions($params){
		// return Whmcs_miscellaneous::whmcs_get_promotions($params);
		$load = new Whmcs_miscellaneous();
		return $load->whmcs_get_promotions($params);
	}

	function get_client_groups($params){
		// return Whmcs_miscellaneous::whmcs_get_client_groups($params);
		$load = new Whmcs_miscellaneous();
		return $load->whmcs_get_client_groups($params);
	}

	function get_email_templates($params){
		// return Whmcs_miscellaneous::whmcs_get_email_templates($params);
		$load = new Whmcs_miscellaneous();
		return $load->whmcs_get_email_templates($params);
	}

	function get_todo_items($params){
		// return Whmcs_miscellaneous::whmcs_get_todo_items($params);
		$load = new Whmcs_miscellaneous();
		return $load->whmcs_get_todo_items($params);
	}

	function get_todo_item_statuses($params){
		// return Whmcs_miscellaneous::whmcs_get_todo_item_statuses($params);
		$load = new Whmcs_miscellaneous();
		return $load->whmcs_get_todo_item_statuses($params);
	}

	function update_todo_item($params){
		// return Whmcs_miscellaneous::whmcs_update_todo_item($params);
		$load = new Whmcs_miscellaneous();
		return $load->whmcs_update_todo_item($params);
	}

	function get_staff_online($params){
		// return Whmcs_miscellaneous::whmcs_get_staff_online($params);
		$load = new Whmcs_miscellaneous();
		return $load->whmcs_get_staff_online($params);
	}

	function get_stats($params){
		// return Whmcs_miscellaneous::whmcs_get_stats($params);
		$load = new Whmcs_miscellaneous();
		return $load->whmcs_get_stats($params);
	}

	function encrypt_password($params){
		// return Whmcs_miscellaneous::whmcs_encrypt_password($params);
		$load = new Whmcs_miscellaneous();
		return $load->whmcs_encrypt_password($params);
	}

	function decrypt_password($params){
		// return Whmcs_miscellaneous::whmcs_decrypt_password($params);
		$load = new Whmcs_miscellaneous();
		return $load->whmcs_decrypt_password($params);
	}

	function add_banned_ip($params){
		// return Whmcs_miscellaneous::whmcs_add_banned_ip($params);
		$load = new Whmcs_miscellaneous();
		return $load->whmcs_add_banned_ip($params);
	}

	function add_product($params){
		// return Whmcs_miscellaneous::whmcs_add_product($params);
		$load = new Whmcs_miscellaneous();
		return $load->whmcs_add_product($params);
	}

	function log_activity($params){
		// return Whmcs_miscellaneous::whmcs_log_activity($params);
		$load = new Whmcs_miscellaneous();
		return $load->whmcs_log_activity($params);
	}

	function send_admin_email($params){
		// return Whmcs_miscellaneous::whmcs_send_admin_email($params);
		$load = new Whmcs_miscellaneous();
		return $load->whmcs_send_admin_email($params);
	}




	/** Module Commands **/

	function module_create($params){
		// return Whmcs_module_commands::whmcs_module_create($params);
		$load = new Whmcs_module_commands();
		return $load->whmcs_module_create($params);
	}

	function module_suspend($params){
		// return Whmcs_module_commands::whmcs_module_suspend($params);
		$load = new Whmcs_module_commands();
		return $load->whmcs_module_suspend($params);
	}

  function module_unsuspend($params){
		// return Whmcs_module_commands::whmcs_module_unsuspend($params);
		$load = new Whmcs_module_commands();
		return $load->whmcs_module_unsuspend($params);
	}


  function module_terminate($params){
		// return Whmcs_module_commands::whmcs_module_terminate($params);
		$load = new Whmcs_module_commands();
		return $load->whmcs_module_terminate($params);
	}

	function module_change_package($params){
 		// 	return Whmcs_module_commands::whmcs_module_change_package($params);
		$load = new Whmcs_module_commands();
		return $load->whmcs_module_change_package($params);
	}


	function module_change_password($params){
		// return Whmcs_module_commands::whmcs_module_change_password($params);
		$load = new Whmcs_module_commands();
		return $load->whmcs_module_change_password($params);
	}



	/** order handling **/

	function add_order($params){
		// return Whmcs_order_handling::whmcs_add_order($params);
		$load = new Whmcs_order_handling();
		return $load->whmcs_add_order($params);
	}

	function get_orders($params){
		// return Whmcs_order_handling::whmcs_get_orders($params);
		$load = new Whmcs_order_handling();
		return $load->whmcs_get_orders($params);
	}

	function get_products($params){
		// return Whmcs_order_handling::whmcs_get_products($params);
		$load = new Whmcs_order_handling();
		return $load->whmcs_get_products($params);
	}

	function get_promotions_orderhandling($params){
		// return Whmcs_order_handling::whmcs_get_promotions($params);
		$load = new Whmcs_order_handling();
		return $load->whmcs_get_promotions($params);
	}

	function get_order_statuses($params){
		// return Whmcs_order_handling::whmcs_get_order_statuses($params);
		$load = new Whmcs_order_handling();
		return $load->whmcs_get_order_statuses($params);
	}

	function accept_order($params){
		// return Whmcs_order_handling::whmcs_accept_order($params);
		$load = new Whmcs_order_handling();
		return $load->whmcs_accept_order($params);
	}

	function pending_order($params){
		// return Whmcs_order_handling::whmcs_pending_order($params);
		$load = new Whmcs_order_handling();
		return $load->whmcs_pending_order($params);
	}

	function cancel_order($params){
		// return Whmcs_order_handling::whmcs_cancel_order($params);
		$load = new Whmcs_order_handling();
		return $load->whmcs_cancel_order($params);
	}

	function fraud_order($params){
		// return Whmcs_order_handling::whmcs_fraud_order($params);
		$load = new Whmcs_order_handling();
		return $load->whmcs_fraud_order($params);
	}

	function delete_order($params){
		// return Whmcs_order_handling::whmcs_delete_order($params);
		$load = new Whmcs_order_handling();
		return $load->whmcs_delete_order($params);
	}



   /** Payments Billing **/

	function get_invoices($params){
		// return Whmcs_payments_billing::whmcs_get_invoices($params);
		$load = new Whmcs_payments_billing();
		return $load->whmcs_get_invoices($params);
	}

	function get_invoice($params){
		// return Whmcs_payments_billing::whmcs_get_invoice($params);
		$load = new Whmcs_payments_billing();
		return $load->whmcs_get_invoice($params);
	}

	function create_invoice($params){
		// return Whmcs_payments_billing::whmcs_create_invoice($params);
		$load = new Whmcs_payments_billing();
		return $load->whmcs_create_invoice($params);
	}

	function update_invoice($params){
		// return Whmcs_payments_billing::whmcs_update_invoice($params);
		$load = new Whmcs_payments_billing();
		return $load->whmcs_update_invoice($params);
	}

	function add_invoice_payment($params){
		// return Whmcs_payments_billing::whmcs_add_invoice_payment($params);
		$load = new Whmcs_payments_billing();
		return $load->whmcs_add_invoice_payment($params);
	}

	function capture_payment($params){
		// return Whmcs_payments_billing::whmcs_capture_payment($params);
		$load = new Whmcs_payments_billing();
		return $load->whmcs_capture_payment($params);
	}

  function apply_credit($params){
		// return Whmcs_payments_billing::whmcs_apply_credit($params);
		$load = new Whmcs_payments_billing();
		return $load->whmcs_apply_credit($params);
	}

	function add_billable_item($params){
		// return Whmcs_payments_billing::whmcs_add_billable_item($params);
		$load = new Whmcs_payments_billing();
		return $load->whmcs_add_billable_item($params);
	}

  function add_credit($params){
		// return Whmcs_payments_billing::whmcs_add_credit($params);
		$load = new Whmcs_payments_billing();
		return $load->whmcs_add_credit($params);
	}

  function add_transaction($params){
		// return Whmcs_payments_billing::whmcs_add_transaction($params);
		$load = new Whmcs_payments_billing();
		return $load->whmcs_add_transaction($params);
	}

  function get_transactions_payments_billing($params){
		// return Whmcs_payments_billing::whmcs_get_transactions($params);
		$load = new Whmcs_payments_billing();
		return $load->whmcs_get_transactions($params);
	}

  function update_transaction($params){
		// return Whmcs_payments_billing::whmcs_update_transaction($params);
		$load = new Whmcs_payments_billing();
		return $load->whmcs_update_transaction($params);
	}

  function get_payment_methods($params){
		// return Whmcs_payments_billing::whmcs_get_payment_methods($params);
		$load = new Whmcs_payments_billing();
		return $load->whmcs_get_payment_methods($params);
	}



   /**Quotes **/

  function create_quote($params){
		// return Whmcs_quotes::whmcs_create_quote($params);
		$load = new Whmcs_quotes();
		return $load->whmcs_create_quote($params);
	}

	function update_quote($params){
		// return Whmcs_quotes::whmcs_update_quote($params);
		$load = new Whmcs_quotes();
		return $load->whmcs_update_quote($params);
	}

  function delete_quote($params){
		// return Whmcs_quotes::whmcs_delete_quote($params);
		$load = new Whmcs_quotes();
		return $load->whmcs_delete_quote($params);
	}

	function send_quote($params){
		// return Whmcs_quotes::whmcs_send_quote($params);
		$load = new Whmcs_quotes();
		return $load->whmcs_send_quote($params);
	}

  function accept_quote($params){
		// return Whmcs_quotes::whmcs_accept_quote($params);
		$load = new Whmcs_quotes();
		return $load->whmcs_accept_quote($params);
	}

  function get_quotes($params){
		// return Whmcs_quotes::whmcs_get_quotes($params);
		$load = new Whmcs_quotes();
		return $load->whmcs_get_quotes($params);
	}



  /** Support **/

  function create_ticket($params){
		// return Whmcs_support::whmcs_create_ticket($params);
		$load = new Whmcs_support();
		return $load->whmcs_create_ticket($params);
	}

  function ticket_reply($params){
		// return Whmcs_support::whmcs_ticket_reply($params);
		$load = new Whmcs_support();
		return $load->whmcs_ticket_reply($params);
	}

  function get_tickets($params){
		// return Whmcs_support::whmcs_get_tickets($params);
		$load = new Whmcs_support();
		return $load->whmcs_get_tickets($params);
	}

  function get_ticket($params){
		// return Whmcs_support::whmcs_get_ticket($params);
		$load = new Whmcs_support();
		return $load->whmcs_get_ticket($params);
	}

  function update_ticket($params){
		// return Whmcs_support::whmcs_update_ticket($params);
		$load = new Whmcs_support();
		return $load->whmcs_update_ticket($params);
	}

  function delete_ticket($params){
		// return Whmcs_support::whmcs_delete_ticket($params);
		$load = new Whmcs_support();
		return $load->whmcs_delete_ticket($params);
	}

  function add_ticket_note($params){
		// return Whmcs_support::whmcs_add_ticket_note($params);
		$load = new Whmcs_support();
		return $load->whmcs_add_ticket_note($params);
	}

  function get_ticket_notes($params){
		// return Whmcs_support::whmcs_get_ticket_notes($params);
		$load = new Whmcs_support();
		return $load->whmcs_get_ticket_notes($params);
	}

  function delete_ticket_note($params){
		// return Whmcs_support::whmcs_delete_ticket_note($params);
		$load = new Whmcs_support();
		return $load->whmcs_delete_ticket_note($params);
	}

  function whmcs_get_support_departments($params){
		// return Whmcs_support::whmcs_get_support_departments($params);
		$load = new Whmcs_support();
		return $load->whmcs_get_support_departments($params);
	}

  function get_support_statuses($params){
		// return Whmcs_support::whmcs_get_support_statuses($params);
		$load = new Whmcs_support();
		return $load->whmcs_get_support_statuses($params);
	}

  function get_ticket_predefined_categories($params){
		// return Whmcs_support::whmcs_get_ticket_predefined_categories($params);
		$load = new Whmcs_support();
		return $load->whmcs_get_ticket_predefined_categories($params);
	}

  function get_ticket_predefined_replies($params){
		// return Whmcs_support::whmcs_get_ticket_predefined_replies($params);
		$load = new Whmcs_support();
		return $load->whmcs_get_ticket_predefined_replies($params);
	}

  function add_announcement($params){
		// return Whmcs_support::whmcs_add_announcement($params);
		$load = new Whmcs_support();
		return $load->whmcs_add_announcement($params);
	}

  function delete_announcement($params){
		// return Whmcs_support::whmcs_delete_announcement($params);
		$load = new Whmcs_support();
		return $load->whmcs_delete_announcement($params);
	}

  function update_announcement($params){
		// return Whmcs_support::whmcs_update_announcement($params);
		$load = new Whmcs_support();
		return $load->whmcs_update_announcement($params);
	}

  function get_announcements($params){
		// return Whmcs_support::whmcs_get_announcements($params);
		$load = new Whmcs_support();
		return $load->whmcs_get_announcements($params);
	}

}
