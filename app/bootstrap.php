<?php

require_once "../app/config/Config.php";
require_once "../app/helpers/helper.php";

spl_autoload_register(function ($className) {
    require_once "../app/libs/" . $className . ".php";
});
