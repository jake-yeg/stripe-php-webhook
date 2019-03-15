<?php

class Webhook
{
    private $config;
    private $db;
    private $event;
    private $customer;

    function __construct($config, $event){
        $this->config = $config;
        $this->db = $config['db'];
        $this->event = $event;
    }
    /*
     * Purpose of the flush, is to send the response code back to Stripe right away
     * to prevent their request from timing out, and retries being sent.
     */

    public function account_updated(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function account_application_deauthorized(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function account_external_account_created(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function account_external_account_deleted(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function account_external_account_updated(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function application_fee_created(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function application_fee_refunded(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function application_fee_refund_updated(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function balance_available(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function bitcoin_receiver_created(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function bitcoin_receiver_filled(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function bitcoin_receiver_updated(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function bitcoin_receiver_transaction_created(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function charge_captured(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }
    
    public function charge_expired(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function charge_failed(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function charge_pending(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function charge_refunded(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function charge_succeeded(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function charge_updated(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function charge_dispute_closed(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function charge_dispute_created(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function charge_dispute_funds_reinstated(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function charge_dispute_funds_withdrawn(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function charge_dispute_updated(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function coupon_created(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function coupon_deleted(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function coupon_updated(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function customer_created(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function customer_deleted(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function customer_updated(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function customer_discount_created(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function customer_discount_deleted(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function customer_discount_updated(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function customer_source_created(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function customer_source_deleted(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function customer_source_updated(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function customer_subscription_created(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function customer_subscription_deleted(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function customer_subscription_trial_will_end(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function customer_subscription_updated(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function invoice_created(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function invoice_payment_failed(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function invoice_payment_succeeded(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function invoice_sent(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }
    
    public function invoice_upcoming(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function invoice_updated(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function invoiceitem_created(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function invoiceitem_deleted(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function invoiceitem_updated(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function order_created(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function order_payment_failed(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function order_payment_succeeded(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function order_updated(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function order_return_created(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }
    
    public function payment_intent_amount_capturable_updated(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }
    
    public function payment_intent_created(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }
    
    public function payment_intent_payment_failed(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }
    
    public function payment_intent_succeeded(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function payout_paid(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function payout_failed(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function payout_canceled(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function payout_created(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function payout_updated(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function plan_created(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function plan_deleted(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function plan_updated(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function product_created(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function product_deleted(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function product_updated(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function review_closed(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function review_opened(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function sku_created(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function sku_deleted(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function sku_updated(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function source_canceled(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function source_chargeable(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function source_failed(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function source_transaction_created(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function transfer_created(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function transfer_deleted(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function transfer_failed(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function transfer_paid(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function transfer_reversed(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    public function transfer_updated(){
        $this->log();
        http_response_code(200);
        ob_end_flush();
    }

    /*
     * stripe test to see if endpoint is alive; return 200 to let it know it is!
     */
    public function ping(){
        http_response_code(200);
        ob_end_flush();
    }

    public function isNewEvent($event_id){
        if($this->config['log_type'] !== 1){
            //Not logging events for some reason, so no way to tell if duplicate.
            return true;
        }
        $stmt = $this->db->prepare("SELECT COUNT(*) FROM webhook_logs WHERE event_id = :event_id");
        $stmt->bindParam(':event_id', $event_id);
        $stmt->execute();

        $rows = $stmt->fetchColumn();
        if($rows > 0){
            return false;
        }else{
            return true;
        }
    }

    private function getCustomer($customer_id){
        $this->customer = \Stripe\Customer::retrieve($customer_id);
    }

    private function log(){
        if($this->config['debug'] === 1){
            if(!file_exists($this->config['log_path'] . date("d-m-Y") . '/' . date("H-i-s") . '-' . $this->event->type . '.txt')){
                mkdir($this->config['log_path'] . date("d-m-Y") . '/');
            }
            $filename = $this->config['log_path'] . date("d-m-Y") . '/' . date("H-i-s") . '-' . $this->event->type . '.txt';
            file_put_contents($filename, $this->event);
        }
        //0 corresponds to no logging.
        if($this->config['log_type'] === 1){
            // Database logging
            $stmt = $this->db->prepare("INSERT INTO webhook_logs (event_id, event_type) VALUES (:event_id, :event_type)");
            $stmt->bindParam(':event_id',$this->event->id);
            $stmt->bindParam(':event_type',$this->event->type);
            $stmt->execute();
        }

        // Send email notice for certain event typs.
        if(in_array($this->event->type, $this->config['email_events'])){
            require_once($this->config['phpmailer']);

            $mail = new PHPMailer;

            if($this->config['email']['use_smtp'] === 1){
                $mail->IsSMTP();
                $mail->SMTPAuth = true;
                $mail->Host = $this->config['email']['smtp_host'];
                $mail->Port = $this->config['email']['smtp_port'];
                $mail->Username = $this->config['email']['smtp_user'];
                $mail->Password = $this->config['email']['smtp_pass'];

                $mail->setFrom($this->config['email']['smtp_user']);
                $mail->AddReplyTo($this->config['email']['smtp_user']);
            }else{
                $mail->setFrom($this->config['email']['from']);
                $mail->AddReplyTo($this->config['email']['from']);
            }
            $mail->addAddress = $this->config['email']['to'];
            $mail->Subject = $this->config['email']['subject'];

            $mail->Body = 'Date: ' . date("d-m-Y") . ' Time: ' . date("H-i-s") . PHP_EOL;
            $mail->Body .= 'Event Type: ' . $this->event->type . PHP_EOL;
            $mail->Body .= 'Event ID: ' . $this->event->id;

            $mail->send();
        }
    }

}
