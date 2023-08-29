<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'user_id';
    protected $allowedFields    = ['user_fullname', 'user_username', 'user_phone_number', 'user_address', 'user_gender', 'created_at', 'updated_at'];
    
    public function getByUsername($username)
    {
        return $this->where('user_username', $username)->first();
    }
    public function search($keyword)
    {
        return $this->table('users')->like('user_fullname', $keyword)->orLike('user_username', $keyword);
    }
    public function countUserToday($today)
    {
        return $this->where('DATE(created_at)', $today)->countAllResults();
    }
}
