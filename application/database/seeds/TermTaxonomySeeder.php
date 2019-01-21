<?php

class TermTaxonomySeeder extends Seeder {

    private $table = 'wp_term_taxonomy';

    public function run() {
        $this->db->truncate($this->table);
        
        //seed records manually
        echo "seeding  ".$this->table;
        $this->db->query("INSERT INTO `wp_term_taxonomy` (`term_taxonomy_id`, `term_id`, `taxonomy`, `description`, `parent`, `count`) VALUES
(1, 1, 'category', '', 0, 4)");
        echo PHP_EOL;
    }
}
