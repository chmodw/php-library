<?php

/**
 * Stores Path variables
 *
 * PHP Version 8.0.0
 *
 * @category PHP-Library
 * @package  PHP-Library
 * @author   Chamodya Wimansha <chamodyawimansha@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     http://example.com/PHP-Library
 */

define("DS", DIRECTORY_SEPARATOR);
define("ROOT", getcwd() . DS);
define("APP_PATH", ROOT . 'app' . DS);
define("LIBS_PATH", ROOT . "libs" . DS);
define("PUBLIC_PATH", ROOT . "public" . DS);
define("CONFIG_PATH", APP_PATH . "config" . DS);
define("CONTROLLER_PATH", APP_PATH . "controllers" . DS);
define("MODEL_PATH", APP_PATH . "models" . DS);
define("VIEW_PATH", APP_PATH . "views" . DS);
