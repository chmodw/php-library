<?php

/**
 * Categories controller class
 *
 * PHP Version 7.4.0
 *
 * @category PHP-Library
 * @package  PHP-Library
 * @author   Chamodya Wimansha <chamodyawimansha@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     http://example.com/PHP-Library
 */
class Categories extends Controller
{
    private $_model;

    /**
     * Construction method for Categories Controller
     *
     * @param null
     *
     * @return null
     */    
    public function __construct()
    {
        // including model class
        $this->model("Category");
        $this->_model = new Category;
    }

    /**
     * Loads the index view
     *
     * @param null
     *
     * @return Model
     */
    public function index()
    {
        return $this->view(
            "category/index", 
            ["categories" => $this->_model->getAll()]
        );
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
            return $this->view("category/new", []);
        }

        // creating a new Category
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $res = $this->_model->create(
                ["category_name" => $_POST["category_name"]]
            );

            if ($res) {
                header("Location: ". SITE_HOME ."categories");
                die();
                /**
                 * @TODO : session create message
                 **/
            } else {
                return $this->view(
                    "category/new", [
                        "error" => "Error! Could not saved the category.",
                        "fields" => [
                            "category_name" => $_POST["category_name"],
                        ]
                    ]
                );
            }
        }
    }

    /**
     * Handles Edit Categories
     * 
     * POST - Updates a Categgory in the database
     * GET - opens the create new Categgory form with category data
     *
     * @param null
     *
     * @return Model
     */
    public function edit($params)
    {

        // shows the new category form page
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $res = $this->_model->findById($params[0]);

            if ($res) {
                return $this->view(
                    "category/edit", 
                    [
                        "formData" => 
                            [
                                "id" => $res["id"],
                                "categoryName" => $res["categoryName"],
                            ]
                    ]
                );
            } else {
                header("Location: ". SITE_HOME ."categories");
                die();
                /**
                 * @TODO : No were category found to edit
                 **/
            }

        }

        // Updating a Category
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $res = $this->_model->update(
                [
                    "id" => $_POST["id"],
                    "categoryName" => $_POST["category_name"],
                    "updatedOn" => $_POST["updatedOn"],
                ]
            );

            if ($res) {
                header("Location: ". SITE_HOME ."categories");
                die();
                /**
                 * @TODO : session create message
                 **/
            } else {
                // Update Failed
                // session message
            }
        }
    }

    /**
     * Delete a category from the database
     * 
     * POST - Updates a Categgory in the database
     * GET - opens the create new Categgory form with category data
     *
     * @param null
     *
     * @return Model
     */
    public function delete($params)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $res = $this->_model->delete(
                [
                    "id" => $_POST["id"],
                ]
            );

            if ($res) {
                header("Location: ". SITE_HOME ."categories");
                die();
                /**
                 * @TODO : session create message
                 **/
            } else {
                // Update Failed
                // session message
            }

        } else {
            header("Location: ". SITE_HOME ."categories");
            die();
        }
    }
}
