<?php

namespace App\Models;

use CodeIgniter\Model;

class GroupsModel extends Model
{
    protected $table            = 'groups';
    protected $primaryKey       = 'group_id';
    protected $allowedFields    = ['name', 'slug', 'mentor_user_id', 'created_at'];

    public function findAllGroup()
    {
        return $this->join('users', 'groups.mentor_user_id=users.user_id')->findAll();
    }
}
