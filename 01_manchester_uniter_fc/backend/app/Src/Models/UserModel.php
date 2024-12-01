<?php

class User {
    private $name;
    private $last_name;
    private $address = ['full', 'city','country'];
    private $email;
    private $password;

    public function __construct($name,$last_name,$email,$password,...$address){
        $this->name = $name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->password = hash('md5',$password);
        $this->address = array_combine($this->address,$address);
    }

    public function getName(){
        return $this->name;
    }

    public function getLastName(){
        return $this->last_name;
    }

    public function getAddress(){
        return $this->address;
    }

    public function getEmail(){
        return $this->email;
    }

    private function getPassword(){
        return $this->password;
    }

}