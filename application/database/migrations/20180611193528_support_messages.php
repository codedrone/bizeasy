<?php

class Migration_support_messages extends CI_Migration {

    public function up() {
        $this->dbforge->drop_table('support_messages');
        $this->dbforge->add_field(array(
            'iTicketId' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
             'iShopId' => array(
                'type' => 'INT',
                'constraint' => 11
            ),
             'vName' => array(
                'type' => 'VARCHAR',
                'constraint' => 255
            ),
             'vEmail' => array(
                'type' => 'VARCHAR',
                'constraint' => 255
            ),
            'vSubject' => array(
                'type' => 'VARCHAR',
                'constraint' => 255
             ),
            'vContact' => array(
                'type' => 'VARCHAR',
                'constraint' => 25
            ),
            'tMessage' => array(
                'type' => 'TEXT',
            ),
            'dtCreatedDateTime' => array(
                'type' => 'DATETIME'
            ),

            'dtUpdatedDateTime' => array(
                'type' => 'DATETIME'
            )
        ));
        $this->dbforge->add_key('iTicketId', TRUE);
        $this->dbforge->create_table('support_messages');
    }

    public function down() {
        $this->dbforge->drop_table('support_messages');
    }

}