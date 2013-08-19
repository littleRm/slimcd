#SlimCD Credit Card Transaction
###Web form using ajax to send sensitive credit card info to SlimCD to stay out of PCI scope
* Stores all non-sensitive credit card info to the session as fields are completed
* Loads credit card number and CVV2 to SlimCD which returns either a gate id or a token which are then saved to the session
* When user clicks 'Charge it' an ajax call to a php script then sends the session info to SlimCD to do the actual sale transaction

There are two separate demos:
* If you need CVV2, use queue.php which sends the card number and cvv2 number to slimCD, who queues the info for 5 minutes and sends back a token which is passed back in the SALE call.
* If you do not need CVV2, use load.php which sends the cardholder name, expiration date and card number to slimCD, who returns a gate id which is passed back in the SALE call.

Make sure to set your SlimCD Credentials:
* Use a Public token allowing LOAD and QUEUE in demo.php
* Use a Private token allowing SALE in _ajax/processCard.php