<?php

namespace App\Models;

use CodeIgniter\Model;

class BeritaModel extends Model
{
    protected $table = 'berita';
    protected $useTimestamps = true;
    protected $allowedFields = ['judul_berita', 'highlight', 'paragraf_1', 'paragraf_2', 'paragraf_3', 'paragraf_4', 'paragraf_5', 'foto'];
}
