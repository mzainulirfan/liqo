<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Users extends BaseController
{
    private $userModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Daftar User',
            'userData' => $this->userModel->findAll()
        ];

        return view('users/list', $data);
    }
    public function detail($usename)
    {
        $data = [
            'title' => 'Detail User'
        ];
        return view('users/detail', $data);
    }
}
