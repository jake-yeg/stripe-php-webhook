# stripe-webhook

SETUP:
1) Place the 3 files into the same folder in your desired web directory.

2) Edit webhook_config.php as desired

3*Optional*) If you plan on using Database logging run the following query:

CREATE TABLE IF NOT EXISTS webhook_logs (

  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  
  event_id VARCHAR(255) NOT NULL,
  
  event_type VARCHAR(255) NOT NULL,
  
  date DEFAULT getdate()
  
);

4) In your stripe dashboard(https://dashboard.stripe.com/account/webhooks), click ADD ENDPOINT, and set it to the URL for handler.php

5) Inside of webhookclass.php there is a function corresponding to all the possible event types(https://stripe.com/docs/api#event_types),

insert any desired logic inside of the function related to the event type's you plan on using.

6) Fire off a test webhook from your dashboard!
