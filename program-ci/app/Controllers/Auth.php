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
        if (!empty($this->session->get('pengguna'))) {
            return redirect()->to('/home');
        }
        return view('auth/login');
    }
    /**
     *------------------------------------------------------------------------------------
     *  GET Logout remove seso
     *------------------------------------------------------------------------------------
     */
    public function get_logout()
    {
        $this->session->remove('pengguna');
        return redirect()->to('/auth/login');
    }
    /**
     *------------------------------------------------------------------------------------
     *  POST Login, untuk masuk ke dalam aplikasi
     *------------------------------------------------------------------------------------
     */
    public function post_login()
    {
        $input = $this->request->getPost();
        $pengguna = $this->modelPengguna->getByEmail($input['email']);
        if (empty($pengguna)) {
            return redirect()->to('/auth/login');
        }
        $session_query = [
            'pengguna' => $pengguna['id_pengguna'],
            'login_at' => time(),
        ];
        $this->session->set($session_query);
        if (!empty($this->session->get('pengguna'))) {
            return redirect()->to('/home');
        }
        return redirect()->to('/auth/login');
    }
}
