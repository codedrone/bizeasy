<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_wp_term_relationships extends CI_Migration {

	public function up() {

		## Create Table wp_term_relationships
		$this->dbforge->add_field("`object_id` bigint(20) unsigned NOT NULL");
		$this->dbforge->add_key("object_id",true);
		$this->dbforge->add_field("`term_taxonomy_id` bigint(20) unsigned NOT NULL ");
		$this->dbforge->add_key("term_taxonomy_id",true);
		$this->dbforge->add_field("`term_order` int(11) NOT NULL ");
		$this->dbforge->create_table("wp_term_relationships", TRUE);
		$this->db->query('ALTER TABLE  `wp_term_relationships` ENGINE = InnoDB');
	 }

	public function down()	{
		### Drop table wp_term_relationships ##
		$this->dbforge->drop_table("wp_term_relationships", TRUE);

	}
}