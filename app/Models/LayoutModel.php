<?php

namespace App\Models;

use CodeIgniter\Model;

class LayoutModel extends Model
{
    protected $table = 'galeri';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama_foto', 'keterangan', 'foto'];
}