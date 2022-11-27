<?php

function check_login()
{
    $session = \Config\Services::session();
    if (empty($session->get('pengguna'))) {
        header('Location: ' . base_url() . '/auth/login');
        exit;
    }
    $id_pengguna = $session->get('pengguna');
    $db = db_connect();
    $pengguna = $db->query("SELECT * FROM pengguna WHERE id_pengguna = '$id_pengguna'")->getRowArray();
    if (empty($pengguna)) {
        header('Location: ' . base_url() . '/auth/login');
        exit;
    }
    return $pengguna;
}
