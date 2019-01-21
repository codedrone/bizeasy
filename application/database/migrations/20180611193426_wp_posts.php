<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_wp_posts extends CI_Migration {

	public function up() {

		## Create Table wp_posts
		$this->dbforge->add_field("`ID` bigint(20) unsigned NOT NULL auto_increment primary key");
		$this->dbforge->add_key("ID",true);
		$this->dbforge->add_field("`post_author` bigint(20) unsigned NOT NULL ");
		$this->dbforge->add_field("`post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ");
		$this->dbforge->add_field("`post_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ");
		$this->dbforge->add_field("`post_content` longtext NOT NULL ");
		$this->dbforge->add_field("`post_title` text NOT NULL ");
		$this->dbforge->add_field("`post_excerpt` text NOT NULL ");
		$this->dbforge->add_field("`post_status` varchar(20) NOT NULL DEFAULT 'publish' ");
		$this->dbforge->add_field("`comment_status` varchar(20) NOT NULL DEFAULT 'open' ");
		$this->dbforge->add_field("`ping_status` varchar(20) NOT NULL DEFAULT 'open' ");
		$this->dbforge->add_field("`post_password` varchar(255) NOT NULL ");
		$this->dbforge->add_field("`post_name` varchar(200) NOT NULL ");
		$this->dbforge->add_field("`to_ping` text NOT NULL ");
		$this->dbforge->add_field("`pinged` text NOT NULL ");
		$this->dbforge->add_field("`post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ");
		$this->dbforge->add_field("`post_modified_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ");
		$this->dbforge->add_field("`post_content_filtered` longtext NOT NULL ");
		$this->dbforge->add_field("`post_parent` bigint(20) unsigned NOT NULL ");
		$this->dbforge->add_field("`guid` varchar(255) NOT NULL ");
		$this->dbforge->add_field("`menu_order` int(11) NOT NULL ");
		$this->dbforge->add_field("`post_type` varchar(20) NOT NULL DEFAULT 'post' ");
		$this->dbforge->add_field("`post_mime_type` varchar(100) NOT NULL ");
		$this->dbforge->add_field("`comment_count` bigint(20) NOT NULL ");
		$this->dbforge->create_table("wp_posts", TRUE);
		$this->db->query('ALTER TABLE  `wp_posts` ENGINE = InnoDB');
	 }

	public function down()	{
		### Drop table wp_posts ##
		$this->dbforge->drop_table("wp_posts", TRUE);

	}
}