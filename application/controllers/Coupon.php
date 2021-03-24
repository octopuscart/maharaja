<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Coupon extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Product_model');
        $this->load->library('session');
        $this->user_id = $this->session->userdata('logged_in')['login_id'];
        $this->db->where_in('attr_key', ["EOPGMid", "EOPGSecretCode", "EOPGSalesLink", "EOPGQueryLink"]);
        $query = $this->db->get('configuration_attr');
        $paymentattr = $query->result_array();
        $paymentconf = array();
        foreach ($paymentattr as $key => $value) {
            $paymentconf[$value['attr_key']] = $value['attr_val'];
        }
        $this->mid = $paymentconf['EOPGMid'];
        $this->secret_code = $paymentconf['EOPGSecretCode'];
        $this->salesLink = $paymentconf['EOPGSalesLink'];
        $this->queryLink = $paymentconf['EOPGQueryLink'];
    }

    public function index() {
        if (isset($_POST['submit_now'])) {
            $requestid = "WOODLAND" . date('Ymd') . date('His');
            $paymenttype = $this->input->post('payment_type');
            $coupnrequest = array(
                'request_id' => $requestid,
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'contact_no' => $this->input->post('contact_no'),
                'payment_type' => $this->input->post('payment_type'),
                'amount' => '100.00',
                'status' => 'Payment Init',
                'remark' => '',
                'date' => date('Y-m-d'),
                'time' => date('H:i:s'),
            );
            $this->db->insert('coupon_request', $coupnrequest);
            redirect("Coupon/orderPayment/".$requestid."/".$paymenttype);
            
        }

        $this->load->view('coupon/gift_coupon');
    }

    function orderPayment($order_key, $paymenttype) {

        $itemsdescription = "Woodlands $100.00 Coupon Purchase";
        $paymenttypeg = $paymenttype;
        $amt = "100.00";
        $marchentref = $order_key;
        $returnUrl = site_url("Coupon/orderPaymentResult/$order_key/$paymenttype");
        $mid = $this->mid;
        $secret_code = $this->secret_code;
        $salesLink = $this->salesLink;
        $urlset = "merch_ref_no=$marchentref&mid=$mid&payment_type=$paymenttypeg&service=SALE&trans_amount=$amt";
        $hsakeystr = $secret_code . $urlset;
        $seckey = hash("sha256", $hsakeystr);
        $ganarateurl = "&return_url=$returnUrl&goods_subject=Woodlands Coupon&app_pay=WEB&goods_body=$itemsdescription&api_version=2.8&lang=en&reuse=Y&active_time=300&wallet=HK";
        $ganarateurl = $urlset . $ganarateurl . "&signature=$seckey";
//        echo $endurl = $salesLink . "?" . $ganarateurl;
        redirect($endurl = $salesLink . "?" . $ganarateurl);
    }

    function orderPaymentResult($order_key, $paymenttype) {
        $order_details = $this->Product_model->getOrderDetails($order_key, 'key');
        $marchentref = $order_details['order_data']->order_no;

        $amt = $order_details['order_data']->total_price;
        $marchentref = $order_details['order_data']->order_no;
        $returnUrl = site_url("Order/orderPaymentResult/$order_key");
        $mid = $this->mid;
        $secret_code = $this->secret_code;
        $salesLink = $this->salesLink;
        $queryLink = $this->queryLink;
        $paymenttypeg = $paymenttype;
        $notifyUrl = site_url("Order/orderPaymentNotify/$order_key/$paymenttype");
        $urlset = "merch_ref_no=$marchentref&mid=$mid&payment_type=$paymenttypeg&service=QUERY&trans_amount=$amt";
        $hsakeystr = $secret_code . $urlset;
        $seckey = hash("sha256", $hsakeystr);
        $ganarateurl = "&return_url=$notifyUrl&api_version=2.9&redirect=Y";
        $ganarateurl = $urlset . $ganarateurl . "&signature=$seckey";
        redirect($endurl = $queryLink . "?" . $ganarateurl);
    }

    function orderPaymentNotify($order_key, $paymenttype) {
        $order_details = $this->Product_model->getOrderDetails($order_key, 'key');
        $returndata = $_GET;
        $order_id = $order_details['order_data']->id;
        if ($returndata['trans_status'] == 'SUCCESS') {
            $productattr = array(
                'c_date' => date('Y-m-d'),
                'c_time' => date('H:i:s'),
                'status' => "Payment Confirmed",
                'remark' => "Payment completed using $paymenttype",
                'description' => "Payment Id#: " . $returndata['order_id'],
                'order_id' => $order_id
            );
            $this->db->insert('user_order_status', $productattr);
            $orderlog = array(
                'log_type' => "Payment Confirmed",
                'log_datetime' => date('Y-m-d H:i:s'),
                'user_id' => "",
                'order_id' => $order_id,
                'log_detail' => "Payment completed using $paymenttype " . "Payment Id#: " . $returndata['order_id'],
            );
            $this->db->insert('system_log', $orderlog);
            $productattr = array(
                'status' => "Payment completed using $paymenttype ",
                'remark' => $this->input->post('remark'),
                'txn_no' => $returndata['order_id'],
                'c_date' => date('Y-m-d'),
                'c_time ' => date('H:i:s'),
                'description' => "Payment Id#: " . $returndata['order_id'],
                'order_id' => $order_id
            );
            $this->db->insert('paypal_status', $productattr);
        }
        if ($returndata['trans_status'] != 'SUCCESS') {
            $productattr = array(
                'c_date' => date('Y-m-d'),
                'c_time' => date('H:i:s'),
                'status' => "Payment Failure",
                'remark' => "Payment failure using $paymenttype",
                'description' => "Payment Id#: " . $returndata['order_id'],
                'order_id' => $order_id
            );
            $this->db->insert('user_order_status', $productattr);
        }
        redirect(site_url("Order/orderdetails/$order_key"));
    }

}
