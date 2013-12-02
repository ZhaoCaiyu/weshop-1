<?php
date_default_timezone_set('Asia/Shanghai');

define('BC_ONE_DAY', 86400);
define('BC_START_TIME', microtime());
define('BC_FORCE_RELOAD_CONFIG', getenv('BC_FORCE_RELOAD_CONFIG') ? (bool)getenv('BC_FORCE_RELOAD_CONFIG') : false);
define('BC_LOCAL_CACHER', getenv('BC_LOCAL_CACHER') ? getenv('BC_LOCAL_CACHER') : 'apc');

defined('APPLICATION_PATH')
    || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../application'));

// Define application environment
defined('APPLICATION_ENV')
    || define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'development'));

// Ensure library/ is on include_path
set_include_path(implode(PATH_SEPARATOR, array(
    realpath(APPLICATION_PATH . '/../library'),
    realpath(APPLICATION_PATH . '/../application/modules/default/models'),
    get_include_path(),
)));

require_once 'Bc' . DIRECTORY_SEPARATOR . 'Loader.php';
Bc_Loader::getInstance()->register();

Bc_Timer::start('application');

$config = &Bc_Config::getInstance();

$application = new Bc_Application(APPLICATION_ENV, $config);
$application->bootstrap()->run();