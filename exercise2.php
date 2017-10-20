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
		"value": 2500.00
	},
	"originalReference": "8535081888245733",
	"reference": "Exercise2"
}';

$json2 = '{
	"merchantAccount": "",
	"modificationAmount": {
		"currency": "USD",
		"value": 2500
	},
	"originalReference": "8815082988986649",
	"reference": "q0838854510828c"
}';

$params = json_decode($json2, true);

$result = $modification->capture($params);

foreach($result as $key => $value) {
  echo nl2br($key . ": " . $value . "\n\n", false);
}

/*

1st Run (using "originalReference": "8535081888245733")
pspReference: 8535082154499491
response: [capture-received]

2nd Run (using "originalReference": "8535081888245733")
pspReference: 8835082166955222
response: [capture-received]

3rd Run (using "originalReference": "8535081888245733")
pspReference: 8835082170661253
response: [capture-received]

4th Run (using "originalReference": "8535082174648218")
pspReference: 8535082175012331
response: [capture-received]

5th Run (using "originalReference": "8535082174648218" AND "value": 25)
pspReference: 8835082177938704
response: [capture-received]

6th Run (using "originalReference": "8815082988986649" AND "value": 2500)
pspReference: 8815082990904549
response: [capture-received]

*/

?>
