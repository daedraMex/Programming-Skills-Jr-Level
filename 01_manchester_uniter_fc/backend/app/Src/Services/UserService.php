<?php

require_once __DIR__.'/../db.php';

class UserService {
    static public $instance = null;

    static public function getInstance(){

        if(self::$instance == null){
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function getUsersById($id=null){

        $query = "SELECT * FROM users WHERE id=1";

        $db = Db::getInstance();

        try{

            $stmt = $db->prepare($query);

            if($stmt->execute()){

                return $stmt->fetch(PDO::FETCH_ASSOC);
    
            }else{
                
                return false;
            }

        }catch(PDOException $e){

            echo $db->errorInfo();
        }

    }



}