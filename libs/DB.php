<?php

/**
 * Database class.
 *
 * PHP Version 8.0.0
 *
 * @category PHP-Library
 * @package  PHP-Library
 * @author   Chamodya Wimansha <chamodyawimansha@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     http://example.com/PHP-Library
 */
class DB
{

    protected $conn;
    protected $stmt;

    /**
     * Creates Database PDO connection when creating this object.
     *
     * @param null no params
     *
     * @return null
     */
    public function __construct() 
    {
        $dsn = 'mysql:host='.DB_HOST.';dbname='. DB_NAME;

        $options = array(
        PDO::ATTR_PERSISTENT => true,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        // Creating database PDO Connection
        try{
            $this->conn = new PDO($dsn, DB_USER, DB_PASS, $options);
        } catch(PDOException $e){
            $this->error = $e->getMessage();
            echo $this->error;
        }
         
    }

    /**
     * Accepts query string to prepare for executing.
     *
     * @param String $queryString query string
     *
     * @return null
     */
    public function query(String $queryString)
    {
        $this->stmt = $this->dbh->prepare($sql);
    }

    /**
     * Accepts query string to prepare for executing.
     *
     * @param array $data data for executing
     *
     * @return null
     */
    public function execute(array $data)
    {
        return $this->dbh->prepare($sql)->execute($data);
    }
}

// https://phpdelusions.net/pdo_examples/insert