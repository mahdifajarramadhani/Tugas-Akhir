<?php

namespace App\Controllers;

use App\Models\ModelPengguna;

class Auth extends BaseController
{
    protected $modelPengguna;


    public function __construct()
    {
        $this->modelPengguna = new ModelPengguna();
    }
    /**
     *------------------------------------------------------------------------------------
     *  GET Index Auth
     *------------------------------------------------------------------------------------
     */
    public function index()
    {
        return redirect()->to('/auth/login');
    }
    /**
     *------------------------------------------------------------------------------------
     *  GET Halaman Login
     *------------------------------------------------------------------------------------
     */
    public function get_login()
    {
        return view('auth/login');
    }
    /**
     *------------------------------------------------------------------------------------
     *  POST Login, untuk masuk ke dalam aplikasi
     *------------------------------------------------------------------------------------
     */
    public function post_login()
    {
        $input = $this->request->getPost();
        $pengguan = $this->modelPengguna->getByEmail($input['email']);
        if (empty($pengguan)) {
            return redirect()->to('/auth/login');
        }
        d($input);
        dd($pengguan);
    }
    
}
