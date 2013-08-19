#SlimCD Credit Card Transaction
###Web form using ajax to send sensitive credit card info to SlimCD to stay out of PCI scope
* Stores all non-sensitive credit card info to the session as fields are completed
* Loads credit card number and CVV2 to SlimCD which returns a gate id and cvv2 token which are then saved to the session
* When user clicks 'Charge it' an ajax call to a php script then sends the session info to SlimCD to do the actual sale transaction

Make sure to set your SlimCD Credentials
* Use a Public token allowing LOAD and QUEUE in demo.php
* Use a Private token allowing SALE in _ajax/processCard.php