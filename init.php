<?php
/**
 * Created by SAIED-LOAI-LAKHDAR.
 * User: DjelfaNetwork
 * Date: 01-10-2017
 * Time: 4:50
 * FileName : init.php
 */
namespace DN;
session_start() ;
use DN\CLASSES\Database;

require_once 'lib/config.php' ;
require_once 'lib/Autoload.php' ;
// get database instance
$db = new Database() ;





