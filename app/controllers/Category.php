<?php

/**
 * Category controller class
 *
 * PHP Version 8.0.0
 *
 * @category PHP-Library
 * @package  PHP-Library
 * @author   Chamodya Wimansha <chamodyawimansha@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     http://example.com/PHP-Library
 */
class Category extends Controller
{

    /**
     * Loads the index view
     *
     * @param null
     *
     * @return Model
     */
    public function index()
    {
        $this->view("category/index", []);
    }

    /**
     * Handles new books
     * 
     * POST - creates a new book in the database
     * GET - opens the create new book form
     *
     * @param null
     *
     * @return Model
     */
    public function new()
    {
        $this->view("category/new", []);
    }
}
