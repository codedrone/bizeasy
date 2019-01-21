<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_wp_commentmeta extends CI_Migration {

	public function up() {

		## Create Table wp_commentmeta
		$this->dbforge->add_field("`meta_id` bigint(20) unsigned NOT NULL auto_increment primary key");
		$this->dbforge->add_key("meta_id",true);
		$this->dbforge->add_field("`comment_id` bigint(20) unsigned NOT NULL ");
		$this->dbforge->add_field("`meta_key` varchar(255) NULL ");
		$this->dbforge->add_field("`meta_value` longtext NULL ");
		$this->dbforge->create_table("wp_commentmeta", TRUE);
		$this->db->query('ALTER TABLE  `wp_commentmeta` ENGINE = InnoDB');
	 }

	public function down()	{
		### Drop table wp_commentmeta ##
		$this->dbforge->drop_table("wp_commentmeta", TRUE);

	}
}