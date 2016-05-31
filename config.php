<?php if (!defined('SYSTEM_ROOT')) { die('Insufficient Permissions'); }
define('DB_HOST',getenv('OPENSHIFT_MYSQL_DB_HOST'));
define('DB_USER',getenv('OPENSHIFT_MYSQL_DB_USERNAME'));
define('DB_PASSWD',getenv('OPENSHIFT_MYSQL_DB_PASSWORD'));
define('DB_NAME',getenv('OPENSHIFT_APP_NAME'));
define('DB_PREFIX','tc_');
