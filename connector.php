<?php

class Database {
	private $_conn;
	private static $_instance; //The single instance
	private $_host = "localhost";
	private $_username = "root";
	private $_password = "";
  	private $_database = "rashmi_usersdb";
    
    public static function getInstance() {
		if(!self::$_instance) { // If no instance then make one
			self::$_instance = new Database();
		}
		return self::$_instance;
    }
    
    private function __construct() {
		$this->conn_to_rashmi = new mysqli($this->_host, $this->_username, 
			$this->_password, $this->_database);
	
		// Error handling
		if(mysqli_connect_error()) {
			trigger_error("Failed to conencto to MySQL: " . mysql_connect_error(),
				 E_USER_ERROR);
		}
    }
    
    // Get mysqli connection
	public function getConnection() {
		return $this->conn_to_rashmi;
    }
}

?>
