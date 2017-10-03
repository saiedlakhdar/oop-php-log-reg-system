<?php

/**
 * Created by SAIED-LOAI-LAKHDAR.
 * User: DjelfaNetwork
 * Date: 01-10-2017
 * Time: 4:14
 * TileName : Database.php
 */
namespace DN\CLASSES;

class Database
{
    private $db_host   = DB_HOST;
    private $db_name   = DB_NAME;
    private $db_user   = DB_USER;
    private $db_pass   = DB_PASS;
    private $db_driver = DB_DRIVER;
    // get instance from PDO classes
    private $instance = NULL ;
    public function __construct()
    {
        if ($this->instance == NULL ) {
            try{
                $this->instance = new \PDO(''.$this->db_driver.':host='.$this->db_host.';dbname='.$this->db_name.'',$this->db_user,$this->db_pass) ;
                $this->instance->setAttribute(\PDO::ATTR_ERRMODE , \PDO::ERRMODE_EXCEPTION) ;
                $this->instance->query('SET names UTF8 ; SET CHARACTER SET UTF8');
            }catch (\PDOException $e){
               echo 'Connection Failed :' . $e->getMessage() .'<br>';
            }

        }
    }

    public function query($sql)
    {
        $query = $this->instance->prepare($sql);
        $query->execute() ;
        return $query ;
    }


}