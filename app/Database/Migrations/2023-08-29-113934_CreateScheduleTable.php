<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateScheduleTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'schedule_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true
            ],
            'slug' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true
            ],
            'location' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true
            ],
            'descriptioan' => [
                'type' => 'text',
                'null' => true
            ],
            'group_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true
            ],
            'date_at' => [
                'type' => 'DATETIME',
                'default' => date('Y-m-d H:i:s')
            ],
            'start_at' => [
                'type' => 'TIME',
                'default' => '00:00:00'
            ],
            'finish_at' => [
                'type' => 'TIME',
                'default' => '00:00:00'
            ]
        ]);
        $this->forge->addKey('schedule_id', true);
        $this->forge->addForeignKey('group_id', 'groups', 'group_id');
        $this->forge->createTable('schedules', true);
    }

    public function down()
    {
        $this->forge->createTable('schedules', true);
    }
}
