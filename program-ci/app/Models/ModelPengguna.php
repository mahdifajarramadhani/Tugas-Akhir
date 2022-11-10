<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPengguna extends Model
{
    protected $table = 'pengguna';
    protected $primaryKey = 'id_pengguna';
    protected $allowedFields = [
        'email', 'password', 'nama_lengkap',  'nomor_telepon',
    ];
    protected $useSoftDeletes = true;
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    function getByEmail($email = null)
    {
        if (empty($email)) {
            return [];
        }
        return $this->db->query("SELECT * FROM pengguna WHERE email = '$email'")->getRowArray();
    }
}
