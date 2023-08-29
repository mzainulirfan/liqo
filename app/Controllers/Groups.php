<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GroupsModel;
use App\Models\UserRoleModel;
use App\Models\GroupMembersModel;
use App\Models\SchedulesModel;

class Groups extends BaseController
{
    private $groupModel;
    private $userRoleModel;
    private $memberModel;
    private $scheduleModel;

    public function __construct()
    {
        $this->groupModel = new GroupsModel();
        $this->userRoleModel = new UserRoleModel();
        $this->memberModel = new GroupMembersModel();
        $this->scheduleModel = new SchedulesModel();
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
        // dd($scheduleData);
        $data = [
            'title' => 'Detail group',
            'groupData' => $groupData,
            'memberGroup' => $memberGroupData,
            'scheduleData' => $scheduleData
        ];
        return view('groups/detail', $data);
    }
}
