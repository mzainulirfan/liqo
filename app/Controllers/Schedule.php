<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Schedule extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Schedule liqo'
        ];
        return view('schedules/list', $data);
    }
    public function create()
    {
        $data = [
            'title' => 'create schedule'
        ];
        return view('schedules/create', $data);
    }
}
