<?php

class Db {

    static private $host ='127.0.0.1';
    static private $dbname='manchesterDatabase';
    static private $port ='9090';
    static private $username='root';
    static private $pass='1234567890';

    static private $db=null;

    static public function getInstance(){
        if(self::$db == null){

            try{
                self::$db = new PDO("mysql:host=".self::$host.";dbname=".self::$dbname.";charset=utf8mb4;port=".self::$port,self::$username,self::$pass);

            }catch(PDOException $e){

                echo $e;
                
            }
        }
        
        return self::$db;

    }

}





