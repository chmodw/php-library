<?php

/**
 * Category model class
 *
 * PHP Version 8.0.0
 *
 * @category PHP-Library
 * @package  PHP-Library
 * @author   Chamodya Wimansha <chamodyawimansha@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     http://example.com/PHP-Library
 */
class Category
{
    private $_db;

    /**
     * Construction method for Category model
     *
     * @param null 
     *
     * @return null 
     */
    public function __construct()
    {
        $this->_db = new DB;
    }

    /**
     * Function to create new Category
     *
     * @param String $category_name name of the new category
     *
     * @return boolean
     */
    public function create(array $data)
    {
        try {
            $query = 'INSERT INTO category (categoryName) VALUES (:categoryName)';
            $this->_db->execute($query, ["categoryName" => $data['category_name']]);
        
            return true;
        
        }catch (Exception $e){
            return false;
        }
    }

    /**
     * Retrieve all the categories from the database
     *
     * @param null
     *
     * @return boolean
     */
    public function getAll()
    {
        return $this->_db->getMany("SELECT * FROM category");
    }

    /**
     * Find a single record categories from the database
     *
     * @param INT $id
     *
     * @return boolean
     */
    public function findById($id)
    {
        return $this->_db->getOne(
            "SELECT * FROM category WHERE id='". $id ."' LIMIT 1"
        );
    }
}
