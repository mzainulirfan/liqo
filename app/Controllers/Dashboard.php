<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'My Dashboard Page'
        ];
        return view('layout/default', $data);
    }
}
