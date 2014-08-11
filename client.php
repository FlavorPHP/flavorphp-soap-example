<?php

// FlavorPHP
// Example of a SOAP client implementation 
try {
    $soapclient = new SoapClient(NULL, array("location" => 'http://loalhost/api/', "uri" => ''));	
    $users = $soapclient->test("123456789");
	var_dump($users);
}  catch (Exception $e) {
	echo $e->getMessage();
}

?>