<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GroupsModel;
use App\Models\UserRoleModel;
use App\Models\GroupMembersModel;
use App\Models\SchedulesModel;
use App\Models\UserModel;

class Groups extends BaseController
{
    private $groupModel;
    private $userRoleModel;
    private $memberModel;
    private $scheduleModel;
    private $userModel;

    public function __construct()
    {
        $this->groupModel = new GroupsModel();
        $this->userRoleModel = new UserRoleModel();
        $this->memberModel = new GroupMembersModel();
        $this->scheduleModel = new SchedulesModel();
        $this->userModel = new UserModel();
    }
    public function index()
    {
        $groupData = $this->groupModel->findAllGroup(); // get all data group join with usersTable
        $dataRoleByMentor = $this->userRoleModel->getByRoleIdMentor();
        $data = [
            'title' => 'Group',
            'groupData' => $groupData,
            'dataMentor' => $dataRoleByMentor
        ];
        return view('groups/list', $data);
    }
    public function save()
    {
        $name =  $this->request->getVar('name');
        $randomCombination = generateRandomString(20); // Ganti 12 dengan panjang yang Anda inginkan
        $slug = url_title($name, '-', true) . '-' . $randomCombination;
        $validationRoles = [
            'name' => 'required|is_unique[groups.name]'
        ];
        $data = [
            'name' =>  $name,
            'mentor_user_id' =>  $this->request->getVar('mentor_id'),
            'slug' => $slug
        ];

        if (!$this->validate($validationRoles)) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->to('groups')->withInput()->with('validation', $this->validator);
        }

        $this->groupModel->save($data);
        session()->setFlashdata('success', 'Group saved successfully!');
        return redirect()->to('groups');
    }
    public function detail($slug)
    {
        $groupData = $this->groupModel->where('slug', $slug)->join('users', 'users.user_id=groups.mentor_user_id')->first();
        $groupId = $groupData['group_id'];
        $memberGroupData = $this->memberModel->where('group_id', $groupId)->join('users', 'users.user_id=group_members.user_id')->findAll();
        $scheduleData = $this->scheduleModel->where('group_id', $groupId)->findAll();
        $userData = $this->userRoleModel->where('role_id', 2)->join('users', 'users.user_id=user_roles.user_id')->findAll();
        // dd($scheduleData);
        $data = [
            'title' => 'Detail group',
            'groupData' => $groupData,
            'memberGroup' => $memberGroupData,
            'scheduleData' => $scheduleData,
            'userData' => $userData
        ];
        return view('groups/detail', $data);
    }
    public function update()
    {
        $groupName =  $this->request->getVar('name');
        $groupId =  $this->request->getVar('id');
        $groupData = $this->groupModel->where('group_id', $groupId)->first();
        $groupNameExist = $groupData['name'];

        if ($groupNameExist == $groupName) {
            $roleName = 'required';
        } else {
            $roleName = 'required|is_unique[roles.name]';
        }

        $valiadationRoles = [
            'name' => $roleName
        ];

        if (!$this->validate($valiadationRoles)) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput()->with('validator', $this->validator);
        }

        $data = [
            'group_id' => $groupId,
            'name' =>  $this->request->getVar('name')
        ];

        $this->groupModel->save($data);

        session()->setFlashdata('success', 'Group saved successfully!');
        return redirect()->to('groups');
    }

    public function addToInvite($userId, $slug)
    {
        $user = $this->userModel->where('user_id', $userId)->first();
        $userInvite = [
            'user_id' => $user['user_id'],
            'user_fullname' => $user['user_fullname']
        ];
        session()->set('userInvite', $userInvite);
        $userInvite = session('userInvite');
        dd($userInvite);

        return redirect()->to('/groups/' . $slug)->with('success', 'User information added to invite.');
    }
}
