<?php

/**
 * Categories controller class
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
     * @param null
     *
     * @return null
     */
    public function create($data)
    {

    }
}
