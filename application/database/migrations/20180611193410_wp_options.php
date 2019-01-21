<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_wp_options extends CI_Migration {

	public function up() {

		## Create Table wp_options
		$this->dbforge->add_field("`option_id` bigint(20) unsigned NOT NULL auto_increment primary key");
		$this->dbforge->add_key("option_id",true);
		$this->dbforge->add_field("`option_name` varchar(191) NOT NULL ");
		$this->dbforge->add_field("`option_value` longtext NOT NULL ");
		$this->dbforge->add_field("`autoload` varchar(20) NOT NULL DEFAULT 'yes' ");
		$this->dbforge->create_table("wp_options", TRUE);
		$this->db->query('ALTER TABLE  `wp_options` ENGINE = InnoDB');
	 }

	public function down()	{
		### Drop table wp_options ##
		$this->dbforge->drop_table("wp_options", TRUE);

	}
}