<?php

namespace App\Controllers;

class Dashboard extends BaseController
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
     *  INDEX dari Dashboard Controller
     *------------------------------------------------------------------------------------
     */
    public function index()

    {
        $data = [
            'judul_halaman' => 'Dasbor',
        ];
        return view('dashboard/index', $data);
    }
}
