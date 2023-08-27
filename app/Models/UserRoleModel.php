<?php

namespace App\Models;

use CodeIgniter\Model;

class UserRoleModel extends Model
{
    protected $table            = 'user_roles';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['user_id', 'role_id'];


    public function getUserByRoleId($roleId)
    {
        return $this->where('role_id', $roleId)
            ->join('users', 'user_roles.user_id=users.user_id')
            ->findAll();
    }
}
