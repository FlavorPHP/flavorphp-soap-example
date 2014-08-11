<?php

// FlavorPHP
// SOAP Server authorization class 
class auth {
    
    public static function security($key) {        
        $authorized = array ("Some authorized app" => "123456789");
        return in_array($key, $authorized);
    }
	
}

?>
