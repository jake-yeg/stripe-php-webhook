<?php
/*
 *  Set path to stripe lib
 */
$config = require_once('webhook_config.php');

require_once('webhookclass.php');

require_once($config['stripe_path']);

require_once('eventarray.php');

if($config['log_type'] === 1){
    $config['db'] = new PDO("mysql:host={$config['db_host']};dbname={$config['db_name']}", $config['db_user'], $config['db_pass']);
}

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

    $isNewEvent = $webhook->isNewEvent($event->id);

    if($isNewEvent === false){
        http_response_code(200);
        exit;
    }else if($isNewEvent === true){
        ob_start();
        $webhook->{$event_type}();
    }
}else{
    http_response_code(200);
    exit;
}