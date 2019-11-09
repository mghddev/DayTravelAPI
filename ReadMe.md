### Day Insurance PHP API Client

This library has an object that it uses for sending soap request to day apis. This is DaySoapClient class and it is needed to inject wsdl url and username and password for constructing of its object.
You can find usage of this library down here,

```php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require __DIR__.'/vendor/autoload.php';

$wsdl = "Wsdl_url";
$UserName = 'UserName';
$password = '*****';

$day_client = new \DayApi\DaySoapClient($wsdl, $UserName, $password);

####1) Method getPrice:

$get_price_object = new \DayApi\GetPriceDataObject();
$get_price_object->setAge(25);
$get_price_object->setDuration(10);
$get_price_object->setZoneId(107);

$prices = $day_client->getPrice($get_price_object);

####2) Method Issue: