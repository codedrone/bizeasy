<?php

class TermRelationshipsSeeder extends Seeder {

    private $table = 'wp_term_relationships';

    public function run() {
        $this->db->truncate($this->table);
        
        //seed records manually
        echo "seeding  ".$this->table;
        $this->db->query("INSERT INTO `wp_term_relationships` (`object_id`, `term_taxonomy_id`, `term_order`) VALUES
(6, 1, 0),
(6, 2, 0),
(6, 3, 0),
(6, 4, 0),
(6, 5, 0),
(8, 1, 0),
(8, 2, 0),
(8, 3, 0),
(8, 4, 0),
(8, 5, 0),
(10, 1, 0),
(10, 2, 0),
(10, 3, 0),
(10, 4, 0),
(12, 1, 0),
(12, 2, 0),
(12, 3, 0),
(12, 4, 0),
(52, 2, 0),
(52, 3, 0),
(52, 4, 0),
(52, 5, 0),
(52, 6, 0),
(54, 2, 0),
(54, 3, 0),
(54, 4, 0),
(54, 6, 0),
(57, 2, 0),
(57, 3, 0),
(57, 4, 0),
(57, 5, 0),
(57, 6, 0),
(60, 2, 0),
(60, 3, 0),
(60, 4, 0),
(60, 6, 0),
(63, 2, 0),
(63, 3, 0),
(63, 4, 0),
(63, 6, 0),
(66, 2, 0),
(66, 3, 0),
(66, 4, 0),
(66, 5, 0),
(66, 6, 0);");
        echo PHP_EOL;
    }
}
