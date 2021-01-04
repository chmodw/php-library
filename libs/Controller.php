<?php
/**
 * Base Controller class to inherited by other controller classes.
 *
 * PHP Version 8.0.0
 *
 * @category PHP-Library
 * @package  PHP-Library
 * @author   Chamodya Wimansha <chamodyawimansha@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     http://example.com/PHP-Library
 */
class Controller {

    /**
     * Loads the model.
     *
     * @param string $model name of the model
     *
     * @return Model
     */
    public function model(String $model) 
    {
        include_once MODEL_PATH . $model . '.php';
        return new $model();
    }

    /**
     * Loads the View.
     *
     * @param string $view name of the view
     * @param array  $data data to show in the view
     *
     * @return null
     */
    public function view($view, $data = []) {

        if (file_exists(VIEW_PATH . $view . '.php')) {
            include_once VIEW_PATH . $view . '.php';
        } else {
            die('View Error');
        }
    }

}