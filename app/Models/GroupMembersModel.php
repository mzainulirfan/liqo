<?php

namespace App\Models;

use CodeIgniter\Model;

class GroupMembersModel extends Model
{
    protected $table            = 'group_members';
    protected $primaryKey       = 'group_member_id';
    protected $allowedFields    = ['group_id', 'user_id', 'created_at'];
}
