<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateGroupMembersTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'group_member_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'group_id' => [
                'type' => 'INT',
                'constraint' => '5',
                'unsigned' => true
            ],
            'user_id' => [
                'type' => 'INT',
                'constraint' => '5',
                'unsigned' => true
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'default' => date('Y-m-d H:i:s')
            ]
        ]);
        $this->forge->addKey('group_member_id', true);
        $this->forge->addForeignKey('user_id', 'users', 'user_id');
        $this->forge->addForeignKey('group_id', 'groups', 'group_id');
        $this->forge->createTable('group_members', true);
    }

    public function down()
    {
        $this->forge->dropTable('group_members', true);
    }
}
