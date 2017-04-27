<?php

// Define path to application directory
defined('APPLICATION_PATH')
    || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../application'));

// Define application environment
defined('APPLICATION_ENV')
    || define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'production'));

// Ensure library/ is on include_path
set_include_path(implode(PATH_SEPARATOR, array(
    realpath(APPLICATION_PATH . '/../library'),
    get_include_path(),
)));

/** Zend_Application */
<<<<<<< HEAD
require_once 'library/Zend/Application.php';
=======
require_once 'Zend/Application.php';
>>>>>>> 604fd110ee68ef9920d71ba3bd1dd8f547aa4481

// Create application, bootstrap, and run
$application = new Zend_Application(
    APPLICATION_ENV,
    APPLICATION_PATH . '/application/configs/application.ini'
);
$application->bootstrap()
<<<<<<< HEAD
            ->run();
=======
            ->run();
>>>>>>> 604fd110ee68ef9920d71ba3bd1dd8f547aa4481
