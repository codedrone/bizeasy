<?php

class Migration_shops extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
           'iShopId' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'vName' => array(
                'type' => 'VARCHAR',
                'constraint' => 255
            ),
            'vLogo' => array(
                'type' => 'VARCHAR',
                'constraint' => 255
            ),
            'vSplash1' => array(
                'type' => 'VARCHAR',
                'constraint' => 255
            ),
            'vSplash2' => array(
                'type' => 'VARCHAR',
                'constraint' => 255
            ),
            'vSplash3' => array(
                'type' => 'VARCHAR',
                'constraint' => 255
            ),
            'vHeaderColor' => array(
                'type' => 'VARCHAR',
                'constraint' => 255
            ),
            'vBodyColor' => array(
                'type' => 'VARCHAR',
                'constraint' => 255
            ),
            'vButtonColor' => array(
                'type' => 'VARCHAR',
                'constraint' => 255
            ),
            'vButtonFontColor' => array(
                'type' => 'VARCHAR',
                'constraint' => 255
            ),
            'vThemeColor' => array(
                'type' => 'VARCHAR',
                'constraint' => 255
            ),
            'vDomain' => array(
                'type' => 'VARCHAR',
                'constraint' => 255
            ),
            'vShopifyDomain' => array(
                'type' => 'VARCHAR',
                'constraint' => 255
            ),
            'vCurrency' => array(
                'type' => 'VARCHAR',
                'constraint' => 255
            ),
            'vToken' => array(
                'type' => 'VARCHAR',
                'constraint' => 255
            ),
            'vMoneyFormat' => array(
                'type' => 'VARCHAR',
                'constraint' => 255
            ),
            'vContactName' => array(
                'type' => 'VARCHAR',
                'constraint' => 255
            ),
            'vContactEmail' => array(
                'type' => 'VARCHAR',
                'constraint' => 255
            ),
            'vContactPhoneNo' => array(
                'type' => 'VARCHAR',
                'constraint' => 255
            ),
            'tContactAddress' => array(
                'type' => 'TEXT',
            ),
            'vContactCity' => array(
                'type' => 'VARCHAR',
                'constraint' => 255
            ),
            'vContactProvince' => array(
                'type' => 'VARCHAR',
                'constraint' => 255
            ),
            'vContactCountry' => array(
                'type' => 'VARCHAR',
                'constraint' => 255
            ),
            'vContactZipCode' => array(
                'type' => 'VARCHAR',
                'constraint' => 255
            ),
            'vContactSource' => array(
                'type' => 'VARCHAR',
                'constraint' => 255
            ),
            'eDesignType' => array(
                'type' => 'enum',
                'constraint' => array('Custom', 'Generated'),
                'default'=> "Generated"
            ),
            'eCustomizeType' => array(
                'type' => 'enum',
                'constraint' => array('1', '0'),
                'default'=> "1"
            ),
            'dtCreatedDateTime' => array(
                'type' => 'DATETIME'
            ),

            'dtUpdatedDateTime' => array(
                'type' => 'DATETIME'
            ),
            'eStatus' => array(
                'type' => 'enum',
                'constraint' => array('Pending', 'Active', 'Inactive', 'Archive'),
                'default'=> "Pending"
            )


        ));
        $this->dbforge->add_key('iShopId', TRUE);
        $this->dbforge->create_table('shops');
    }

    public function down() {
        $this->dbforge->drop_table('shops');
    }

}