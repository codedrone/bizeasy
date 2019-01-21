<?php

class Migration_newsletters extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
            'iNewsLetterId' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'vName' => array(
                'type' => 'VARCHAR',
                'constraint' => 250
            ),
            'vEmail' => array(
                'type' => 'VARCHAR',
                'constraint' => 250
            ),
            'dtCreatedDateTime' => array(
                'type' => 'DATETIME'
            ),
            'dtUpdatedDateTime' => array(
                'type' => 'DATETIME'
            ),
            'eStatus' => array(
                'type' => 'enum',
                'constraint' => array('Active', 'Inactive', 'Archive'),
                'default'=> "Active"
            )

        ));
        $this->dbforge->add_key('iNewsLetterId', TRUE);
        $this->dbforge->create_table('newsletters');
    }

    public function down() {
        $this->dbforge->drop_table('newsletters');
    }

}