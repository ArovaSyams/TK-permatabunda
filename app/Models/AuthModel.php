<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    protected $table = 'admin';
    protected $allowedFields = ['username', 'password'];
}
