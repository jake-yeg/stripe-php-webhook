<?php
/*
 *  Set path to stripe lib
 */
require_once('webhook_config.php');
require_once('webhookclass.php');
require_once($config['stripe_path']);
require_once('eventarray.php');

\Stripe\Stripe::setApiKey($config['api_key']);

/*
 *  Validate the event(ensure it is coming from stripe, and not a third party event.)
 */
$input = @file_get_contents("php://input");
$event_json = json_decode($input);
$event = \Stripe\Event::retrieve($event_json->id);

$event_type = $event->type;
/*
 * replace '.' in the event type with _ to suit function naming conventions.
 */
if(in_array($event_type, $event_array)) {
    $event_type = str_replace('.', '_', $event_type);

    $webhook = new Webhook($config, $event);
    if($webhook->isDuplicate($event->id) === false){
        exit;
    }else {
        $webhook->{$event_type}();
    }
}else{
    exit;
}