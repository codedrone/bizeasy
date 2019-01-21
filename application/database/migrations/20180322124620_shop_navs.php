<?php

class Migration_shop_navs extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
            'iShopNavId' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
             'iShopId' => array(
                'type' => 'INT',
                'constraint' => 11
            ),
            'iParentId' => array(
                'type' => 'INT',
                'constraint' => 11
            ),
            'vName' => array(
                'type' => 'VARCHAR',
                'constraint' => 255
            ),
            'vHandle' => array(
                'type' => 'VARCHAR',
                'constraint' => 255
            ),
            'eNavType' => array(
                'type' => 'enum',
                'constraint' => array('Page', 'Col'),
                'default'=> "Page"
            )
        ));
        $this->dbforge->add_key('iShopNavId', TRUE);
        $this->dbforge->create_table('shop_navs');
    }

    public function down() {
        $this->dbforge->drop_table('shop_navs');
    }

}