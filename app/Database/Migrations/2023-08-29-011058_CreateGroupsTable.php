<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateGroupsTable extends Migration
{
    public function up()
    {
        // TODO field: id, name, user_id, created_at
        $this->forge->addField([
            'group_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true
            ],
            'slug' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true
            ],
            'mentor_user_id' => [
                'type' => 'INT',
                'constrain' => 5,
                'unsigned' => true
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'default' => date('Y-m-d H:i:s')
            ],
        ]);
        $this->forge->addKey('group_id', true);
        $this->forge->addForeignKey('mentor_user_id', 'users', 'user_id');
        $this->forge->createTable('groups', true);
    }

    public function down()
    {
        $this->forge->dropTable('groups', true);
    }
}
