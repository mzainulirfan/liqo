<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'user_id';
    protected $allowedFields    = ['user_fullname', 'user_username', 'user_phone_number', 'user_address', 'user_gender'];

    public function getByUsername($username)
    {
        return $this->table('users')->where('user_username', $username)->first();
    }
}
