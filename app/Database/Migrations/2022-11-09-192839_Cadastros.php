<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Cadastros extends Migration
{
    public function up()
    {
        //Configurações para criar a tabela
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => true
            ],
            'nome' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false
            ],
            'telefone' => [
                'type' => 'VARCHAR',
                'constraint' => 14,
                'null' => false
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false
            ]
        ]);

        //criar a chave primaria (PK) da tabela
        $this->forge->addPrimaryKey('id');

        //Criar a tabela
        $this->forge->createTable('cadastros', true);
    }

    public function down()
    {
        //Basicamente excluir a tabela (DROP)
        $this->forge->dropTable('cadastros');
    }
}
