<?php

class Migration_faq extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
            'iFAQId' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
             'tQuestion' => array(
                'type' => 'TEXT',
            ),            
             'tAnswer' => array(
                'type' => 'TEXT',
            ),
            'dtCreatedDateTime' => array(
                'type' => 'DATETIME'
            ),
            'dtUpdatedDateTime' => array(
                'type' => 'DATETIME'
            ),
            'eStatus' => array(
                'type' => 'enum',
                'constraint' => array('Active','Inactive','Archive'),
                'default'=> "Active"
            )
        ));
        $this->dbforge->add_key('iFAQId', TRUE);
        $this->dbforge->create_table('faq');
    }

    public function down() {
        $this->dbforge->drop_table('faq');
    }

}