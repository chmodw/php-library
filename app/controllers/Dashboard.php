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
     * @param string $model name of the model
     *
     * @return Model
     */
    public function index()
    {
        $this->view("dashboard", []);
    }
}
