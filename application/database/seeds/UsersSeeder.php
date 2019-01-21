<?php

class UsersSeeder extends Seeder {

    private $table = 'wp_users';

    public function run() {
        $this->db->truncate($this->table);
        
        //seed records manually
        echo "seeding  ".$this->table;
        $this->db->query("INSERT INTO `wp_users` (`ID`, `user_login`, `user_pass`, `user_nicename`, `user_email`, `user_url`, `user_registered`, `user_activation_key`, `user_status`, `display_name`) VALUES
(1, 'admin', 'DShjDShj', 'admin', 'demo1.testing1@gmail.com', '', '2018-06-07 08:20:45', '', 0, 'admin'),
(2, 'JohnDoe', 'DShjDShj', 'admin', 'demo1.testing1@gmail.com', '', '2018-06-07 08:20:45', '', 0, 'admin');");
        echo PHP_EOL;
    }
}
 