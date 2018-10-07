<?php
$currency = 'PHP';

//MySql
$db_username 	= 'root';
$db_password 	= '';
$db_name 		= 'hapeedb';
$db_host 		= 'localhost';

//Additional taxes and fees
$HandalingCost 		= 0.00;  //Handling cost for the order.
$InsuranceCost 		= 0.00;  //shipping insurance cost for the order.
$shippingCost       = array( //shipping cost
    'first3' => 0,
    'next5' => 0, // 285 - 180 = 105
    'additional' => 0
);

$taxes              = array( //List your Taxes percent here.
    'VAT' => 12,
);

//connection to MySql
$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
?>
