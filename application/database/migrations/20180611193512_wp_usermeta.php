<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_wp_usermeta extends CI_Migration {

	public function up() {

		## Create Table wp_usermeta
		$this->dbforge->add_field("`umeta_id` bigint(20) unsigned NOT NULL auto_increment primary key");
		$this->dbforge->add_key("umeta_id",true);
		$this->dbforge->add_field("`user_id` bigint(20) unsigned NOT NULL ");
		$this->dbforge->add_field("`meta_key` varchar(255) NULL ");
		$this->dbforge->add_field("`meta_value` longtext NULL ");
		$this->dbforge->create_table("wp_usermeta", TRUE);
		$this->db->query('ALTER TABLE  `wp_usermeta` ENGINE = InnoDB');
	 }

	public function down()	{
		### Drop table wp_usermeta ##
		$this->dbforge->drop_table("wp_usermeta", TRUE);

	}
}