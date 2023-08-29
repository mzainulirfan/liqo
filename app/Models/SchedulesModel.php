<?php

namespace App\Models;

use CodeIgniter\Model;

class SchedulesModel extends Model
{
    protected $table            = 'schedules';
    protected $primaryKey       = 'schedule_id';
    protected $allowedFields    = ['location', 'slug', 'description', 'group_id', 'date', 'start_at', 'finish_at'];
}
