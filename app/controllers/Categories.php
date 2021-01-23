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
class Categories extends Controller
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
     * Handles new Categories
     * 
     * POST - creates a new Categgory in the database
     * GET - opens the create new Categgory form
     *
     * @param null
     *
     * @return Model
     */
    public function new()
    {
        // shows the new category form page
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $this->view("category/new", []);
        }

        // creating a new Category
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            return print("new is creating");
        }
    }
}