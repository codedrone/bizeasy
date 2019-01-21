<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_wp_users extends CI_Migration {

	public function up() {

		## Create Table wp_users
		$this->dbforge->add_field("`ID` bigint(20) unsigned NOT NULL auto_increment primary key");
		$this->dbforge->add_key("ID",true);
		$this->dbforge->add_field("`user_login` varchar(60) NOT NULL ");
		$this->dbforge->add_field("`user_pass` varchar(255) NOT NULL ");
		$this->dbforge->add_field("`user_nicename` varchar(50) NOT NULL ");
		$this->dbforge->add_field("`user_email` varchar(100) NOT NULL ");
		$this->dbforge->add_field("`user_url` varchar(100) NOT NULL ");
		$this->dbforge->add_field("`user_registered` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ");
		$this->dbforge->add_field("`user_activation_key` varchar(255) NOT NULL ");
		$this->dbforge->add_field("`user_status` int(11) NOT NULL ");
		$this->dbforge->add_field("`display_name` varchar(250) NOT NULL ");
		$this->dbforge->create_table("wp_users", TRUE);
		$this->db->query('ALTER TABLE  `wp_users` ENGINE = InnoDB');
	 }

	public function down()	{
		### Drop table wp_users ##
		$this->dbforge->drop_table("wp_users", TRUE);

	}
}