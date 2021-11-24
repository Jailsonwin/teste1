<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class EquipeMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
            'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name'           => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'description'          => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'users_id'          => [
                'type'           => 'INT',
                    'constraint'     => 11,
                    'unsigned'       => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('users_id','users','id');
        $this->forge->createTable('equipes');
    }

    public function down()
    {
        $this->forge->dropTable('equipes');
    }
}
