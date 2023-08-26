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
        $cache = \Config\Services::cache();

        // Contoh penggunaan cache
        if ($userData = $cache->get('userDataCache')) {
            // Data ditemukan di cache
            $cachedData = true;
        } else {
            // Data tidak ditemukan di cache, ambil dari sumber asli dan simpan ke cache
            $userData = $this->userModel->findAll();
            $cache->save('userDataCache', $userData, 30); // Simpan dalam cache selama 1 jam (3600 detik)
            $cachedData = false;
        }

        $today = date('Y-m-d');
        $data = [
            'title' => 'Daftar User',
            'userData' => $userData,
            'countAllUser' => $this->userModel->countAllResults(),
            'countAllUserToday' => $this->userModel->countUserToday($today),
            'cachedData' => $cachedData,
        ];
        return view('users/list', $data);
    }
    public function create()
    {
        $data = [
            'title' => 'Create user'
        ];
        return view('users/create', $data);
    }
    public function save()
    {
        $validationRules  = [
            'fullname' => 'required|min_length[5]|is_unique[users.user_fullname]',
            'phone_number' => 'required|numeric|min_length[10]',
            'gender' => 'required',
            'address' => 'required|min_length[5]',
        ];

        $username =  str_replace(' ', '', $this->request->getVar('fullname'));
        $data = [
            'user_fullname' =>  $this->request->getVar('fullname'),
            'user_username' => $username,
            'user_phone_number' =>  $this->request->getVar('phone_number'),
            'user_gender' =>  $this->request->getVar('gender'),
            'user_address' =>  $this->request->getVar('address'),
            'created_at' => date("Y-m-d H:i:s")
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->to('users/create')->withInput()->with('validation', $this->validator);
        }

        $this->userModel->save($data);

        session()->setFlashdata('success', 'Data <a href="users/' . $username . '" class="text-uppercase"><strong>' . $username . '</strong></a> successfully created!');
        return redirect()->to('users');
    }

    public function detail($username)
    {
        $userData = $this->userModel->getByUsername($username);

        if ($userData) {
            $data = [
                'title' => 'Detail ' . $userData['user_username'],
                'userData' => $userData
            ];
            return view('users/detail', $data);
        } else {
            return view('errors/notFound', ['title' => 'Data not found!']);
        }
    }

    public function edit($username)
    {
        $userData = $this->userModel->getByUsername($username);

        if ($userData) {
            $data = [
                'title' => 'Detail ' . $userData['user_username'],
                'userData' => $userData
            ];
            return view('users/edit', $data);
        } else {
            return view('errors/notFound', ['title' => 'Data not found!']);
        }
    }
    public function update($username)
    {
        $userData = $this->userModel->getByUsername($username);

        $fullname = $userData['user_fullname'];
        $fullnameNew =  $this->request->getVar('fullname');

        if ($fullname == $fullnameNew) {
            $fullnameRole = 'required';
        } else {
            $fullnameRole = 'required|min_length[5]|is_unique[users.user_fullname]';
        }
        // dd($fullnameRole, $fullname, $fullnameNew);
        $validationRules  = [
            'fullname' => $fullnameRole,
            'phone_number' => 'required|numeric|min_length[10]',
            'gender' => 'required',
            'address' => 'required|min_length[5]',
        ];

        $userId = $userData['user_id'];
        $username =  str_replace(' ', '', $this->request->getVar('fullname'));

        $data = [
            'user_id' => $userId,
            'user_fullname' =>  $this->request->getVar('fullname'),
            'user_username' => $username,
            'user_phone_number' =>  $this->request->getVar('phone_number'),
            'user_gender' =>  $this->request->getVar('gender'),
            'user_address' =>  $this->request->getVar('address'),
            'updated_at' => date("Y-m-d H:i:s")
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        $this->userModel->save($data);

        session()->setFlashdata('success', 'Data <a href="' . $username . '" class="text-uppercase"><strong>' . $username . '</strong></a> successfully updated!');
        return redirect()->to('users/' . $username);
    }

    public function delete($userId)
    {
        $this->userModel->delete($userId);

        session()->setFlashdata('success', 'Data successfully deleted!');
        return redirect()->to('users');
    }
}
