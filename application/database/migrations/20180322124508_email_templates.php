<?php

class Migration_email_templates extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
            'iEmailTemplateId' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),            
            'vEmailCode' => array(
                'type' => 'VARCHAR',
                'constraint' => 250
            ),
            'vFromName' => array(
                'type' => 'VARCHAR',
                'constraint' => 250
            ),
            'vFromEmail' => array(
                'type' => 'VARCHAR',
                'constraint' => 250
            ),
            'vEmailSubject' => array(
                'type' => 'VARCHAR',
                'constraint' => 250
            ),
             'tEmailMessage' => array(
                'type' => 'TEXT',
            )
            ,
            'dtCreatedDateTime' => array(
                'type' => 'DATETIME'
            ),

            'dtUpdatedDateTime' => array(
                'type' => 'DATETIME'
            ),
            'eStatus' => array(
                'type' => 'enum',
                'constraint' => array('None','Archive'),
                'default'=> "None"
            )
        ));
        $this->dbforge->add_key('iEmailTemplateId', TRUE);
        $this->dbforge->create_table('email_templates');
    }

    public function down() {
        $this->dbforge->drop_table('email_templates');
    }

}