<?php
/**
 * Core class.
 *
 * PHP Version 8.0.0
 *
 * @category PHP-Library
 * @package  PHP-Library
 * @author   Chamodya Wimansha <chamodyawimansha@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     http://example.com/PHP-Library
 */
class Core
{
    /**
     * Function Run.
     *
     * @param array $url incoming url
     *
     * @return null
     */
    public static function run(array $url)
    {
        self::_init();
        self::_autoload();
        self::_dispatch($url);
    }

    /**
     * Initialize required constructs
     *
     * @param null
     *
     * @return null
     */
    private static function _init()
    {
        include_once "./app/config/paths.php";

        // Loading core classes
        include LIBS_PATH . "Controller.php";
        include LIBS_PATH . "Loader.php";
        include LIBS_PATH . "DB.php";
        include LIBS_PATH . "Model.php";

        // Load configuration file
        $GLOBALS['config'] = include CONFIG_PATH . "config.php";

        // Starting session
        session_start();
    }

    /**
     * Autoload controllers
     *
     * @param null
     *
     * @return null
     */
    private static function _autoload()
    {
        spl_autoload_register(
            function ($className) {
                include_once CONTROLLER_PATH . $className . '.php';
            }
        );
    }

    /**
     * Call the controllers and controller methods accordingly
     *
     * @param array $url url
     *
     * @return null
     */
    private static function _dispatch(array $url)
    {
        // Getting the controller name
        $controller = strtolower($url[0]);

        // Getting the controller method
        $action = isset($url[1]) ? $url[1] : 'index';

        // Getting the rest of the url as parameters
        $params = array_slice($url, 2);

        $controller = ucfirst($controller);

        if (file_exists(CONTROLLER_PATH . $controller . ".php")) {
            $controllerObj = new $controller();
            
            if (is_callable(array($controllerObj, $action))) {
                $controllerObj->$action($params);
            } else {
                // if method not found : return error
                header('HTTP/1.1 404 Not Found');
                include_once ROOT . "404.php";
                die();
            }
        } else {
            // if controller not found : return error
            header('HTTP/1.1 404 Not Found');
            include_once ROOT . "404.php";
            die();
        }
        // End the session
        session_destroy();
    }
}
