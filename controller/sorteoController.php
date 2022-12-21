<?php

require('model/User.php');

class SorteoController {
    public $users = [];

    public function __constructor()
    {
        $user_1 = new User("usuario1", 1234, 2);
        $user_2 = new User("Jonas", 4321, 1);
    }

    public function loginPage() {
        require('view/login.php');
    }

    public function mainPage() {
        require('view/mainPage.php');
    }

    // public function verify($user, $pass) {
    //     if ($user ==)
    // }
}