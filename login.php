<?php
/**
 * Created by SAIED-LOAI-LAKHDAR.
 * User: DjelfaNetwork
 * Date: 01-10-2017
 * Time: 4:05
 * FileName : Login.php
 */
namespace DN ;
// Require All Classes
require_once "init.php";
use DN\CLASSES\Login;



// Instantiate Classes that we need
$login = new Login() ;

// Make token so we will protected from CSRF(Cross-Site-Reqquest-Forgery)
$takon = crypt("djelfa-network",'dn') ;
$_SESSION['token'] = $takon ;

$main_token = crypt($_SESSION['token'],'dn');
if (isset($_POST['user']) && isset($_POST['pass'])) {
    if (isset($_POST['token']) == $main_token) {
        $user = $login->clean($_POST['user']) ;
        $pass = $login->clean($_POST['pass']) ;
        if ($user != '' && $pass != '') {
            $hash_pass = $login->encrypt($pass) ;
            $login->login($user, $hash_pass) ;
        }
    }else {
        die('invalid Token ') ;
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login|DjelfaNetwork</title>
</head>
<body>
<form action="#" method="post">
    <input type="hidden" name="token" id="token" value="<?= $main_token?>">
    <input type="text" name="user" id="user" placeholder="user">
    <input type="password" name="pass" id="pass" placeholder="password">
    <input type="submit" name="login" value="Login">

</form>
</body>
</html>
