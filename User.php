<?php
    class User
    {
        public $username;
        public $password;

        public function login(){
            return "$this->username berhasil login";
        }
    }
?> 