<?php

namespace App\Models;

use CodeIgniter\Model;

class GalleryModel extends Model
{
    protected $table      = 'gallery';
    protected $allowedFields = [
        'img'
    ];

    public function getSurat($img = false)
    {
        if ($img) {
            return $this->findAll();
        }
    }
}
