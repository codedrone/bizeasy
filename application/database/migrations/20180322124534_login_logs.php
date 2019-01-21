<?php

class Migration_login_logs extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
            'iLoginId' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
             'vRole' => array(
                'type' => 'VARCHAR',
                'constraint' => 250
            ),
            'ePlatformType' => array(
                'type' => 'enum',
                'constraint' => array('App', 'Admin'),
                'default'=> "Admin"
            ),
            'vName' => array(
                'type' => 'VARCHAR',
                'constraint' => 250
            ),
           'vEmail' => array(
                'type' => 'VARCHAR',
                'constraint' => 250
            ),
            'vIPAddress' => array(
                'type' => 'VARCHAR',
                'constraint' => 250
            ),
            'vDeviceId' => array(
                'type' => 'VARCHAR',
                'constraint' => 250
            ),
            'dtLoginDateTime' => array(
                'type' => 'DATETIME'
            ),

            'dtLogoutDateTime' => array(
                'type' => 'DATETIME'
            )
        ));
        $this->dbforge->add_key('iLoginId', TRUE);
        $this->dbforge->create_table('login_logs');
    }

    public function down() {
        $this->dbforge->drop_table('login_logs');
    }

}