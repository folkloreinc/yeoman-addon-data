<?php

define('PROJECT_NAME','<%= project.name %>');
define('DATA_PATH',dirname(__FILE__));

// Include the main Propel script
require_once DATA_PATH.'/Propel/runtime/lib/Propel.php';

// Initialize Propel with the runtime configuration
Propel::init(DATA_PATH.'/build/conf/'.PROJECT_NAME.'-conf.php');

// Add the generated 'classes' directory to the include path
set_include_path(DATA_PATH.'/build/classes' . PATH_SEPARATOR . get_include_path());