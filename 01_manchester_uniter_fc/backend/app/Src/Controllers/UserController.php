<?php

require_once __DIR__.'/../Services/UserService.php';

class UserController{
    static public $instance = null;
    private$requestMethod;
    private $userService;

    static public function getInstance(){

        if(self::$instance == null){
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function __construct(){
        $this->userService = UserService::getInstance();
    }

    public function processRequest(){
        $this->requestMethod = $_SERVER['REQUEST_METHOD'];

        if($this->requestMethod == 'GET'){
            $this->getMethod();
        }else{
            echo "Wrong Method\n";
        }
    }

    //Metodos HTTP
    private function getMethod(){

        $this->getUser();
    }

    private function getUser(){

        try{

            $user = $this->userService->getUsersById();

            if($user){

                //print_r($user);

                var_dump( json_encode($user));

            }else{

                return false;

            }

        }catch(Exception $e){

            echo "Something went wrong" ;

        }

    }

}