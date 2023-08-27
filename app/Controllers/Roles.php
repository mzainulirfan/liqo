<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\models\RolesModel;
use App\models\UserRoleModel;

class Roles extends BaseController
{
    private $roleModel;
    private $userRoleModel;
    public function __construct()
    {
        $this->roleModel = new RolesModel();
        $this->userRoleModel = new UserRoleModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Role list',
            'roleData' => $this->roleModel->findAll()
        ];
        return view('roles/list', $data);
    }
    public function detail($slug)
    {
        $roleData = $this->roleModel->where('slug', $slug)->first();
        $roleId = $roleData['id'];
        $userRoleData = $this->userRoleModel->getUserByRoleId($roleId);
        $data = [
            'title' => 'Detail role',
            'roleData' => $roleData,
            'userRoleData' => $userRoleData
        ];
        return view('roles/detail', $data);
    }

    public function save()
    {
        $slug = url_title($this->request->getVar('name'));
        $valiadationRoles = [
            'name' => 'required|is_unique[roles.name]',
            'description' => 'required|min_length[5]'
        ];

        $data = [
            'name' =>  $this->request->getVar('name'),
            'slug' =>  $slug,
            'description' =>  $this->request->getVar('description')
        ];
        if (!$this->validate($valiadationRoles)) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->to('roles')->withInput()->with('validation', $this->validator);
        }
        $this->roleModel->save($data);
        session()->setFlashdata('success', 'Role saved successfully!');
        return redirect()->to('roles');
    }
}
