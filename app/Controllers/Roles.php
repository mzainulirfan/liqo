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
        $name = $this->request->getVar('name');
        $randomCombination = generateRandomString(20); // Ganti 12 dengan panjang yang Anda inginkan
        $slug = url_title($name, '-', true) . '-' . $randomCombination;
        $valiadationRoles = [
            'name' => 'required|is_unique[roles.name]',
            'description' => 'required|min_length[5]'
        ];

        $data = [
            'name' =>  $name,
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
    public function update()
    {
        // cek name
        $roleId =  $this->request->getVar('id');
        $roleData = $this->roleModel->where('id', $roleId)->first();
        $roleNameExist = $roleData['name'];

        $roleName =  $this->request->getVar('name');
        $description =  $this->request->getVar('description');

        if ($roleNameExist == $roleName) {
            $rolesName = 'required';
        } else {
            $rolesName = 'required|is_unique[roles.name]';
        }
        $valiadationRoles = [
            'name' => $rolesName,
            'description' => 'required'
        ];

        $data = [
            'id' => $roleId,
            'name' => $roleName,
            'description' => $description
        ];
        if (!$this->validate($valiadationRoles)) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput()->with('validator', $this->validator);
        }

        $this->roleModel->save($data);
        session()->setFlashdata('success', 'Role updated successfully!');
        return redirect()->to('roles');
    }
    public function delete()
    {
        $roleId = $this->request->getVar('id');
        $this->roleModel->delete($roleId);

        session()->setFlashdata('success', 'Data successfully deleted!');
        return redirect()->to('roles');
    }
}
