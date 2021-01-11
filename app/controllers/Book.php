<?php

/**
 * Index controller class
 *
 * PHP Version 8.0.0
 *
 * @category PHP-Library
 * @package  PHP-Library
 * @author   Chamodya Wimansha <chamodyawimansha@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     http://example.com/PHP-Library
 */
class Book extends Controller
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
        $this->view("book/index", []);
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
        // test data get this from the database
        $data = array("categories" => [["id" => 1, "category" => "Fiction"], ["id" => 2, "id" => "Scary"]]);

        // shows the login page
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            return $this->view("book/new", $data);
        }

        // Save authors as serialized array

        // Authenticate the user
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            return print("New Book Creating");
        }
    }
}
