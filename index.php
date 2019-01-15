<?php
require "config/global.php";
require "service/autoloader.php";
require "service/router.php";
require "service/urlManager.php";
require "service/sessionManager.php";
require "service/formChecker.php";
autoloader::autoload();
route();
?>
