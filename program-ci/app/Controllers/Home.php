<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $password = password_hash('admin', PASSWORD_DEFAULT);
        dd($password);
    }
}
 