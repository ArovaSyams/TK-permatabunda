<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model
{
    protected $table = 'contact-us';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'email-hp', 'role', 'pesan'];

    public function searchE($emailHp)
    {
        return $this->table('contact-us')->like('email-hp', $emailHp);
    }

    public function searchRole($role)
    {
        return $this->table('contact-us')->like('role', $role);
    }    

    public function searchDouble($emailHp, $role)
    {
        return $this->table('contact-us')->like('role', $role)->orLike('email-hp', $emailHp);
    }    
}