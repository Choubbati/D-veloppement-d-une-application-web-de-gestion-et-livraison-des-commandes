<?php

abstract class User {
    public $id;
    public $name;
    public $email;
    public $phone;
    public $password;
    public $role;


    public function __construct($id, $name, $email, $phone, $password, $role) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->password = $password;
        $this->role = $role;
    }

    public function getRole(){
        return $this->role;
    }

    abstract public function redirectToDashboard();
}
