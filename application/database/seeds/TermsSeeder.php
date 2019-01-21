<?php

class TermsSeeder extends Seeder {

    private $table = 'wp_terms';

    public function run() {
        $this->db->truncate($this->table);
        
        //seed records manually
        echo "seeding  ".$this->table;
        $this->db->query("INSERT INTO `wp_terms` (`term_id`, `name`, `slug`, `term_group`) VALUES(1, 'Uncategorized', 'uncategorized', 0)");
        echo PHP_EOL;
    }
}
