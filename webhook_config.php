<?php

/*
 * Stripe API Key;
 */
$config['api_key'] = '';

/*
 * Path to stripe lib
 */
$config['stripe_path'] = '/path/to/stripe/init.php';

/*
 * Debug settings:
 * To enable set to 1
 * To disable set to 0
 * Disabled by default
 */
$config['debug'] = 0;

/*
 * Log settings:
 * To disable set to 0
 * Enable txt file logging set to 1
 * Enable DB logging set to 2
 * If you enable DB logging, you'll need to edit the log() function inside of webhookclass.php
 * to log properly.
 */

$config['log_type'] = 0;
$config['log_path'] = '/path/to/logs/';
/*
 *  THIS SECTION REQUIRES THE PHPMAILER LIBRARY FOUND HERE:
 *  https://github.com/PHPMailer/PHPMailer/
 *
 * If you wish for email notifications for certain events add the event type
 * into the following array
 *  EXAMPLE:
 * $config['email_events'] = array(
 *   'invoice.payment_succeeded',
 *   'invoice.payment_failed'
 *  );
 *
 * Emails will be sent for those events.
 */
$config['phpmailer'] = 'path/to/PHPMailerAutoload.php';

$config['email_events'] = array(
    ''
);

/*
 * EMAIL settings.
 */

/*
 * SMTP disabled by default. Set to 1 to enable.
 */
$config['email']['use_smtp'] = 0;
/*
 * SMTP settings
 */

$config['email']['smtp_host'] = '';
$config['email']['smtp_port'] = '';
$config['email']['smtp_user'] = '';
$config['email']['smtp_pass'] = '';

/*
 * Basic email settings
 */
$config['email']['from'] = 'webhook@' . $_SERVER['SERVER_NAME'];
$config['email']['to'] = '';
$config['email']['subject'] = 'Flagged Webhook Event';

/*
 * DATABASE Settings for DB logging
 */
$config['db_host'] = '';
$config['db_user'] = '';
$config['db_pass'] = '';
$config['db_name'] = '';

$config['db'] = new PDO("mysql:host={$config['db_host']};dbname={$config['db_name']}", $config['db_user'], $config['db_pass']);