<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_wp_comments extends CI_Migration {

	public function up() {

		## Create Table wp_comments
		$this->dbforge->add_field("`comment_ID` bigint(20) unsigned NOT NULL auto_increment primary key");
		$this->dbforge->add_key("comment_ID",true);
		$this->dbforge->add_field("`comment_post_ID` bigint(20) unsigned NOT NULL ");
		$this->dbforge->add_field("`comment_author` tinytext NOT NULL ");
		$this->dbforge->add_field("`comment_author_email` varchar(100) NOT NULL ");
		$this->dbforge->add_field("`comment_author_url` varchar(200) NOT NULL ");
		$this->dbforge->add_field("`comment_author_IP` varchar(100) NOT NULL ");
		$this->dbforge->add_field("`comment_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ");
		$this->dbforge->add_field("`comment_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ");
		$this->dbforge->add_field("`comment_content` text NOT NULL ");
		$this->dbforge->add_field("`comment_karma` int(11) NOT NULL ");
		$this->dbforge->add_field("`comment_approved` varchar(20) NOT NULL DEFAULT '1' ");
		$this->dbforge->add_field("`comment_agent` varchar(255) NOT NULL ");
		$this->dbforge->add_field("`comment_type` varchar(20) NOT NULL ");
		$this->dbforge->add_field("`comment_parent` bigint(20) unsigned NOT NULL ");
		$this->dbforge->add_field("`user_id` bigint(20) unsigned NOT NULL ");
		$this->dbforge->create_table("wp_comments", TRUE);
		$this->db->query('ALTER TABLE  `wp_comments` ENGINE = InnoDB');
	 }

	public function down()	{
		### Drop table wp_comments ##
		$this->dbforge->drop_table("wp_comments", TRUE);

	}
}