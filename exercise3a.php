<?php
require __DIR__.'/vendor/autoload.php';

$client = new \Adyen\Client();
$client->setApplicationName("");
$client->setUsername("");
$client->setPassword("");
$client->setEnvironment(\Adyen\Environment::TEST);

$modification = new \Adyen\Service\Modification($client);

$json1 = '{
	"merchantAccount": "",
	"modificationAmount": {
		"currency": "USD",
		"value": 2500
	},
	"originalReference": "8535081888245733",
	"reference": "Exercise3_2nd_try"
}';

$json2 = '{
	"merchantAccount": "",
	"modificationAmount": {
		"currency": "USD",
		"value": 2500
	},
	"originalReference": "8815082988986649",
	"reference": "q0838854510828r1"
}';

$params = json_decode($json2, true);

$result = $modification->refund($params);

foreach($result as $key => $value) {
  echo nl2br($key . ": " . $value . "\n\n", false);
}

/*

1st Run (using "originalReference": "8535082154499491")
pspReference: 8535082161531104
response: [refund-received]

2nd Run (using "originalReference": "8535081888245733")
pspReference: 8535082163831429
response: [refund-received]

3rd Run (using "originalReference": "8535081888245733")
pspReference: 8535082167201389
response: [refund-received]

4th Run (using "originalReference": "8535081888245733")
pspReference: 8535082172844108
response: [refund-received]

5th Run (using "originalReference": "8535082174648218")
pspReference: 8535082176249445
response: [refund-received]

6th Run (using "originalReference": "8535082174648218" AND "value": 25)
pspReference: 8835082179120632
response: [refund-received]

7th Run (using "originalReference": "8815082988986649" AND "value": 2500)
pspReference: 8815082993523981
response: [refund-received]

*/

?>
