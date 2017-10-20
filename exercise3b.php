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
		"value": 1300
	},
	"originalReference": "8815082988986649",
	"reference": "q0838854510828r2"
}';

$params = json_decode($json2, true);

$result = $modification->refund($params);

foreach($result as $key => $value) {
  echo nl2br($key . ": " . $value . "\n\n", false);
}

/*

1st Run (using "originalReference": "8535082174648218" AND "value": 1300)
pspReference: 8835082189829065
response: [refund-received]

2nd Run (using "originalReference": "8815082988986649" AND "value": 1300)
pspReference: 8515083003500145
response: [refund-received]

*/

?>
