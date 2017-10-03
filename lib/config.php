<?php
/**
 * Created by SAIED-LOAI-LAKHDAR.
 * User: DjelfaNetwork
 * Date: 01-10-2017
 * Time: 4:43
 * FileName : Config.php
 */

// Set const 'DS' as directory sepatator
defined('DS') ? null : define('DS' , DIRECTORY_SEPARATOR) ;

// Set const 'APTH' as application path
defined('APTH') ? null : define('APTH' , realpath(dirname(__FILE__).DS.'..')) ;


// Datebase Informatios

// Set cont "HOST" as application database host
defined('DB_HOST') ? null : define('DB_HOST' , '127.0.0.1') ;

// Set cont "DB_NAME" as database name
defined('DB_NAME') ? null : define('DB_NAME' , 'schem') ;

// Set cont "DB_USER" as database username
defined('DB_USER') ? null : define('DB_USER' , 'root') ;

// Set cont "DB_PASS" as database password
defined('DB_PASS') ? null : define('DB_PASS' , '') ;

// Set cont "DB_DRIVER" as PDO driver
defined('DB_DRIVER') ? null : define('DB_DRIVER' , 'mysql') ;



