<?php

// FlavorPHP
// Entry point to the SOAP Server
class _controller extends appcontroller {
    
    public function  __construct() {
        parent::__construct();
    }

    public function index($id = null) {
        if (isset($_SERVER["REQUEST_METHOD"])&& $_SERVER["REQUEST_METHOD"] == "POST") { 
            $server = new SoapServer(NULL, array("uri" => "urn:Examples"));
            $server->setClass('serverWS'); // Name of the class with the implementation
            $server->setPersistence(SOAP_PERSISTENCE_SESSION);
            $server->handle();
        } else {
            throw new Exception("Unexpected Method");
        }
    }
	
}
?>