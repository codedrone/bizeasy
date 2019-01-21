<?php

class Migration_memberships extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
            'iMemberShipId' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'iShopId' => array(
                'type' => 'INT',
                'constraint' => 11,
            ),
            'vChargeId' => array(
                'type' => 'VARCHAR',
                'constraint' => 250
            ),
            'eMembershipType' => array(
                'type' => 'enum',
                'constraint' => array('Purchase', 'Monthly'),
                'default'=> "Purchase"
            ),
            'eMembershipName' => array(
                'type' => 'enum',
                'constraint' => array('One Time Purchase','Standard','Business','Advanced'),
                'default'=> "One Time Purchase"
            ),
            'eChargeStatus' => array(
                'type' => 'enum',
                'constraint' => array('Pending','Accepted','Active','Declined','Expired','Frozen','Cancelled'),
                'default'=> "Pending"
            ),
             'dPrice' => array(
                'type'=>'double',
                'constraint' => '10,2',
            ),
            'dStartDate' => array(
                'type' => 'DATE'
            ),

            'dEndDate' => array(
                'type' => 'DATE'
            ),
            'tAskReason' => array(
                'type' => 'TEXT',
            ),
            'dtCreatedDateTime' => array(
                'type' => 'DATETIME'
            ),

            'dtUpdatedDateTime' => array(
                'type' => 'DATETIME'
            ),
            'eMembershipStatus' => array(
                'type' => 'enum',
                'constraint' => array('Active', 'Pending', 'Cancel'),
                'default'=> "Active"
            )
        ));
        $this->dbforge->add_key('iMemberShipId', TRUE);
        $this->dbforge->create_table('memberships');
    }

    public function down() {
        $this->dbforge->drop_table('memberships');
    }

}