<?php

namespace App\Controllers;

class Home extends BaseController
{
    protected $pengguna;
    /**
     *------------------------------------------------------------------------------------
     *  METODE YANG DIJALANKAN DI SEMUA METHOD LAINNYA
     *------------------------------------------------------------------------------------
     */
    public function __construct()
    {
        helper('app');
        $this->pengguna = check_login();
    }
    /**
     *------------------------------------------------------------------------------------
     *  INDEX dari Home Controller
     *------------------------------------------------------------------------------------
     */
    public function index()
    {

        dd($this->pengguna);
    }
}
