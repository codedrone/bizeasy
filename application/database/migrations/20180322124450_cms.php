<?php

class Migration_cms extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
            'iCMSId' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'tTitle' => array(
                'type' => 'TEXT',
            )
            ,
            'vCode' => array(
                'type' => 'VARCHAR',
                'constraint' => 250
            ),
            'tContent' => array(
                'type' => 'TEXT',
            )
            ,
            'vOTP' => array(
                'type' => 'VARCHAR',
                'constraint' => 250
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
        $this->dbforge->add_key('iCMSId', TRUE);
        $this->dbforge->create_table('cms');
    }

    public function down() {
        $this->dbforge->drop_table('cms');
    }

}