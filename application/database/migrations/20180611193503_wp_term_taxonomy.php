<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_wp_term_taxonomy extends CI_Migration {

	public function up() {

		## Create Table wp_term_taxonomy
		$this->dbforge->add_field("`term_taxonomy_id` bigint(20) unsigned NOT NULL auto_increment primary key");
		$this->dbforge->add_key("term_taxonomy_id",true);
		$this->dbforge->add_field("`term_id` bigint(20) unsigned NOT NULL ");
		$this->dbforge->add_field("`taxonomy` varchar(32) NOT NULL ");
		$this->dbforge->add_field("`description` longtext NOT NULL ");
		$this->dbforge->add_field("`parent` bigint(20) unsigned NOT NULL ");
		$this->dbforge->add_field("`count` bigint(20) NOT NULL ");
		$this->dbforge->create_table("wp_term_taxonomy", TRUE);
		$this->db->query('ALTER TABLE  `wp_term_taxonomy` ENGINE = InnoDB');
	 }

	public function down()	{
		### Drop table wp_term_taxonomy ##
		$this->dbforge->drop_table("wp_term_taxonomy", TRUE);

	}
}