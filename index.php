<?php

require_once "libs/Core.php";

$url = isset($_SERVER['PATH_INFO']) ? explode('/', substr($_SERVER['PATH_INFO'], 1)) : ["Dashboard", "index", ""];

Core::run($url);
