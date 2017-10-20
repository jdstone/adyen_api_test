<?php
require __DIR__.'/vendor/autoload.php';

$client = new \Adyen\Client();
$client->setApplicationName("");
$client->setUsername("");
$client->setPassword("");
$client->setEnvironment(\Adyen\Environment::TEST);

$service = new \Adyen\Service\Payment($client);

$json1 = '{
      "amount": {
        "currency": "USD",
        "value": 25.00
      },
      "card": {
        "cvc": "737",
        "expiryMonth": "08",
        "expiryYear": "2018",
        "holderName": "John Smith",
        "number": "2223000048410010"
      },
      "merchantAccount": "",
      "reference": "Exercise1",
      "shopperEmail": "john.smith@example.com",
      "shopperInteraction": "Ecommerce"
}';

$json2 = '{
      "amount": {
        "currency": "USD",
        "value": 2500
      },
      "card": {
        "cvc": "737",
        "expiryMonth": "08",
        "expiryYear": "2018",
        "holderName": "John Smith",
        "number": "2223000048410010"
      },
      "merchantAccount": "",
      "reference": "Exercise1-3rd_Try",
      "shopperEmail": "john.smith@example.com",
      "shopperInteraction": "Ecommerce"
}';

$params = json_decode($json2, true);

$result = $service->authorise($params);

foreach($result as $key => $value) {
  echo nl2br($key . ": " . $value . "\n\n", false);
}

/*

1st Run
pspReference: 8535081888245733
resultCode: Authorised
authCode: 93209

2nd Run
pspReference: 8535082174648218
resultCode: Authorised
authCode: 23810

3rd Run
pspReference: 8815082988986649
resultCode: Authorised
authCode: 30039

*/

?>
