<?php

class Migration_notifications extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
            'iNotificationId' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'iShopId' => array(
                'type' => 'INT',
                'constraint' => 11,
            ),
            'tTitle' => array(
                'type' => 'TEXT',
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
        $this->dbforge->add_key('iNotificationId', TRUE);
        $this->dbforge->create_table('notifications');
    }

    public function down() {
        $this->dbforge->drop_table('notifications');
    }

}