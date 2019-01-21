<?php
 
class Migration_administrators extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
          'iAdminId' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'vName' => array(
                'type' => 'VARCHAR',
                'constraint' => 250
            )
            ,
            'vEmail' => array(
                'type' => 'VARCHAR',
                'constraint' => 250
            ),
            'vPassword' => array(
                'type' => 'VARCHAR',
                'constraint' => 250
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
                'constraint' => array('Active','Inactive','Archive'),
                'default'=> "Active"
            )
        ));
        $this->dbforge->add_key('iAdminId', TRUE);
        $this->dbforge->create_table('administrators');
    }

    public function down() {
        $this->dbforge->drop_table('administrators');
    }

}