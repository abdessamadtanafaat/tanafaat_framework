<?php

 /** Configuration variables */

define('DEVELOPMENT_ENVIRONMENT', true);

define('DB_NAME', 'todo');

define('DB_USER', 'tanafaat');

define('DB_PASSWORD', 'void2015');

define('DB_HOST', 'localhost');


//class DatabaseConfig
//{
//    private $_dbHandle;
//
//    /**
//     * connect to the database
//     */
//
//    public function connect(): mysqli
//    {
//        $this->_dbHandle = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
//
//        // check if failed
//        if ($this->_dbHandle->connect_error) {
//            throw new Exception("database connection failed" . $this->_dbHandle->connect_error);
//        }
//        return $this->_dbHandle;
//    }
//
//    /**
//     *disconnect from the database
//     */
//    public function disconnect(): void
//    {
//        if ($this->_dbHandle) {
//            $this->_dbHandle->close();
//        }
//    }
//
//    /**
//     * get the current database connection handle
//     * @return mysqli
//     */
//
//    public function getDbHandle(): mysqli {
//    return $this->_dbHandle;
//    }
//}
//
//try {
//    $database = new DatabaseConfig();
//    $dbConnection = $database->connect();
//}catch (Exception $e){
//    echo'Error:'. $e->getMessage();
//    exit;
//}