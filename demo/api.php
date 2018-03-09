<?php

class Sql{
	private $conn;
	
	public function __construct() {
		$serverName = "";	
		$connectionInfo = array( "Database"=>"functional");
		$conn = sqlsrv_connect( $serverName, $connectionInfo);
		if( $conn === false )
		{
			echo "Unable to connect.</br>";
			die( print_r( sqlsrv_errors(), true));
		}else{
			$this->conn = $conn;
		}
	}
	
	public function getConn() {
        if( $this->conn === false )
        {
            $serverName = "";
            $connectionInfo = array( "Database"=>"functional");
            $conn = sqlsrv_connect( $serverName, $connectionInfo);

            if( $conn === false )
            {
                echo "Unable to connect.</br>";
                die( print_r( sqlsrv_errors(), true));
            }else{
                $this->conn = $conn;
            }

        }

        return $this->conn;
    }
	
	public function login
	
	
}

















?>