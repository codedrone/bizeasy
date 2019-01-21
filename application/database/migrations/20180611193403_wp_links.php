<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_wp_links extends CI_Migration {

	public function up() {

		## Create Table wp_links
		$this->dbforge->add_field("`link_id` bigint(20) unsigned NOT NULL auto_increment primary key");
		$this->dbforge->add_key("link_id",true);
		$this->dbforge->add_field("`link_url` varchar(255) NOT NULL ");
		$this->dbforge->add_field("`link_name` varchar(255) NOT NULL ");
		$this->dbforge->add_field("`link_image` varchar(255) NOT NULL ");
		$this->dbforge->add_field("`link_target` varchar(25) NOT NULL ");
		$this->dbforge->add_field("`link_description` varchar(255) NOT NULL ");
		$this->dbforge->add_field("`link_visible` varchar(20) NOT NULL DEFAULT 'Y' ");
		$this->dbforge->add_field("`link_owner` bigint(20) unsigned NOT NULL DEFAULT '1' ");
		$this->dbforge->add_field("`link_rating` int(11) NOT NULL ");
		$this->dbforge->add_field("`link_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ");
		$this->dbforge->add_field("`link_rel` varchar(255) NOT NULL ");
		$this->dbforge->add_field("`link_notes` mediumtext NOT NULL ");
		$this->dbforge->add_field("`link_rss` varchar(255) NOT NULL ");
		$this->dbforge->create_table("wp_links", TRUE);
		$this->db->query('ALTER TABLE  `wp_links` ENGINE = InnoDB');
	 }

	public function down()	{
		### Drop table wp_links ##
		$this->dbforge->drop_table("wp_links", TRUE);

	}
}