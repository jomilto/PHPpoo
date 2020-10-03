<?php

namespace App;

class User {

    private $name;
    private $email;

    public function __construct(String $name,String $email){
        $this->name = $name;
        $this->email = $email;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }
}