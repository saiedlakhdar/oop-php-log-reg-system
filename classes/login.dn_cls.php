<?php
/**
 * Created by SAIED-LOAI-LAKHDAR.
 * Company : DjelfaNetwork
 * Date    : 02-10-2017
 * Time    : 2:37
 * FileName: Login.classes.php
 */

namespace DN\CLASSES;


class Login
{
    public function login($user, $pass)
    {
        if (!empty($user) && !empty($pass)){
            $db = new Database() ;
            $query = $db->query("SELECT * FROM `users` WHERE username='$user' AND password= '$pass'") ;
            $count = $query->rowCount() ;
            if ($count == 1) {
                echo 'you are now signed in ';
            }else {

                echo 'wrrong credentials ';
            }

        }else {
            die('Date Not Recieved ') ;
        }
    }

    public function encrypt($pass)
    {
        if (!empty($pass)){
            return md5(sha1(md5($pass))) ;
        }
    }

    public function clean($data)
    {
        if(!empty($data)){
            $data = trim(strip_tags(stripslashes($data))) ;
            return $data ;
        }
    }
}