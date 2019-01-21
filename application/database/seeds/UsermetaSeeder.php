<?php

class UsermetaSeeder extends Seeder {

    private $table = 'wp_usermeta';

    public function run() {
        $this->db->truncate($this->table);
        
        //seed records manually
        echo "seeding"  .$this->table;
        $this->db->query("INSERT INTO `wp_usermeta` (`umeta_id`, `user_id`, `meta_key`, `meta_value`) VALUES
(1, 1, 'nickname', 'admin'),
(2, 1, 'first_name', ''),
(3, 1, 'last_name', ''),
(4, 1, 'description', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(5, 1, 'rich_editing', 'true'),
(6, 1, 'syntax_highlighting', 'true'),
(7, 1, 'comment_shortcuts', 'false'),
(8, 1, 'admin_color', 'fresh'),
(9, 1, 'use_ssl', '0'),
(10, 1, 'show_admin_bar_front', 'true'),
(11, 1, 'locale', ''),
(12, 1, 'wp_capabilities', 'a:1:{s:13:administrator;b:1;}'),
(13, 1, 'wp_user_level', '10'),
(14, 1, 'dismissed_wp_pointers', 'wp496_privacy,text_widget_custom_html'),
(15, 1, 'show_welcome_panel', '1'),
(16, 1, 'session_tokens', 'a:2:{s:64:59961dea51195a9826d5b8516037150973363cde63c13abbf123e2ae46509af1;a:4:{s:10:expiration;i:1528866698;s:2:ip;s:11:192.168.1.6;s:2:ua;s:104:Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.79 Safari/537.36;s:5:login;i:1528693898;}s:64:10e2537278af62b6e6a9e671072df1e6b7f8daeb61a163749a3781f8e8e563f0;a:4:{s:10:expiration;i:1528868369;s:2:ip;s:12:192.168.1.14;s:2:ua;s:76:Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:47.0) Gecko/20100101 Firefox/47.0;s:5:login;i:1528695569;}}'),
(17, 1, 'wp_dashboard_quick_press_last_post_id', '4'),
(18, 1, 'community-events-location', 'a:1:{s:2:ip;s:11:192.168.1.0;}'),
(19, 1, 'wp_user-settings', 'libraryContent=browse&editor=html'),
(20, 1, 'wp_user-settings-time', '1528455545'),
(21, 1, 'closedpostboxes_post', 'a:0:{}'),
(22, 1, 'metaboxhidden_post', 'a:5:{i:0;s:13:trackbacksdiv;i:1;s:10:postcustom;i:2;s:16:commentstatusdiv;i:3;s:7:slugdiv;i:4;s:9:authordiv;}'),
(23, 1, 'meta-box-order_page', 'a:3:{s:4:side;s:36:submitdiv,pageparentdiv,postimagediv;s:6:normal;s:45:postcustom,commentstatusdiv,slugdiv,authordiv;s:8:advanced;s:0:;}'),
(24, 1, 'screen_layout_page', '2'),
(25, 1, 'closedpostboxes_page', 'a:0:{}'),
(26, 1, 'metaboxhidden_page', 'a:5:{i:0;s:10:postcustom;i:1;s:16:commentstatusdiv;i:2;s:7:slugdiv;i:3;s:9:authordiv;i:4;s:11:commentsdiv;}');");
        echo PHP_EOL;
    }
}
