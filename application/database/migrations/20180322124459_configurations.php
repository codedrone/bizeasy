<?php

class Migration_configurations extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
            'iConfigurationId' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),            
            'eSection' => array(
                'type' => 'enum',
                'constraint' => array('General','Email','Appearance','Payment','Social Media','App Settings'),
            ),
            'tTitle' => array(
                'type' => 'TEXT',
            )
            ,
            'vName' => array(
                'type' => 'VARCHAR',
                'constraint' => 250
            ),
            'eType' => array(
                'type' => 'enum',
                'constraint' => array('Textbox','Array','Image','Query'),
            ),
            'tExtra' => array(
                'type' => 'TEXT',
            )
            ,
            'vValue' => array(
                'type' => 'VARCHAR',
                'constraint' => 250
            ),
           
            'dtUpdatedDateTime' => array(
                'type' => 'DATETIME'
            )
        ));
        $this->dbforge->add_key('iConfigurationId', TRUE);
        $this->dbforge->create_table('configurations');
    }

    public function down() {
        $this->dbforge->drop_table('configurations');
    }

}