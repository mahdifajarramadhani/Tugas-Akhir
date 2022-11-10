<?php

namespace App\Controllers;

class Auth extends BaseController
{
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
        dd($input);
    }
}
