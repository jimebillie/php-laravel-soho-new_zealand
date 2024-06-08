<?php
namespace db\config;
use \PDO;
use \PDOException;

class connect
{

    public $conn;


    public function __construct()
    {

        $servername = "127.0.0.1:3306";
        $username = "u233817146_username";
        $password = "SohoP@ssw0rd";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=u233817146_soho", $username, $password);
            $this->conn = $conn;
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//            echo "Connected successfully";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }

    }

}
