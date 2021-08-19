<?php

namespace App\Models;

use CodeIgniter\Model;

class UsulanSmaModel extends Model
{
    protected $table      = 'sma';
    // protected $primaryKey = 'id';
    protected $allowedFields = [
        'no', 'wilayah', 'sekolah_induk', 'sekolah_mitra'
    ];

    public function getSurat($wilayah = false, $sekolah_induk = false, $sekolah_mitra = false)
    {
        if ($wilayah) {
            return $this->findAll();
        }
        if ($sekolah_induk) {
            return $this->findAll();
        }
        if ($sekolah_mitra) {
            return $this->findAll();
        }
    }
}
