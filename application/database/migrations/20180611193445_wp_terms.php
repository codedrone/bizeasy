<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_wp_terms extends CI_Migration {

	public function up() {

		## Create Table wp_terms
		$this->dbforge->add_field("`term_id` bigint(20) unsigned NOT NULL auto_increment primary key");
		$this->dbforge->add_key("term_id",true);
		$this->dbforge->add_field("`name` varchar(200) NOT NULL ");
		$this->dbforge->add_field("`slug` varchar(200) NOT NULL ");
		$this->dbforge->add_field("`term_group` bigint(10) NOT NULL ");
		$this->dbforge->create_table("wp_terms", TRUE);
		$this->db->query('ALTER TABLE  `wp_terms` ENGINE = InnoDB');
	 }

	public function down()	{
		### Drop table wp_terms ##
		$this->dbforge->drop_table("wp_terms", TRUE);

	}
}