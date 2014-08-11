<?php

// FlavorPHP
// Server implementation
// each method of this class is a soap method
class serverWS {
	
	// Example of an implementation with API key
	public function test($key) {        
		if (auth::security($key) == true) {
			$user = new User();
			return $user->findAll();
		} else {
			return array("Error"=>"Incorrect key", "Service"=>"test");
		}
    }

}
?>
